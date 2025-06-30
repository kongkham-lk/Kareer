# Kareer

Kareer is a lightweight job board platform built with Laravel, providing a streamlined interface for employers to post job listings and for job seekers to browse available opportunities. It emphasizes simplicity, clarity, and modern Laravel development practices.

## Project Requirements

- PHP 8.1 or later
- Composer
- Laravel 11+
- SQLite (default), MySQL or other supported DBMS
- Node.js and npm (for frontend asset compilation using Vite)

## Dependencies

- Laravel Breeze (optional, for starter auth scaffolding)
- Tailwind CSS (via Vite)
- Blade components for modular UI
- SQLite (configured for development)

## Getting Started

Before you begin, ensure that your environment meets the project requirements listed above.

### Environment Setup

1. Install PHP dependencies:
   ```bash
   composer install
   ```

2. Install and build frontend assets:
   ```bash
   npm install && npm run build
   ```

3. Create a `.env` file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

### Database Setup

The default configuration uses SQLite. To use SQLite:

```bash
touch database/database.sqlite
```

Update your `.env` file:
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

Run migrations and seeders:
```bash
php artisan migrate --seed
```

## Running the Application

You can serve the application locally using Laravel's built-in server:

```bash
php artisan serve
```

Then open `http://localhost:8000` in your browser.

## Relevant Code Examples

### Job Creation Logic

The `JobController` handles validation and creation:

```php
$attributes = $request->validate([
  'title' => ['required'],
  'location' => ['required'],
  'salary' => ['required'],
  'type' => ['required', Rule::in(['Full Time', 'Part Time', 'Contract', 'Internship / Co-op'])],
  'url' => ['required', 'active_url'],
  'featured' => ['accepted'],
  'tags' => ['nullable'],
]);

$job = Auth::user()->employer->jobs()->create([...]);

foreach (explode(',', $attributes['tags']) as $tag) {
  $job->tag(trim($tag));
}
```

### Tagging System

Jobs and tags use a many-to-many relationship:

```php
public function tag(string $newTag): void
{
  $tag = Tag::firstOrCreate(['name' => $newTag]);
  $this->tags()->attach($tag);
}
```

### Search Functionality

Basic search implementation using a controller invocation:

```php
$jobs = Job::where('title', 'LIKE', '%'.request('q').'%')->get();
```

## File Uploads

Uploaded employer logos are stored in `storage/logos` and publicly accessible via Laravel's filesystem configuration:

```php
$logoPath = "storage/" . $request->logo->store('logos');
```

Ensure symbolic links are set:
```bash
php artisan storage:link
```

## Authentication and Roles

Users register with employer details and are authenticated using Laravel's built-in Auth system. Each user is associated with one employer.

## Conclusion

Kareer provides a practical foundation for building a modern job board. The codebase emphasizes Laravel best practices and is structured to support growth through new features like filtering, user dashboards, or analytics. Contributions and extensions are welcome for further enhancement.
