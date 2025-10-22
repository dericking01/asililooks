<?php

namespace Botble\Location\Http\Controllers;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\DataSynchronize\Exporter\Exporter;
use Botble\DataSynchronize\Http\Controllers\ExportController;
use Botble\DataSynchronize\Http\Requests\ExportRequest;
use Botble\Location\Enums\ImportType;
use Botble\Location\Exporters\LocationExporter;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportLocationController extends ExportController
{
    protected function getExporter(): Exporter
    {
        $exporter = LocationExporter::make();

        if (request()->has('import_type') && request()->input('import_type') !== '') {
            $exporter->setImportType(request()->input('import_type'));
        }

        if (request()->has('status') && request()->input('status') !== '') {
            $exporter->setStatus(request()->input('status'));
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

        return $exporter;
    }

    public function store(ExportRequest $request)
    {
        $request->validate([
            'import_type' => ['nullable', 'string', 'in:' . implode(',', ImportType::values())],
            'status' => ['nullable', 'string', 'in:' . implode(',', BaseStatusEnum::values())],
            'chunk_size' => ['nullable', 'integer', 'min:50', 'max:1000'],
            'use_chunked_export' => ['nullable', 'boolean'],
            'optimize_memory' => ['nullable', 'boolean'],
            'optimize_queries' => ['nullable', 'boolean'],
            'use_streaming' => ['nullable', 'boolean'],
        ]);

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

            if ($request->has('use_streaming') && method_exists($exporter, 'enableStreamingMode')) {
                $exporter->enableStreamingMode($request->boolean('use_streaming'));
            }

            if ($request->has('optimize_queries') && method_exists($exporter, 'setOptimizeQueries')) {
                $exporter->setOptimizeQueries($request->boolean('optimize_queries', true));
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
}
