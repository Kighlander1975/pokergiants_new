# Pokergiants Relaunch

## Überblick

Pokergiants haben neue Besitzer, und die bestehende Homepage entspricht nicht mehr dem aktuellen Stand der Technik. Daher wird ein kompletter Relaunch durchgeführt. Das Ziel ist eine moderne, benutzerfreundliche Website, die Informationen zu Pokergiants, Veranstaltungen und der Pokerszene bereitstellt. Das Projekt umfasst ein Content-Management-System (CMS) für die Verwaltung von Inhalten und ein Backend für die Vereins- und Turnierverwaltung.

## Features

### Frontend

Das Frontend ist eine Single-Page-Application (SPA) basierend auf React und bietet folgende Funktionen:

- **Infos & News über Pokergiants**: Aktuelle Informationen und Neuigkeiten.
- **Veranstaltungstermine**: Anzeige der nächsten 4 Termine von Pokergiants-Veranstaltungen (hauptsächlich Turniere).
- **Pokerszene-News**: Integration von News aus der allgemeinen Pokerszene via API zu einschlägigen Pokerseiten mit zufälliger Artikelauswahl.
- **Ergebnisse und Tabellen**: Darstellung von Ergebnissen und Tabellen vergangener Pokergiants-Veranstaltungen.
- **Routing**: React-Routing zu öffentlichen Unterseiten (keine Routen mit Token oder Middleware erforderlich).
- **Rechtliche und informelle Routen**: Zusätzliche Unterseiten für rechtliche Informationen und informelle Inhalte.

### Backend

Das Backend basiert auf einem selbstentwickelten CMS-System, das Frontend und API kombiniert. Es ermöglicht:

- **Content-Management**: Verwaltung von Inhalten für das Frontend.
- **Vereinsverwaltung**: Mitgliederverwaltung, Turnieranmeldungen und ähnliche Funktionen.
- **Turnierverwaltung**: Vollständige Verwaltung von Turnieren, inklusive Ranglistenerstellung.

Details zur Backend-Implementierung werden noch ausgearbeitet.

## Tech Stack

### Frontend

- **React**: Grundlegende Technologie für die Benutzeroberfläche.
- **React Router**: Für Client-Side-Routing mit `BrowserRouter`.
- **react-helmet-async**: Für dynamische Meta-Tags pro Route (z. B. `<title>`, `<meta name="description">`, OpenGraph/Twitter Cards).
- **Weitere Tools**: Abhängig von der Implementierung (z. B. Axios für API-Aufrufe, CSS-Frameworks wie Tailwind oder Styled Components).

### Backend

- **Laravel**: PHP-Framework für das CMS und die API.
- **Laravel Sanctum**: Für Authentifizierung (Web und API).
- **Datenbank**: Wahrscheinlich MySQL oder PostgreSQL (noch nicht spezifiziert).

### Lokale Entwicklungsumgebung

- **IDE**: Visual Studio Code (VSCode).
- **PHP**: Version 8.4, installiert unter `c:\php\php.exe`.
- **Composer**: Global installiert für PHP-Abhängigkeiten.
- **Node.js**: Version 24.11.0.
- **npm**: Version 11.6.1.

## Architektur und Best Practices

### SPA-Setup (Client-Side Rendering)

Das Projekt verwendet ein klassisches SPA-Setup ohne Server-Side Rendering (SSR) oder Static Site Generation (SSG). Dies umfasst:

- Route-basierte URLs (z. B. `/produkte`, `/produkte/:slug`).
- Optimierung für SEO durch korrekte Meta-Tags und semantische Struktur.

### Semantik & Struktur

Um Crawlability, Verständlichkeit und Accessibility zu verbessern:

- **Genau eine `<h1>` pro Seite/Route**: Als Hauptthema/Titel der Seite.
- **Überschriften-Hierarchie**: `<h1>` → `<h2>` → `<h3>` (keine Sprünge).
- **Meta-Tags pro Route**: Einzigartige `<title>` und `<meta name="description">`, optional OpenGraph für Social Sharing.
- **Modals sparsam einsetzen**: Nur für nicht-wesentliche Inhalte; wichtige Inhalte als separate Seiten mit eigener URL.
- **Richtige Links**: Verwende `<a href="/ziel">Text</a>` oder `<Link to="/ziel">` in React Router statt reiner `onClick`-Handler, um Crawlern und Benutzern Navigation zu ermöglichen.

### Ergänzungen für SEO und UX

- **Sitemap**: XML-Sitemap mit allen wichtigen URLs, verlinkt in `robots.txt` und eingereicht in der Search Console.
- **Saubere URL-Slugs**: Keyword-optimierte URLs (z. B. `/produkte/schwarz-weisses-t-shirt` statt `/produkt/123`).
- **Interne Verlinkung**: Von Übersichtsseiten zu Detailseiten und thematisch verwandten Inhalten.

## Erwartungen und SEO

Mit diesem SPA-Setup ist die Website ordentlich SEO-freundlich aufgestellt und wird in vielen Fällen gut indexiert, insbesondere bei geringer Konkurrenz und hoher Inhaltsqualität. Es erreicht nicht 100 % der Vorteile von SSR/SSG, ist aber für viele Projekte vollkommen ausreichend.

## Installation und Setup

### Lokales Setup

1. **Repository klonen**: `git clone <repository-url> d:\Projekte\pokergiants_relaunch`
2. **Backend (Laravel)**:
   - In das Backend-Verzeichnis wechseln (z. B. `cd backend`).
   - Abhängigkeiten installieren: `composer install`.
   - Umgebung konfigurieren: `.env` aus `.env.example` kopieren und anpassen (Datenbank, etc.).
   - Datenbank migrieren: `php artisan migrate`.
   - Server starten: `php artisan serve`.
3. **Frontend (React)**:
   - In das Frontend-Verzeichnis wechseln (z. B. `cd frontend`).
   - Abhängigkeiten installieren: `npm install`.
   - Entwicklungsserver starten: `npm start`.
4. **VSCode öffnen**: Projekt in VSCode öffnen.

### Server und Deployment

Das Projekt wird während der Entwicklung direkt auf einem Staging-Server deployed. Die Subdomain ist via Verzeichnisschutz gesichert.

- **Server-Zugang**:

  - SSH-Zugang zum Webhoster (passwortlos via Public Key).
  - FTP-Zugang zum Root der Subdomain.
  - Webroot: `public`.
  - Datenbank: Auf dem Server eingerichtet.

- **Deployment in VSCode**:
  - Verwende eine SFTP/SSH-Extension (z. B. "SFTP" von liximomo) in VSCode.
  - Konfiguriere die Extension für automatischen Upload beim Speichern.
  - Build-Dateien (z. B. aus `npm run build`) werden in das `public`-Verzeichnis auf dem Server hochgeladen.
  - Stelle sicher, dass die `.env`-Datei nicht hochgeladen wird (in `.gitignore` ausschließen).

Sobald das Projekt initialisiert ist, folgen detaillierte Schritte zur Einrichtung der Deployment-Konfiguration.

Für Fragen oder Beiträge: [Kontaktinformationen einfügen, falls vorhanden].
