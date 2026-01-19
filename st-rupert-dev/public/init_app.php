<?php
declare(strict_types=1);

use App\Session\SessionManager;
use App\Cookies\CookieManager;

SessionManager::start();

$theme = CookieManager::get('theme', 'light');

// Theme wechseln

if (isset($_GET['theme'])) {
    $theme = $_GET['theme'] === 'dark' ? 'dark' : 'light';
    CookieManager::set('theme', $theme);

    // zurück zur Seite, von der der Klick kam (inkl. id=...) - ist notwendig für service.php
    // Problem: HTTP_Referer ist nicht garantiert, kann fehlen oder manipuliert werden
    $back = $_SERVER['HTTP_REFERER'] ?? '/';
    header('Location: ' . $back);
    exit;
}

// Seitenaufrufe zählen
if (!SessionManager::has('visit_count')) {
    SessionManager::set('visit_count', 1);
} else {
    SessionManager::set('visit_count', SessionManager::get('visit_count') + 1);
}