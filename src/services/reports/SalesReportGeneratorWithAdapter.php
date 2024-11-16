<?php

namespace App\service\reports;

use DateTime;
use App\service\reports\contracts\PdfAdapterInterface;

readonly class SalesReportGeneratorWithAdapter
{
    public function __construct(private PdfAdapterInterface $pdfAdapter)
    {
    }

    public function generate(string $content): void
    {
        $filename = sprintf('%s.pdf', (new DateTime())->getTimestamp());

        $this->pdfAdapter->generate(filename: $filename, content: $content);
    }
}
