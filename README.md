# Freelance Homepage

A conversion-focused marketing site and client dashboard for a freelance Laravel/PHP consultant, targeting Swedish SMEs looking for custom web development, integrations, and business systems as an alternative to WordPress.

Built on the [Laravel Livewire starter kit](https://laravel.com/docs/starter-kits), with a public marketing site (Swedish default, English at `/en/`) and an authenticated dashboard for reviewing contact form submissions.

## Tech Stack

- **PHP** 8.5 · **Laravel** 13
- **Livewire** 4 + **Flux UI** 2 (free) — reactive dashboard/auth components
- **Laravel Fortify** — authentication (login, registration, 2FA, passkeys, email verification)
- **mcamara/laravel-localization** — locale-aware routing (`sv` default, `en` at `/en/`)
- **Tailwind CSS** 4 + **Vite**
- **Pest** 4 / **PHPUnit** 12 — testing
- **Laravel Pint** — code style
- **Laravel Boost** — MCP dev tooling (Artisan/docs/schema access for AI-assisted development)

## Project Structure

```
app/
  Http/Controllers/     HomeController, ContactController (marketing site)
  Http/Requests/        ContactRequest (contact form validation)
  Livewire/             Dashboard, ContactSubmissions, Settings (auth-gated)
  Actions/Fortify/      Custom Fortify actions (user creation, password reset)
  Mail/                 ContactFormMail
  Models/                User, ContactSubmission

resources/views/
  components/marketing/ Homepage sections (hero, services, security, FAQ, contact, ...)
  layouts/marketing.blade.php   SEO meta, OG/Twitter cards, JSON-LD
  layouts/app.blade.php         Authenticated dashboard shell
  home.blade.php                Homepage composition

routes/
  web.php        Marketing routes (locale-prefixed) + dashboard routes
  settings.php   Livewire-based settings pages (profile, appearance, security)
  console.php

database/migrations/   users, passkeys, two-factor columns, contact_submissions
lang/sv, lang/en        Translation strings
```

## Homepage Sections

The homepage (`resources/views/home.blade.php`) is composed of 12 Blade components under `resources/views/components/marketing/`: nav, hero, social proof, pain points, solution, services, security, process, comparison, benefits, case studies, FAQ, and contact — each independently reusable and covered by feature tests.

## Getting Started

```bash
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

Run the full dev environment (server, queue listener, log tailing, Vite) in one command:

```bash
composer dev
```

Or run pieces individually:

```bash
php artisan serve
npm run dev      # Vite dev server
php artisan queue:listen
php artisan pail # log viewer
```

## Testing & Code Style

```bash
composer test        # config:clear + pint:check + php artisan test
php artisan test --compact --filter=TestName
vendor/bin/pint --dirty --format agent
```

## Localization

Marketing routes are locale-aware via `mcamara/laravel-localization`: Swedish is the default locale (no URL prefix), English is served under `/en/`. Authenticated app routes (dashboard, settings) are not localized.

## Current Status

See [`roadmap.md`](roadmap.md) for the phased build plan. Foundation and homepage sections (Phases 1–2) plus the contact-submissions dashboard are complete. Remaining work covers additional standalone pages, SEO/performance, accessibility QA, and launch prep.
