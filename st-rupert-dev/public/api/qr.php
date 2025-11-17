<?php
require __DIR__ . '/../vendor/autoload.php';

use Endroid\QrCode\Builder\Builder;

header('Content-Type: image/png');

echo Builder::create()
    ->data('API Test QR Code')
    ->size(250)
    ->build()
    ->getString();
