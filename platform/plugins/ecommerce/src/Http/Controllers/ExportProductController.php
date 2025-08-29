<?php

namespace Botble\Ecommerce\Http\Controllers;

use Botble\DataSynchronize\Exporter\Exporter;
use Botble\DataSynchronize\Http\Controllers\ExportController;
use Botble\DataSynchronize\Http\Requests\ExportRequest;
use Botble\Ecommerce\Exporters\ProductExporter;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportProductController extends ExportController
{
    protected function getExporter(): Exporter
    {
        return ProductExporter::make();
    }

    protected function streamingExport(Exporter $exporter, ExportRequest $request): StreamedResponse
    {
        $fileName = str_replace('.xlsx', '.csv', $exporter->getExportFileName());

        return response()->streamDownload(function () use ($exporter, $request) {
            set_time_limit(0);
            ini_set('memory_limit', '512M');

            $handle = fopen('php://output', 'w');

            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            $columns = $exporter->getAcceptedColumns();
            $headers = $exporter->headings();
            fputcsv($handle, $headers);

            \DB::disableQueryLog();

            if ($request->has('include_variations') && method_exists($exporter, 'setIncludeVariations')) {
                $exporter->setIncludeVariations($request->boolean('include_variations'));
            }

            $collection = $exporter->collection();

            foreach ($collection as $item) {
                $row = $exporter->map($item);
                fputcsv($handle, $row);
            }

            \DB::enableQueryLog();

            fclose($handle);
        }, $fileName, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Cache-Control' => 'no-cache, no-store, must-revalidate',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ]);
    }
}
