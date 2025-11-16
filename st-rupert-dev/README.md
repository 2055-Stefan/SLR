# St. Rupert Bürgerportal – CORE 3

Dieses Projekt implementiert ein modulares Gemeindeservice-Portal für die Gemeinde *St. Rupert*.  
Im Rahmen von **CORE 3** wurden objektorientierte PHP-Klassen, ein Seeder, eine REST-API,  
JavaScript-Fetch-Aufrufe, responsives UI-Design sowie eine vollständige **JWT-Authentifizierung** umgesetzt.

---

# 🚀 Features (Überblick)

- Objektorientierte Datenstrukturen (MunicipalService, Application)
- Seeder für Demo-Daten (3 Services × 4 Applications)
- API-Endpunkte (JSON)
- Detailseite für jeden Gemeindedienst
- JavaScript-Fetch für dynamische Daten
- Responsives Frontend
- JWT-Authentifizierung für geschützte Endpunkte
- Sauber strukturiertes Docker-Setup (Apache + PHP 8.2)

---

# 🐳 Installation (Docker)

Voraussetzungen:
- Docker
- Docker Compose

Starten des Projekts:

docker compose up --build

yaml
Code kopieren

Zugriff über den Browser:

http://localhost/

yaml
Code kopieren

---

# 📁 Projektstruktur

st-rupert-dev/
│
├── apache/ # Apache-Konfiguration + Logs
├── public/
│ ├── api/ # API-Endpunkte (services.php, service.php, auth.php)
│ ├── css/ # Stylesheets
│ ├── js/ # JavaScript (fetch logic)
│ ├── modules/ # Entities, Repository, Seeder
│ ├── index.php # Hauptseite (Frontend)
│ ├── service.php # Detailseite
│ └── demo.php # Testseite für US1 + US2
│
├── docker-compose.yaml # Webserver Setup
└── README.md

yaml
Code kopieren

---

# 🧪 Test Scripts

siehe Testskripts der einzelnen COREs  
z.B.: Core3_Testskript für CORE 3

---

# 📄 Lizenz

Dieses Projekt wurde im Rahmen des HTL Rennweg Unterrichts erstellt  
und dient ausschließlich zu Ausbildungszwecken.

---

# 👤 Autoren

- Stefan Scheer