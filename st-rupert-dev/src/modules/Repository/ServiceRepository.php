<?php
declare(strict_types=1);

namespace App\modules\Repository;

use App\modules\Seeder\Seeder;
use App\modules\Entities\MunicipalService;

class ServiceRepository
{
    private array $services;

    public function __construct()
    {
        $seeder = new Seeder();
        $this->services = $seeder->createDemoData();
    }

    public function findById(int $id): ?MunicipalService
    {
        foreach ($this->services as $service) {
            if ($service->getId() === $id) {
                return $service;
            }
        }

        return null;
    }

    public function getAll(): array
    {
        return $this->services;
    }
}
