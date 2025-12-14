<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\modules\Repository\ServiceRepository;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    http_response_code(400);
    die('Ungültige Service-ID');
}


$repo    = new ServiceRepository();
$service = $repo->findById($id);

if (!$service) {
    http_response_code(404);
    die('Service nicht gefunden');
}

$qrResult = Builder::create()
    ->writer(new PngWriter())
    ->data($service->getEmergencyNumber())
    ->size(200)
    ->margin(10)
    ->build();

$qrBase64 = base64_encode($qrResult->getString());

$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig   = new Environment($loader);

echo $twig->render('service.twig', [
    'service' => $service,
    'qrCode'  => $qrBase64
]);
