<?php

require_once __DIR__ . '/modules/Application.php';
require_once __DIR__ . '/modules/MunicipalService.php';
require_once __DIR__ . '/modules/Seeder.php';

$seeder = new Seeder();
$demoData = $seeder->createDemoData();
foreach ($demoData as $service) {
    print_r($service);
}