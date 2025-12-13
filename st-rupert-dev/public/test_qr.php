<?php

require __DIR__ . '/../vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

$result = Builder::create()
    ->writer(new PngWriter())
    ->data('Hallo Lukas!')
    ->size(300)
    ->margin(10)
    ->build();

header('Content-Type: '.$result->getMimeType());
echo $result->getString();