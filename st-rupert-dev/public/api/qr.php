<?php
// ...existing code...
require '../../vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// ...existing code...
$qrCode = new QrCode('https://www.example.com');

$writer = new PngWriter();
$result = $writer->write($qrCode);

header('Content-Type: ' . $result->getMimeType());
echo $result->getString();
// ...existing code...
?>