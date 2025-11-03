<?php
class MunicipalService {
    private $id;
    private string $name;
    private string $relatedDepartment;
    private int $year;
    private array $associatedApplications;

    public function __construct(?int $id, string $name, string $relatedDepartment, string $year, array $associatedApplications = [])
    {
        $this->id = $id;
        $this->name = $name;
        $this->relatedDepartment = $relatedDepartment;
        $this->year = $year;
        $this->associatedApplications = $associatedApplications;
    }
}
