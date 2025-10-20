<?php
class Application {
    private $id;
    private string $name;
    private string $applicant;
    private $applicationNumber;
    private string $status;

    public function __construct(?int $id, string $name, string $applicant, int $applicationNumber, string $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->applicant = $applicant;
        $this->applicationNumber = $applicationNumber;
        $this->status = $status;
    }
}
