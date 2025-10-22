<?php

namespace Botble\Ecommerce\Http\Controllers;

use Botble\DataSynchronize\Exporter\Exporter;
use Botble\DataSynchronize\Http\Controllers\ExportController;
use Botble\DataSynchronize\Http\Requests\ExportRequest;
use Botble\Ecommerce\Exporters\ProductExporter;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportProductController extends ExportController
{
    protected function getExporter(): Exporter
    {
        $exporter = ProductExporter::make();

        if (request()->has('include_variations') && method_exists($exporter, 'setIncludeVariations')) {
            $exporter->setIncludeVariations(request()->boolean('include_variations'));
        }

        if (request()->has('chunk_size') && method_exists($exporter, 'setChunkSize')) {
            $exporter->setChunkSize((int) request()->input('chunk_size'));
        }

        if (request()->has('use_chunked_export') && method_exists($exporter, 'useChunkedExport')) {
            $exporter->useChunkedExport(request()->boolean('use_chunked_export'));
        }

        if (request()->has('optimize_queries') && method_exists($exporter, 'setOptimizeQueries')) {
            $exporter->setOptimizeQueries(request()->boolean('optimize_queries', true));
        }

        if (request()->has('use_multi_file') && method_exists($exporter, 'enableMultiFile')) {
            $exporter->enableMultiFile(request()->boolean('use_multi_file'));
        }

        if (request()->has('records_per_file') && method_exists($exporter, 'setRecordsPerFile')) {
            $exporter->setRecordsPerFile((int) request()->input('records_per_file', 10000));
        }

        return $exporter;
    }

    public function store(ExportRequest $request)
    {
        $request->validate([
            'chunk_size' => ['nullable', 'integer', 'min:50', 'max:1000'],
            'use_chunked_export' => ['nullable', 'boolean'],
            'optimize_memory' => ['nullable', 'boolean'],
            'optimize_queries' => ['nullable', 'boolean'],
            'use_streaming' => ['nullable', 'boolean'],
            'include_variations' => ['nullable', 'boolean'],
            'use_multi_file' => ['nullable', 'boolean'],
            'records_per_file' => ['nullable', 'integer', 'min:1000', 'max:50000'],
        ]);

        $exporter = $this->getExporter();

        if ($request->boolean('use_multi_file') && method_exists($exporter, 'isMultiFileMode') && $exporter->isMultiFileMode()) {
            return $this->multiFileExport($exporter, $request);
        }

        return parent::store($request);
    }

    protected function streamingExport(Exporter $exporter, ExportRequest $request): StreamedResponse
    {
        $fileName = str_replace('.xlsx', '.csv', $exporter->getExportFileName());

        return response()->streamDownload(function () use ($exporter, $request): void {
            set_time_limit(0);
            ini_set('memory_limit', '256M');

            $handle = fopen('php://output', 'w');

            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            if ($request->has('columns')) {
                $exporter->acceptedColumns($request->input('columns'));
            }

            $headers = $exporter->headings();
            fputcsv($handle, $headers);

            DB::disableQueryLog();

            if ($request->has('include_variations') && method_exists($exporter, 'setIncludeVariations')) {
                $exporter->setIncludeVariations($request->boolean('include_variations'));
            }

            if ($request->has('use_streaming') && method_exists($exporter, 'enableStreamingMode')) {
                $exporter->enableStreamingMode($request->boolean('use_streaming'));
            }

            if ($request->has('optimize_queries') && method_exists($exporter, 'setOptimizeQueries')) {
                $exporter->setOptimizeQueries($request->boolean('optimize_queries'));
            }

            if (method_exists($exporter, 'isStreamingMode') && $exporter->isStreamingMode() && method_exists($exporter, 'streamingGenerator')) {
                foreach ($exporter->streamingGenerator() as $item) {
                    $row = $exporter->map($item);
                    fputcsv($handle, $row);

                    if (ob_get_level() > 0) {
                        ob_flush();
                    }
                    flush();
                }
            } else {
                $collection = $exporter->collection();
                foreach ($collection as $item) {
                    $row = $exporter->map($item);
                    fputcsv($handle, $row);
                }
            }

            DB::enableQueryLog();

            fclose($handle);
        }, $fileName, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }

    protected function multiFileExport(Exporter $exporter, ExportRequest $request): StreamedResponse
    {
        $baseFileName = pathinfo($exporter->getExportFileName(), PATHINFO_FILENAME);
        $zipFileName = $baseFileName . '.zip';

        return response()->streamDownload(function () use ($exporter, $request, $baseFileName): void {
            set_time_limit(0);
            ini_set('memory_limit', '512M');

            $zip = new \ZipArchive();
            $tempZipPath = tempnam(sys_get_temp_dir(), 'export_');

            if ($zip->open($tempZipPath, \ZipArchive::CREATE | \ZipArchive::OVERWRITE) !== true) {
                throw new \RuntimeException('Failed to create ZIP file');
            }

            if ($request->has('columns')) {
                $exporter->acceptedColumns($request->input('columns'));
            }

            if ($request->has('include_variations') && method_exists($exporter, 'setIncludeVariations')) {
                $exporter->setIncludeVariations($request->boolean('include_variations'));
            }

            if ($request->has('optimize_queries') && method_exists($exporter, 'setOptimizeQueries')) {
                $exporter->setOptimizeQueries($request->boolean('optimize_queries'));
            }

            $headers = $exporter->headings();
            $numberOfFiles = method_exists($exporter, 'getNumberOfFiles') ? $exporter->getNumberOfFiles() : 1;

            DB::disableQueryLog();

            for ($fileNumber = 1; $fileNumber <= $numberOfFiles; $fileNumber++) {
                $tempCsvPath = tempnam(sys_get_temp_dir(), 'csv_');
                $handle = fopen($tempCsvPath, 'w');

                fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));
                fputcsv($handle, $headers);

                if (method_exists($exporter, 'streamingGeneratorForFile')) {
                    foreach ($exporter->streamingGeneratorForFile($fileNumber) as $item) {
                        $row = $exporter->map($item);
                        fputcsv($handle, $row);
                    }
                }

                fclose($handle);

                $csvFileName = sprintf('%s_part%d.csv', $baseFileName, $fileNumber);
                $zip->addFile($tempCsvPath, $csvFileName);

                register_shutdown_function(function () use ($tempCsvPath): void {
                    if (file_exists($tempCsvPath)) {
                        @unlink($tempCsvPath);
                    }
                });
            }

            DB::enableQueryLog();

            $zip->close();

            readfile($tempZipPath);

            @unlink($tempZipPath);
        }, $zipFileName, [
            'Content-Type' => 'application/zip',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }
}
