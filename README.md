# Ammarco Travels

Official website for **Ammarco Travels**, built with Laravel. A clean, responsive info site covering Home, About, Services, and Contact, with a working contact form that stores enquiries in the database.

## Pages

- **Home** – hero intro, why-choose-us highlights, services preview
- **About** – company story, mission, values, stats
- **Services** – flight booking, visa assistance, tours, hotels, pilgrimage packages, corporate travel
- **Contact** – contact details + form (name, email, phone, subject, message), saved to `contact_messages`

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

php artisan migrate

php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser.

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

Then run `php artisan migrate` again.

## Project structure notes

- Styling is plain CSS at `public/css/app.css` — no Node/Vite build step required.
- Routes are defined in `routes/web.php`.
- Page logic lives in `app/Http/Controllers/PageController.php`.
- Views are in `resources/views/pages/*.blade.php`, sharing `resources/views/layouts/app.blade.php`.
- Contact form submissions are stored via the `App\Models\ContactMessage` model.

## Tests

```bash
php artisan test
```

## License

Proprietary — © Ammarco Travels.
