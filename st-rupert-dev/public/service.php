<?php
declare(strict_types=1);

$id = $_GET['id'] ?? null;

echo <<<HTML
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Gemeindedienst Details</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        const SERVICE_ID = "$id";
    </script>
    <script src="js/service.js" defer></script>
</head>
<body>
    <header>
        <h1>Gemeindedienst</h1>
        <a href="/index.php" class="back-link">← Zurück</a>
    </header>

    <main>
        <div id="service-container" class="service-card">
            <p>Service wird geladen…</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Gemeinde St. Rupert</p>
    </footer>
</body>
</html>
HTML;
