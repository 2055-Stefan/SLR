<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/bootstrap.php';

use App\modules\BuildingApplication;
use App\modules\AppointmentBooking;
use App\Template\TemplateEngine;
use Twig\Loader\FilesystemLoader;
use App\Session\SessionManager;
use App\Cookies\CookieManager;
use Twig\Environment;

// Bauanträge und Termine

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

// CORE 4: US56 Demo HTML

$features = [
    [
        'title' => 'Digitale Bauanträge',
        'description' => 'Bauanträge online einreichen und verwalten.'
    ],
    [
        'title' => 'Terminbuchung',
        'description' => 'Online Termine im Bürgerbüro buchen.'
    ],
    [
        'title' => 'Gemeindedienste (API)',
        'description' => 'Zugriff auf Gemeindedienste über eine REST-API.'
    ]
];

$us56DemoHtml = TemplateEngine::render(
    __DIR__ . '/../templates/template.html',
    [
        'portal_name' => 'Bürgerportal St. Rupert',
        'features' => $features
    ]
);

// ADV Twig

$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig = new Environment($loader);

echo $twig->render('index.twig', [
    'buildingApps' => $buildingApps,
    'appointments' => $appointments,
    'us56DemoHtml' => $us56DemoHtml,
    'theme' => $theme,
    'visitCount' => SessionManager::get('visit_count')
]);
