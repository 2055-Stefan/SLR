# CORE 3 – Test Script

Dieses Testskript dient zur schnellen Überprüfung aller User Stories (US1–US6).

---

## US1 & US2 — Klassenstruktur & Seeder
**Test:**  
Öffnen:

http://localhost/demo.php

yaml
Code kopieren

**Erwartet:**  
JSON mit 3 Services, jeweils 4 Applications.

---

## US3 — Einzelnen Gemeindedienst per API abrufen
**Tests:**

curl http://localhost/api/service.php?id=1
curl http://localhost/api/service.php
curl http://localhost/api/service.php?id=999

yaml
Code kopieren

**Erwartet:**  
- `id=1` → Service-JSON  
- ohne ID → Fehler  
- ungültige ID → Fehler  

---

## US4 — Alle Dienste via JavaScript fetch() anzeigen
**Test:**  
Öffnen:

http://localhost/

yaml
Code kopieren

**Erwartet:**  
- Liste unter „Gemeindedienste (API)“
- DevTools → Network → `services.php` = **200 OK**

---

## US5 — Detailseite eines Gemeindedienstes
**Test:**  
Auf einen Service klicken oder direkt öffnen:

http://localhost/service.php?id=1

yaml
Code kopieren

**Erwartet:**  
Titel, Abteilung, Jahr, Applications werden angezeigt.

---

## US6 — JWT Authentifizierung

### Token erstellen
curl -X POST http://localhost/api/auth.php
-H "Content-Type: application/json"
-d '{"username":"demo","password":"secret"}'

shell
Code kopieren

### Protected Endpoint (gültiger Token)
curl http://localhost/api/services_protected.php
-H "Authorization: Bearer TOKEN"

shell
Code kopieren

### Protected Endpoint (kein Token)
curl http://localhost/api/services_protected.php

shell
Code kopieren

### Protected Endpoint (falscher Token)
curl http://localhost/api/services_protected.php
-H "Authorization: Bearer INVALID"

yaml
Code kopieren

---

# Fertig
Dieses Skript ermöglicht die vollständige Demonstration aller CORE-3 User Stories.