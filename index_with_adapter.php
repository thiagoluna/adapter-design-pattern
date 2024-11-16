<?php

use App\service\reports\adapters\DonPdfAdapter;
use App\service\reports\adapters\TcPdfAdapter;
use App\service\reports\SalesReportGeneratorWithAdapter;

require "vendor/autoload.php";

$content = 'Foo Report Content';

$pdfAdapter = new DonPdfAdapter();
$salesReportGenerator = new SalesReportGeneratorWithAdapter($pdfAdapter);
$salesReportGenerator->generate($content);

// OR

$pdfAdapter = new TcPdfAdapter();
$salesReportGenerator = new SalesReportGeneratorWithAdapter($pdfAdapter);
$salesReportGenerator->generate($content);