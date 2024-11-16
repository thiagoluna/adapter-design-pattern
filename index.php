<?php

use App\service\reports\SalesReportGenerator;

require "vendor/autoload.php";

$content = 'Foo Report Content';

$salesReportGenerator = new SalesReportGenerator();
$salesReportGenerator->generate($content);