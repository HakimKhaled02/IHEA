# Quick Setup Guide

## Step 1: Install Dependencies
```bash
composer install
```

## Step 2: Environment Setup
```bash
# Copy environment file
copy .env.example .env

# Generate application key
php artisan key:generate
```

## Step 3: Database Configuration
Edit `.env` file and set your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=award_db
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

## Step 4: Create Database
Create a MySQL database named `award_db` (or your preferred name).

## Step 5: Run Migrations
```bash
php artisan migrate
```

## Step 6: (Optional) Seed Sample Data
```bash
php artisan db:seed --class=AwardSeeder
```

## Step 7: Start Development Server
```bash
php artisan serve
```

## Step 8: Access the Application
Open your browser and navigate to:
```
http://localhost:8000
```

## Troubleshooting

### If you get permission errors:
- Make sure `storage` and `bootstrap/cache` directories are writable
- On Windows, you may need to set folder permissions

### If CSS doesn't load:
- Make sure `public/css/app.css` exists
- Clear browser cache
- Check that the server is pointing to the `public` directory

### Database Connection Issues:
- Verify MySQL is running
- Check database credentials in `.env`
- Ensure the database exists

## Features Available

- **View Awards**: Browse all awards in a beautiful grid layout
- **Create Award**: Add new awards with full details
- **Edit Award**: Update existing award information
- **View Details**: See complete award information
- **Delete Award**: Remove awards from the system

Enjoy your Award Management System! 🏆

