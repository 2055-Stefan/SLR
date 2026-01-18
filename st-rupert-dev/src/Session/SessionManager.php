<?php
declare(strict_types=1);

namespace App\Session;

// Session-Security Best Practices:
// - secure=true: Session-Cookie wird nur über HTTPS übertragen (Schutz gegen Mitschneiden).
// - httponly=true: Cookie nicht per JS auslesbar (XSS-Schutz).
// - samesite=Lax: reduziert CSRF.
// - use_strict_mode + regenerate(): Schutz gegen Session-Fixation.
// Test Garbage Collection: divisor = 1 | maxLifetime = 5 - neuer Tab öffnen nach 5sec warten --> neue Session

class SessionManager 
{
    public static function configure(): void
    {
        ini_set('session.use_strict_mode', '1'); // Verhindert Session-Fixation (Angreifer gibt einen Session-Id vor)
        ini_set('session.use_only_cookies', '1'); // Nur Cookies für Session-ID, nicht in URL angezeigt
        ini_set('session.gc_maxlifetime', '1800'); // Session-Daten gelten nach 30min Inaktivität als löschbar; Bereinigung erfolgt per Garbage Collection
        ini_set('session.gc_probability', '1'); // probability/divisor für Garbage Collection
        ini_set('session.gc_divisor', '100'); // 1% Chance pro Request, dass Cleanup läuft

        session_set_cookie_params([
            'lifetime' => 0,
            'path' => '/',
            'domain' => null,
            'secure' => true,     // nur HTTPS
            'httponly' => true,   // kein JS-Zugriff (XSS)
            'samesite' => 'Lax', // Schutz gegen CSRF (ungewollte Ausführung einer Aktion mittels Cookies durch dritte)
        ]);
    }

    public static function start(): void
    {
        if (session_status() === PHP_SESSION_NONE) {
            self::configure();
            session_start();
        }
    }

     private static function ensureStarted(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            throw new \RuntimeException('Session not started. Call SessionManager::start() first.');
        }
    }

    public static function set(string $key, mixed $value): void
    {
        self::ensureStarted();
        $_SESSION[$key] = $value;
    }

    public static function get(string $key): mixed
    {
        self::ensureStarted();
        return $_SESSION[$key] ?? null;
    }

    public static function has(string $key): bool
    {
        self::ensureStarted();
        return isset($_SESSION[$key]);
    }

    public static function regenerate(): void
    {
        self::ensureStarted();
        session_regenerate_id(true);
    }


    public static function delete(string $key): void
    {
        self::ensureStarted();
        unset($_SESSION[$key]); 
    }

    public static function destroy(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            return;
        }
        
        session_unset(); // oder: $_SESSION = [];

        session_destroy();

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', [
                'expires'  => time() - 3600,
                'path'     => $params['path'],
                'domain'   => $params['domain'],
                'secure'   => $params['secure'],
                'httponly' => $params['httponly'],
                'samesite' => $params['samesite'] ?? 'Lax',
            ]);
        }
    }
}