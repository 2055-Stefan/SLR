<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../modules/Auth/JwtService.php';

function requireValidJwt(): array
{
    header('Content-Type: application/json; charset=utf-8');

    $authHeader = $_SERVER['HTTP_AUTHORIZATION'] ?? '';

    if (stripos($authHeader, 'Bearer ') !== 0) {
        http_response_code(401);
        echo json_encode(['error' => 'Missing or invalid Authorization header']);
        error_log('JWT: missing or invalid Authorization header');
        exit;
    }

    $token = trim(substr($authHeader, 7));

    try {
        $payload = JwtService::validateToken($token);
        return $payload;
    } catch (\Firebase\JWT\ExpiredException $e) {
        http_response_code(401);
        echo json_encode(['error' => 'Token expired']);
        error_log('JWT: token expired - ' . $e->getMessage());
        exit;
    } catch (\Throwable $e) {
        http_response_code(401);
        echo json_encode(['error' => 'Invalid token']);
        error_log('JWT: invalid token - ' . $e->getMessage());
        exit;
    }
}
