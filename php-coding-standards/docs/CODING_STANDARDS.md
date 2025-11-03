# Coding Standards – PSR-12 Guide

## Ziel
Dieses Projekt hält sich an die [PSR-12 Coding Standard](https://www.php-fig.org/psr/psr-12/) Richtlinien.

## Tools
- **PHP CS Fixer** – automatisches Formatieren
- **GitHub Actions** – automatischer Style-Check bei jedem Commit
- **Composer-Script** `composer fix` – lokale Formatierung

## Regeln
- Code muss PSR-12-konform sein.
- Keine unbenutzten `use`-Statements.
- Nur Short-Arrays `[]` verwenden.
- Nur `'single quotes'` bei Strings ohne Variablen.

## Prozess
1. Beim Speichern formatiert die IDE automatisch.
2. Vor jedem Commit → `composer fix`.
3. GitHub Actions prüft Code Style.
4. Verstöße müssen behoben werden, bevor Merge möglich ist.