# Project Roadmap

## Phase 1 — Foundation ✅

- [x] Laravel routing: `GET /` → `HomeController@index`, `POST /kontakt` → `ContactController@store`
- [x] `HomeController` — returns `home` view
- [x] `ContactController` — validates, sends mail, redirects with flash
- [x] `ContactRequest` — validation rules (name, email, company, message min:20, budget enum)
- [x] `ContactFormMail` — Mailable with envelope (subject + replyTo)
- [x] `resources/views/mail/contact-form.blade.php` — Markdown email template
- [x] `resources/views/layouts/marketing.blade.php` — dark layout with SEO meta, OG, Twitter Card, JSON-LD structured data
- [x] `resources/views/home.blade.php` — `@extends` scaffold wiring all 12 section components

## Phase 2 — Homepage Sections ✅

- [x] `nav.blade.php` — sticky header, scroll-aware Alpine.js, mobile hamburger menu
- [x] `hero.blade.php` — full-screen hero, availability badge, dual CTA, trust signals
- [x] `social-proof.blade.php` — industry badge strip
- [x] `pain-points.blade.php` — 4 problem cards (WordPress, manual work, silos, security)
- [x] `solution.blade.php` — value proposition with stat cards
- [x] `services.blade.php` — 8-service grid (`#tjanster`)
- [x] `security.blade.php` — 6-point security section (business-framed)
- [x] `process.blade.php` — 4-step process with deliverable badges (`#process`)
- [x] `comparison.blade.php` — skräddarsytt vs. WordPress comparison table
- [x] `benefits.blade.php` — 3 benefit cards (Tillväxt, Tid, Stabil drift)
- [x] `case-studies.blade.php` — 3 placeholder anonymised cases
- [x] `faq.blade.php` — 8-item Alpine.js accordion (`#faq`)
- [x] `contact.blade.php` — contact form with validation display, flash success (`#kontakt`)
- [x] `footer.blade.php` — 4-column footer with nav, contact info placeholders
- [x] Feature tests — 5 passing Pest tests (`HomepageTest.php`)

## Phase 3 — Content & Placeholders 🔲

- [ ] Replace placeholder email `din@epost.se` in `footer.blade.php` and `contact.blade.php`
- [ ] Replace placeholder LinkedIn URL `linkedin.com/in/ditt-profil`
- [ ] Replace placeholder GitHub URL `github.com/ditt-konto`
- [ ] Decide on brand/logo name (currently displays as `Henrik.`)
- [ ] Replace placeholder case studies with real anonymised client work (or keep placeholders)
- [ ] Add real "Om mig" copy (background, stack, values)

## Phase 4 — Additional Pages 🔲

- [ ] `/tjanster` — expanded services page
- [ ] `/om-mig` — about page (background, tech stack, photo)
- [ ] `/process` — detailed process page
- [ ] `/kontakt` — standalone contact page (mirrors `#kontakt` section)
- [ ] Add routes, controllers, views, and Pest tests for each page

## Phase 5 — SEO & Performance 🔲

- [ ] Per-page `<title>` and `<meta name="description">` via `$title` / `$description` view variables
- [ ] `sitemap.xml` generation (consider `spatie/laravel-sitemap`)
- [ ] `robots.txt`
- [ ] Verify JSON-LD structured data with Google Rich Results Test
- [ ] Image optimisation (WebP, lazy loading, `alt` attributes)
- [ ] Core Web Vitals audit (LCP, CLS, FID)

## Phase 6 — Quality & Accessibility 🔲

- [ ] WCAG 2.1 AA audit (colour contrast, focus rings, keyboard navigation)
- [ ] Cross-browser QA (Chrome, Firefox, Safari, Edge)
- [ ] Mobile responsiveness QA at 375px, 768px, 1280px breakpoints
- [ ] Lighthouse audit — target 90+ on all scores
- [ ] Review all Swedish copy for tone consistency

## Phase 7 — Launch Prep 🔲

- [ ] Configure production mail driver (SMTP / SES / Postmark)
- [ ] Set `APP_ENV=production`, `APP_DEBUG=false`
- [ ] Set up Laravel Cloud deployment (or chosen host)
- [ ] SSL certificate + HSTS header
- [ ] Set up uptime monitoring
- [ ] Analytics (privacy-friendly: Plausible or Fathom)
