# Pokergiants Relaunch

## Überblick

Pokergiants haben neue Besitzer, und die bestehende Homepage entspricht nicht mehr dem aktuellen Stand der Technik. Daher wird ein kompletter Relaunch durchgeführt. Das Ziel ist eine moderne, benutzerfreundliche Website, die Informationen zu Pokergiants, Veranstaltungen und der Pokerszene bereitstellt. Das Projekt basiert auf einem Laravel-basierten Content-Management-System (CMS) für die Verwaltung von Inhalten, Vereins- und Turnierverwaltung.

## Features

Das System bietet folgende Funktionen:

- **Infos & News über Pokergiants**: Aktuelle Informationen und Neuigkeiten.
- **Veranstaltungstermine**: Anzeige der nächsten 4 Termine von Pokergiants-Veranstaltungen (hauptsächlich Turniere).
- **Pokerszene-News**: Integration von News aus der allgemeinen Pokerszene via API zu einschlägigen Pokerseiten mit zufälliger Artikelauswahl.
- **Ergebnisse und Tabellen**: Darstellung von Ergebnissen und Tabellen vergangener Pokergiants-Veranstaltungen.
- **Content-Management**: Verwaltung von Inhalten für die Website.
- **Vereinsverwaltung**: Mitgliederverwaltung, Turnieranmeldungen und ähnliche Funktionen.
- **Turnierverwaltung**: Vollständige Verwaltung von Turnieren, inklusive Ranglistenerstellung.
- **Routing**: Serverseitiges Routing mit Laravel für öffentliche Unterseiten.
- **Rechtliche und informelle Routen**: Zusätzliche Unterseiten für rechtliche Informationen und informelle Inhalte.

## Tech Stack

- **Laravel**: PHP-Framework für das CMS und die API.
- **Laravel Breeze**: Für Authentifizierung (Web).
- **Datenbank**: Wahrscheinlich MySQL oder PostgreSQL (noch nicht spezifiziert).
- **Frontend**: Laravel Blade für serverseitiges Rendering und Styling.

### Lokale Entwicklungsumgebung

- **IDE**: PhpStorm 2025.2.6.
- **PHP**: Version 8.4, installiert unter `c:\php\php.exe`.
- **Composer**: Global installiert für PHP-Abhängigkeiten.
- **Node.js**: Version 24.11.0 (falls für Frontend-Tools benötigt).
- **npm**: Version 11.6.1 (falls für Frontend-Tools benötigt).

## Architektur und Best Practices

Das Projekt verwendet serverseitiges Rendering mit Laravel für eine gute SEO-Grundlage. Es umfasst:

- Route-basierte URLs (z. B. `/produkte`, `/produkte/:slug`).
- Optimierung für SEO durch korrekte Meta-Tags und semantische Struktur.

### Semantik & Struktur

Um Crawlability, Verständlichkeit und Accessibility zu verbessern:

- **Genau eine `<h1>` pro Seite/Route**: Als Hauptthema/Titel der Seite.
- **Überschriften-Hierarchie**: `<h1>` → `<h2>` → `<h3>` (keine Sprünge).
- **Meta-Tags pro Route**: Einzigartige `<title>` und `<meta name="description">`, optional OpenGraph für Social Sharing.
- **Saubere URL-Slugs**: Keyword-optimierte URLs (z. B. `/produkte/schwarz-weisses-t-shirt` statt `/produkt/123`).
- **Interne Verlinkung**: Von Übersichtsseiten zu Detailseiten und thematisch verwandten Inhalten.

### Ergänzungen für SEO und UX

- **Sitemap**: XML-Sitemap mit allen wichtigen URLs, verlinkt in `robots.txt` und eingereicht in der Search Console.

## Erwartungen und SEO

Das Laravel-Setup bietet eine solide SEO-Grundlage mit serverseitigem Rendering und wird gut indexiert, insbesondere bei hoher Inhaltsqualität.

## Installation und Setup

### Lokales Setup

1. **Repository klonen**: `git clone <repository-url> d:\Projekte\pokergiants_relaunch`
2. **Abhängigkeiten installieren**: `composer install`.
3. **Umgebung konfigurieren**: `.env` aus `.env.example` kopieren und anpassen (Datenbank, etc.).
4. **Datenbank migrieren**: `php artisan migrate`.
5. **Server starten**: `php artisan serve`.
6. **Projekt in PhpStorm öffnen**: Für Entwicklung und Debugging.

### Server und Deployment

Das Projekt wird während der Entwicklung direkt auf einem Staging-Server deployed. Die Subdomain ist via Verzeichnisschutz gesichert.

- **Server-Zugang**:
    - SSH-Zugang zum Webhoster (passwortlos via Public Key).
    - FTP-Zugang zum Root der Subdomain.
    - Webroot: `public`.
    - Datenbank: Auf dem Server eingerichtet.

- **Deployment in PhpStorm**:
    - Verwende eine SFTP/SSH-Extension (z. B. "Remote SSH" oder ähnliche) in PhpStorm.
    - Konfiguriere die Extension für automatischen Upload beim Speichern.
    - Stelle sicher, dass die `.env`-Datei nicht hochgeladen wird (in `.gitignore` ausschließen).

Sobald das Projekt initialisiert ist, folgen detaillierte Schritte zur Einrichtung der Deployment-Konfiguration.

Für Fragen oder Beiträge: kai.akkermann@kighlander.de
