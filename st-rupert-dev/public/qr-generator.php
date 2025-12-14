<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig   = new Environment($loader);

$qrCode = null;
$error  = null;
$input  = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = trim($_POST['phone'] ?? '');

    if (!preg_match('/^\+?[0-9 ]{3,20}$/', $input)) {
        $error = 'Bitte geben Sie eine gültige Telefonnummer ein.';
    } else {
        $result = Builder::create()
            ->writer(new PngWriter())
            ->data($input)
            ->size(200)
            ->margin(10)
            ->build();

        $qrCode = base64_encode($result->getString());
    }
}

echo $twig->render('qr-generator.twig', [
    'qrCode' => $qrCode,
    'error'  => $error,
    'input'  => $input
]);
