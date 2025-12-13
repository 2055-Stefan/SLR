<?php
declare(strict_types=1);

namespace App\modules\Seeder;

use App\modules\Entities\Application;
use App\modules\Entities\MunicipalService;

class Seeder
{
    public function createDemoData(): array
    {
        $service1 = new MunicipalService(1, "Bauamt", "Bauabteilung", 2024);
        $service1->addApplication(new Application(1, "Bauantrag", "Max Mustermann", "1001", "offen"));
        $service1->addApplication(new Application(2, "Renovierungsantrag", "Anna Huber", "1002", "genehmigt"));
        $service1->addApplication(new Application(3, "Zaunbau", "Peter Schmidt", "1003", "abgelehnt"));
        $service1->addApplication(new Application(4, "Carport-Aufbau", "Lisa Mayer", "1004", "in Bearbeitung"));

        $service2 = new MunicipalService(2, "Meldeamt", "Einwohnerwesen", 2023);
        $service2->addApplication(new Application(5, "Wohnsitzmeldung", "Markus Klein", "2001", "offen"));
        $service2->addApplication(new Application(6, "Abmeldung", "Julia Schwarz", "2002", "in Bearbeitung"));
        $service2->addApplication(new Application(7, "Namensänderung", "Clara Weiß", "2003", "genehmigt"));
        $service2->addApplication(new Application(8, "Zuzug", "David Huber", "2004", "offen"));

        $service3 = new MunicipalService(3, "Umweltamt", "Natur & Grünflächen", 2022);
        $service3->addApplication(new Application(9, "Baumfällgenehmigung", "Laura Berger", "3001", "offen"));
        $service3->addApplication(new Application(10, "Gartenhütte", "Tobias Gruber", "3002", "genehmigt"));
        $service3->addApplication(new Application(11, "Kompostplatz", "Sarah Leitner", "3003", "abgelehnt"));
        $service3->addApplication(new Application(12, "Heckenschnitt", "Nico Steiner", "3004", "in Bearbeitung"));

        return [$service1, $service2, $service3];
    }
}
