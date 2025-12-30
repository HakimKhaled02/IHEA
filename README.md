# International Halal Economic Award (IHEA) 2026

A beautiful and modern informational website for the International Halal Economic Award 2026, built with Laravel, PHP, and CSS.

## Features

- 🏆 Informational pages about the award ceremony
- 📄 Multiple information sections (Mission, Categories, Eligibility, etc.)
- 📱 Fully responsive design
- 🎨 Modern and clean UI
- ⚡ Static website - no database required

## Requirements

- PHP >= 8.1
- Composer
- Laravel 10.x

## Installation

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Set up environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Start the development server:**
   ```bash
   php artisan serve
   ```

4. **Visit the application:**
   Open your browser and navigate to `http://localhost:8000`

## Available Pages

- Homepage
- About
- Mission
- Why Matters
- Categories
- Eligibility
- How to Enter
- Submission Rules
- Judging Framework
- Judging Criteria
- Confidentiality
- Winner Recognition
- FAQ
- Fees & Packages
- Contact

## Project Structure

```
award-ihec/
├── app/
│   └── Http/
│       └── Controllers/
├── public/
│   └── css/
│       └── homepage.css
├── resources/
│   └── views/
│       ├── home.blade.php
│       ├── layouts/
│       └── pages/
└── routes/
    └── web.php
```

## License

MIT License

