<?php

namespace App\service\reports;

use DateTime;
use Dompdf\Dompdf;

class SalesReportGenerator
{
    public function generate(string $content): void
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($content);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        $filename = (new DateTime())->getTimestamp() . '.pdf';

        file_put_contents($filename, $dompdf->output());
    }
}