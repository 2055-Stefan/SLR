<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../src/modules/Auth/JwtService.php';

header('Content-Type: application/json; charset=utf-8');

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed, use POST']);
    exit;
}

// Wir erwarten JSON: {"username": "...", "password": "..."}
$rawBody = file_get_contents('php://input');
$data    = json_decode($rawBody, true);

$username = $data['username'] ?? null;
$password = $data['password'] ?? null;

// Simple Demo-Credentials (für CORE3 völlig ausreichend)
if ($username !== 'demo' || $password !== 'secret') {
    http_response_code(401);
    echo json_encode(['error' => 'Invalid credentials']);
    error_log('JWT login failed for user: ' . ($username ?? 'unknown'));
    exit;
}

// Token ausstellen
$token = JwtService::createToken($username);

echo json_encode([
    'token'   => $token,
    'expires' => time() + 3600
]);
