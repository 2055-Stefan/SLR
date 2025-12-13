<?php
declare(strict_types=1);
namespace App\modules\Entities;

class Application
{
    private ?int $id;
    private string $name;
    private string $applicant;
    private string $applicationNumber;
    private string $status;

    public function __construct(
        ?int $id,
        string $name,
        string $applicant,
        string $applicationNumber,
        string $status
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->applicant = $applicant;
        $this->applicationNumber = $applicationNumber;
        $this->status = $status;
    }

    public function getId(): ?int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getApplicant(): string { return $this->applicant; }
    public function getApplicationNumber(): string { return $this->applicationNumber; }
    public function getStatus(): string { return $this->status; }

    public function setStatus(string $status): void { $this->status = $status; }
}
