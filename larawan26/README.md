# Larawan: Laravel on steroid
This is an fast laravel project template for rapid development.

** This Larawan version is using Laravel 10.



**Routing and Controllers: Basics**

- Callback Functions and Route::view()
- Routing to a Single Controller Method
- Route Parameters
- Route Naming
- Route Groups

**Blade Basics**

- Displaying Variables in Blade
- Blade If-Else and Loop Structures
- Blade Loops
- Layout: @include, @extends, @section, @yield
- Blade Components


**Auth Basics**

- Starter Kits: Breeze (Tailwind)
- Default Auth Model and Access its Fields from Anywhere
- Check Auth in Controller / Blade
- Auth Middleware


**Database Basics**

- Database Migrations
- Basic Eloquent Model and MVC: Controller -> Model -> View
- Eloquent Relationships: belongsTo / hasMany / belongsToMany
- Eager Loading and N+1 Query Problem


**Full Simple CRUD**

- Route Resource and Resourceful Controllers
- Forms, Validation and Form Requests
- File Uploads and Storage Folder Basics
- Table Pagination


This demo project is using [Laravel Breeze](https://github.com/laravel/breeze) (Tailwind CSS) as an Auth Starter Kit.

---

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL.
- You can login to manage articles with default credentials __admin@admin.com__ - __password__

## License

Basically, feel free to use and re-use any way you want.

---

## Built by Larawan
