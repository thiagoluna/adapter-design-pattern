<?php

namespace App\service\reports\contracts;

interface PdfAdapterInterface
{
    public function generate(string $filename, string $content): void;
}