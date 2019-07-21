Installation Instructions:

Run:
composer update
cp .env.example .env

Manually update .env with your Database settings. Example:
DB_DATABASE=acl_laravel
DB_USERNAME=root
DB_PASSWORD=root

Run:
php artisan key:generate
php artisan migrate --seed
php artisan serve

Go to /admin
Login: admin@admin.com
password: password

You can add users, roles, permissions, etc. from the admin interface. You can protect your requests from unauthenticated use, like so:

In app//Http/Requests/StoreUserRequest.php:
public function authorize()
{
return \Gate::allows('user_create');
}
