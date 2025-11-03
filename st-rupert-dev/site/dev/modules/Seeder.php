<?php

require_once __DIR__ . '/Application.php';
require_once __DIR__ . '/MunicipalService.php';

class seeder {
    public function createDemoData(): array
    {
        $applications1 = [
            new Application(1, "Bauantrag", "Max Mustermann", 1001, "offen"),
            new Application(2, "Renovierungsantrag", "Anna Huber", 1002, "genehmigt"),
            new Application(3, "Zaunbau", "Peter Schmidt", 1003, "abgelehnt"),
            new Application(4, "Carport-Aufbau", "Lisa Mayer", 1004, "in Bearbeitung")
        ];
        $service1 = new MunicipalService(1, "Bauamt", "Bauabteilung", 2024, $applications1);

        $applications2 = [
            new Application(5, "Wohnsitzmeldung", "Markus Klein", 2001, "offen"),
            new Application(6, "Abmeldung", "Julia Schwarz", 2002, "in Bearbeitung"),
            new Application(7, "Namensänderung", "Clara Weiß", 2003, "genehmigt"),
            new Application(8, "Zuzug", "David Huber", 2004, "offen")
        ];
        $service2 = new MunicipalService(2, "Meldeamt", "Einwohnerwesen", 2023, $applications2);

        $applications3 = [
            new Application(9, "Baumfällgenehmigung", "Laura Berger", 3001, "offen"),
            new Application(10, "Gartenhütte", "Tobias Gruber", 3002, "genehmigt"),
            new Application(11, "Kompostplatz", "Sarah Leitner", 3003, "abgelehnt"),
            new Application(12, "Heckenschnitt", "Nico Steiner", 3004, "in Bearbeitung")
        ];
        $service3 = new MunicipalService(3, "Umweltamt", "Natur & Grünflächen", 2022, $applications3);

        return [$service1, $service2, $service3];
    }
}