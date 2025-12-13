<?php
namespace App\modules;

class BuildingApplication extends AbstractPortalModule {
    private string $description;

    public function __construct(string $title, string $source, string $description) {
        parent::__construct($title, $source);
        $this->description = $description;
    }

    public function render(): string {
        return "
        <article class='building-application'>
            <h2>{$this->getTitle()}</h2>
            <p>{$this->description}</p>
            <small>Quelle: {$this->getSource()}</small>
        </article>";
    }
}
?>