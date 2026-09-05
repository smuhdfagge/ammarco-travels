# Ammarco Travels

A complete international travel platform for **Ammarco Travels**, built with Laravel. Covers flights, hotels, holiday packages, destinations, tours, visa assistance, corporate travel, a travel guides hub, and a unified enquiry/quote system.

## What's included

- **Homepage** — hero with a tabbed flight/hotel/package/visa enquiry widget, popular destinations, featured packages, why-choose-us, travel inspiration (guides), testimonials, global reach section, final CTA
- **Flights & Hotels** — structured enquiry forms (one-way/round-trip/multi-city, cabin class, dates, guests, rooms). No live fare/availability API is wired up yet — every enquiry is reviewed by a consultant. See "Phase 2" below.
- **Holiday Packages** — database-backed marketplace with filtering by category, and detail pages with itinerary, inclusions/exclusions, accommodation, FAQs
- **Destinations** — database-backed directory filterable by region, with rich per-destination content (attractions, visa notes, weather, budget, FAQs)
- **Tours & Excursions** — static service listing page
- **Visa Assistance** — process, typical documents, FAQs, and an enquiry form (no approval guarantees are made or implied)
- **Corporate Travel** — services overview and a corporate support request form
- **Travel Guides** — database-backed content hub with categories, used for SEO-friendly articles
- **Request a Quote** — the site's main lead-generation form
- **Contact** — contact details and a general enquiry form
- All form submissions are stored in a single `enquiries` table (`type` column distinguishes flight/hotel/visa/corporate/quote/contact)
- Basic SEO: meta/OG tags, canonical URLs, `sitemap.xml`, `robots.txt`, and JSON-LD (Organization, TouristDestination, Article)
- Mobile-first responsive layout with a sticky "Plan My Trip" CTA on small screens, and a keyboard-accessible skip link and focus states

## Requirements

- PHP 8.2+
- Composer
- SQLite (default) or MySQL

## Setup

```bash
git clone https://github.com/smuhdfagge/ammarco-travels.git
cd ammarco-travels

composer install

cp .env.example .env
php artisan key:generate

# SQLite is the default — create the database file:
touch database/database.sqlite

php artisan migrate --seed

php artisan serve
```

Visit `http://127.0.0.1:8000`. The seeders load sample destinations (Dubai, Istanbul, Makkah & Madinah), sample packages, two sample travel guide articles, and sample testimonials — all clearly written as placeholder/sample content pending real business data and photography.

## Switching to MySQL

Edit `.env`:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ammarco_travels
DB_USERNAME=root
DB_PASSWORD=
```

Then run `php artisan migrate --seed` again.

## Project structure notes

- Styling is plain CSS at `public/css/app.css` (a small design system: color tokens, typography, buttons, cards, forms, badges) — no Node/Vite build step required.
- Routes: `routes/web.php`.
- Controllers: `app/Http/Controllers/` — `PageController` (static-ish pages), `DestinationController`, `PackageController`, `GuideController`, `EnquiryController` (all form submissions), `SitemapController`.
- Content models: `Destination`, `Package`, `GuideArticle`, `Testimonial`, `Enquiry` — all backed by migrations and seeders in `database/`, so destinations/packages/guides can be added via seeders or (once built) an admin panel rather than editing Blade files.
- Views: `resources/views/pages`, `resources/views/destinations`, `resources/views/packages`, `resources/views/guides`, sharing `resources/views/layouts/app.blade.php`.

## Tests

```bash
php artisan test
```

## Phase 2 — not yet built

These require real business decisions/inputs and are intentionally not faked:

- Live flight/hotel search via a real GDS/OTA API (Amadeus, Duffel, Booking.com Partner API, etc.) — current forms are structured enquiries, not live availability
- Payment gateway integration
- A non-technical admin/CMS panel for managing destinations, packages, guides, and enquiries (the data layer is already in place to support one — e.g. Filament — later)
- Licensed destination photography (current cards use placeholder color blocks, not stock imagery)
- WhatsApp integration and analytics/conversion-tracking wiring
- Verified company statistics, certifications, and awards (currently shown as clearly labeled placeholders)
- Full schema.org coverage on every page type (Organization and FAQ schema are not yet added everywhere)

## License

Proprietary — © Ammarco Travels.
