<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/modules/Entities/Application.php';
require_once __DIR__ . '/../src/modules/Entities/MunicipalService.php';
require_once __DIR__ . '/../src/modules/Seeder/Seeder.php';

header('Content-Type: application/json; charset=utf-8');

$seeder = new Seeder();
$data = $seeder->createDemoData();

echo json_encode(array_map(function ($service) {
    return [
        "id" => $service->getId(),
        "name" => $service->getName(),
        "relatedDepartment" => $service->getRelatedDepartment(),
        "year" => $service->getYear(),
        "applications" => array_map(function ($app) {
            return [
                "id" => $app->getId(),
                "name" => $app->getName(),
                "applicant" => $app->getApplicant(),
                "applicationNumber" => $app->getApplicationNumber(),
                "status" => $app->getStatus()
            ];
        }, $service->getApplications())
    ];
}, $data), JSON_PRETTY_PRINT);
