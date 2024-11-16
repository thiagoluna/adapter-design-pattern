<?php

namespace App\service\reports\adapters;

use App\service\reports\contracts\PdfAdapterInterface;
use Dompdf\Dompdf;

class DonPdfAdapter implements PdfAdapterInterface
{

    public function generate(string $filename, string $content): void
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml($content);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();

        file_put_contents($filename, $dompdf->output());
    }
}