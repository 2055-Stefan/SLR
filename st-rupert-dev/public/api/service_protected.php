<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/jwt_guard.php';

use App\modules\Repository\ServiceRepository;

header('Content-Type: application/json; charset=utf-8');

$payload = requireValidJwt();

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if ($id === null || $id === false || $id < 1) {
    http_response_code(400);
    echo json_encode(['error' => "Invalid or missing 'id' parameter"]);
    exit;
}

$repo    = new ServiceRepository();
$service = $repo->findById($id);

if ($service === null) {
    http_response_code(404);
    echo json_encode(['error' => "Service with id $id not found"]);
    exit;
}

$response = [
    'id'                => $service->getId(),
    'name'              => $service->getName(),
    'relatedDepartment' => $service->getRelatedDepartment(),
    'year'              => $service->getYear(),
    'applications'      => array_map(function ($app) {
        return [
            'id'               => $app->getId(),
            'name'             => $app->getName(),
            'applicant'        => $app->getApplicant(),
            'applicationNumber'=> $app->getApplicationNumber(),
            'status'           => $app->getStatus(),
        ];
    }, $service->getApplications()),
];

echo json_encode($response, JSON_PRETTY_PRINT);
