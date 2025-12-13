<?php
namespace App\modules;
interface PortalModule {
    public function getTitle(): string;
    public function getSource(): string;
    public function render(): string;
}
?>