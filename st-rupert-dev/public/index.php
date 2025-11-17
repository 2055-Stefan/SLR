<?php
declare(strict_types=1);

require_once __DIR__ . '/../src/modules/BuildingApplication.php';
require_once __DIR__ . '/../src/modules/AppointmentBooking.php';
require_once __DIR__ . '/../vendor/autoload.php';

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

$buildingAppEntries = "";
foreach ($buildingApps as $app) {
    $buildingAppEntries .= $app->render();
}

$appointmentEntries = "";
foreach ($appointments as $appt) {
    $appointmentEntries .= $appt->render();
}

echo <<<HTML
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>St. Rupert – Bürgerportal Vorschau</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="/js/app.js" defer></script>
</head>
<body>
    <header>
        <h1>Bürgerportal St. Rupert</h1>
        <p>Vorschau der Portal-Module (Version 1.0.0)</p>
    </header>

    <main>

        <!-- Bauanträge -->
        <section>
            <h2>Bauanträge</h2>
            <div class="entries">
                $buildingAppEntries
            </div>
        </section>

        <!-- Terminbuchungen -->
        <section>
            <h2>Terminbuchungen</h2>
            <div class="entries">
                $appointmentEntries
            </div>
        </section>

        <!-- US4 – Live geladene Gemeindedienste -->
        <section>
            <h2>Gemeindedienste (API)</h2>
            <p>Diese Daten werden via JavaScript Fetch von /api/services.php geladen.</p>
            <ul id="service-list"></ul>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 Gemeinde St. Rupert | Bürgerportal</p>
    </footer>
</body>
</html>
HTML;