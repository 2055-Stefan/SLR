<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use App\modules\BuildingApplication;
use App\modules\AppointmentBooking;
use App\Template\TemplateEngine;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$buildingApps = [
    new BuildingApplication("Bauantrag A", "Amt St. Rupert", "Neubau eines Einfamilienhauses."),
    new BuildingApplication("Bauantrag B", "Amt St. Rupert", "Anbau einer Garage."),
    new BuildingApplication("Bauantrag C", "Amt St. Rupert", "Umbau eines Dachgeschosses."),
    new BuildingApplication("Bauantrag D", "Amt St. Rupert", "Modernisierung eines Altbaus."),
    new BuildingApplication("Bauantrag E", "Amt St. Rupert", "Errichtung eines Wintergartens.")
];

$appointments = [
    new AppointmentBooking("Termin A", "Bürgerbüro", "13.10.2025 10:00 Uhr"),
    new AppointmentBooking("Termin B", "Bürgerbüro", "14.10.2025 11:30 Uhr"),
    new AppointmentBooking("Termin C", "Bürgerbüro", "15.10.2025 09:45 Uhr"),
    new AppointmentBooking("Termin D", "Bürgerbüro", "16.10.2025 13:15 Uhr"),
    new AppointmentBooking("Termin E", "Bürgerbüro", "17.10.2025 15:00 Uhr")
];


// US5 – CORE

$us5DemoHtml = TemplateEngine::render(
    __DIR__ . '/../templates/us5-demo.html',
    [
        'title'       => 'US5 – Eigenes Templating',
        'description' => 'Diese Ausgabe wird mit fread/file_get_contents und str_replace erzeugt.'
    ]
);


// ADV – Twig

$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig   = new Environment($loader);

echo $twig->render('index.twig', [
    'buildingApps' => $buildingApps,
    'appointments' => $appointments,
    'us5DemoHtml'  => $us5DemoHtml
]);
