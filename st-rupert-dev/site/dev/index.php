<?php
require_once "modules/BuildingApplication.php";
require_once "modules/AppointmentBooking.php";

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
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>St. Rupert – Bürgerportal Vorschau</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Bürgerportal St. Rupert</h1>
        <p>Vorschau der Portal-Module (Version 1.0.0)</p>
    </header>

    <main>
        <section>
            <h2>Bauanträge</h2>
            <div class="entries">
                <?php
                foreach ($buildingApps as $app) {
                    echo $app->render();
                }
                ?>
            </div>
        </section>

        <section>
            <h2>Terminbuchungen</h2>
            <div class="entries">
                <?php
                foreach ($appointments as $appt) {
                    echo $appt->render();
                }
                ?>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Gemeinde St. Rupert | Bürgerportal</p>
    </footer>
</body>
</html>