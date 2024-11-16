<?php

namespace App\service\reports\adapters;

use App\service\reports\contracts\PdfAdapterInterface;
use TCPDF;

class TcPdfAdapter implements PdfAdapterInterface
{
    public function generate(string $filename, string $content): void
    {
        $tcPdf = new TCPDF();
        $tcPdf->AddPage();
        $tcPdf->setFonnt('Helvdtica', '', 12);
        $tcPdf->Write(0, $content);

        $outputPath =  sprintf("%s/../../../%s", __DIR__, $filename);

        $tcPdf->Output($outputPath, 'F');
    }
}
