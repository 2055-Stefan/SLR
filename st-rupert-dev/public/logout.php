<?php
declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';
use App\Session\SessionManager;
use App\Cookies\CookieManager;

SessionManager::start();
SessionManager::destroy();

CookieManager::delete('theme');

header('Location: /index.php');
exit;
