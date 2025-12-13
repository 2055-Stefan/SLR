<?php
declare(strict_types=1);
namespace App\modules\Entities;

class MunicipalService
{
    private ?int $id;
    private string $name;
    private string $relatedDepartment;
    private int $year;

    /** @var Application[] */
    private array $associatedApplications = [];

    public function __construct(
        ?int $id,
        string $name,
        string $relatedDepartment,
        int $year,
        array $associatedApplications = []
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->relatedDepartment = $relatedDepartment;
        $this->year = $year;
        $this->associatedApplications = $associatedApplications;
    }

    public function addApplication(Application $application): void
    {
        $this->associatedApplications[] = $application;
    }

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getRelatedDepartment(): string { return $this->relatedDepartment; }
    public function getYear(): int { return $this->year; }
    public function getApplications(): array { return $this->associatedApplications; }
}
