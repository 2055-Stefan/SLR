<?php
require_once __DIR__ . '/../vendor/autoload.php';

use App\modules\Repository\ServiceRepository;

$repo = new ServiceRepository();

$services = $repo->getAll();

var_dump($services);

echo "\n\n--- IDs ---\n";
foreach ($services as $s) {
    var_dump($s->getId());
}
