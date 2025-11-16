<?php
declare(strict_types=1);

require_once __DIR__ . '/../modules/Entities/Application.php';
require_once __DIR__ . '/../modules/Entities/MunicipalService.php';
require_once __DIR__ . '/../modules/Seeder/Seeder.php';
require_once __DIR__ . '/../modules/Repository/ServiceRepository.php';

header('Content-Type: application/json; charset=utf-8');

$repo = new ServiceRepository();
$services = $repo->getAll(); // Das fügen wir unten hinzu

$response = array_map(function ($service) {
    return [
        "id" => $service->getId(),
        "name" => $service->getName(),
        "relatedDepartment" => $service->getRelatedDepartment(),
        "year" => $service->getYear()
    ];
}, $services);

echo json_encode($response, JSON_PRETTY_PRINT);
