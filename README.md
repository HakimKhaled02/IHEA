# Award Management System

A beautiful and modern award management system built with Laravel, PHP, MySQL, and CSS.

## Features

- 🏆 View all awards in a beautiful grid layout
- ➕ Create new awards
- ✏️ Edit existing awards
- 👁️ View award details
- 🗑️ Delete awards
- 📱 Fully responsive design
- 🎨 Modern and clean UI

## Requirements

- PHP >= 8.1
- Composer
- MySQL
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

3. **Configure database in `.env`:**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=award_db
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Run migrations:**
   ```bash
   php artisan migrate
   ```

5. **Start the development server:**
   ```bash
   php artisan serve
   ```

6. **Visit the application:**
   Open your browser and navigate to `http://localhost:8000`

## Database Structure

The `awards` table includes:
- `id` - Primary key
- `title` - Award title
- `description` - Award description
- `category` - Award category
- `recipient` - Award recipient name
- `date` - Award date
- `image` - Image URL (optional)
- `status` - Award status (active/inactive)
- `created_at` - Creation timestamp
- `updated_at` - Update timestamp

## Usage

1. Navigate to the awards page
2. Click "Add Award" to create a new award
3. Fill in the award details
4. View, edit, or delete awards as needed

## Project Structure

```
award-ihec/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── AwardController.php
│   └── Models/
│       └── Award.php
├── database/
│   └── migrations/
│       └── 2024_01_01_000001_create_awards_table.php
├── public/
│   └── css/
│       └── app.css
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       └── awards/
│           ├── index.blade.php
│           ├── create.blade.php
│           ├── edit.blade.php
│           └── show.blade.php
└── routes/
    └── web.php
```

## License

MIT License

