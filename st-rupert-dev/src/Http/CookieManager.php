<?php
declare(strict_types=1);

namespace App\Http;

class CookieManager
{
    public static function set(
        string $name,
        string $value,
        int $lifetime = 3600
    ): void {
        setcookie(
            $name,
            $value,
            [
                'expires' => time() + $lifetime,
                'path' => '/',
                'secure' => true,
                'httponly' => false,
                'samesite' => 'Lax'
            ]
        );
    }

    public static function get(string $name): ?string
    {
        return $_COOKIE[$name] ?? null;
    }

    public static function delete(string $name): void
    {
        setcookie($name, '', time() - 3600, '/');
    }
}
