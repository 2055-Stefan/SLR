<?php
declare(strict_types=1);

require_once __DIR__ . '/jwt_guard.php';

require_once __DIR__ . '/../../src/modules/Entities/Application.php';
require_once __DIR__ . '/../../src/modules/Entities/MunicipalService.php';
require_once __DIR__ . '/../../src/modules/Seeder/Seeder.php';
require_once __DIR__ . '/../../src/modules/Repository/ServiceRepository.php';


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
