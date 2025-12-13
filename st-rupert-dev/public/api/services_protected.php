<?php
declare(strict_types=1);


require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/jwt_guard.php';

use App\modules\Repository\ServiceRepository;


header('Content-Type: application/json; charset=utf-8');

$payload = requireValidJwt();

$repo     = new ServiceRepository();
$services = $repo->getAll();

$response = array_map(function ($service) {
    return [
        'id'                => $service->getId(),
        'name'              => $service->getName(),
        'relatedDepartment' => $service->getRelatedDepartment(),
        'year'              => $service->getYear(),
    ];
}, $services);

echo json_encode($response, JSON_PRETTY_PRINT);
