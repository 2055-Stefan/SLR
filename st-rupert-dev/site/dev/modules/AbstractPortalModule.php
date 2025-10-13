<?php
require_once "PortalModule.php";

abstract class AbstractPortalModule implements PortalModule {
    protected string $title;
    protected string $source;

    public function __construct(string $title, string $source) {
        $this->title = $title;
        $this->source = $source;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getSource(): string {
        return $this->source;
    }

    abstract public function render(): string;
}
?>