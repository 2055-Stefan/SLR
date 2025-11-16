<?php
declare(strict_types=1);

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JwtService
{
    private const SECRET   = 'change-this-to-a-long-random-secret';
    private const ISSUER   = 'st-rupert-dev';
    private const LIFETIME = 3600; // Sekunden = 1 Stunde

    public static function createToken(string $userId): string
    {
        $now = time();

        $payload = [
            'iss' => self::ISSUER,
            'iat' => $now,
            'exp' => $now + self::LIFETIME,
            'sub' => $userId,
        ];

        return JWT::encode($payload, self::SECRET, 'HS256');
    }

    public static function validateToken(string $token): array
    {
        $decoded = JWT::decode($token, new Key(self::SECRET, 'HS256'));
        return (array) $decoded;
    }
}
