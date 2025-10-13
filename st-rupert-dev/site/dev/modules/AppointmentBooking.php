<?php
require_once "AbstractPortalModule.php";

class AppointmentBooking extends AbstractPortalModule {
    private string $date;

    public function __construct(string $title, string $source, string $date) {
        parent::__construct($title, $source);
        $this->date = $date;
    }

    public function render(): string {
        return "
        <article class='appointment'>
            <h2>{$this->getTitle()}</h2>
            <p>Termin: {$this->date}</p>
            <small>Quelle: {$this->getSource()}</small>
        </article>";
    }
}
?>