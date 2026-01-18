<?php
declare(strict_types=1);

namespace App\Cookies;

class CookieManager
{
    public static function set(
        string $name,
        string $value,
        int $lifetime = 3600
    ): void {
        setCookie (
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

    public static function get(string $name): ?string {
        return $_COOKIE[$name] ?? null;
    }

    public static function delete(string $name): void {
        setCookie($name, '', [
            'expires' => time() - 3600,
            'path' => '/',
            'secure' => true,
            'httponly' => false,
            'samesite' => 'Lax',
        ]);
    }

}
