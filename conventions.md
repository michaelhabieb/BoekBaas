# Laravel Conventies BoekBaas

## 1. Bestands- en Mapstructuur
- **Controllers** bevinden zich in `app/Http/Controllers` en eindigen op `Controller.php` (bv. `BookController.php`).
- **Models** bevinden zich in `app/Models` en hebben een PascalCase naam (bv. `Book.php`).
- **Migrations** bevinden zich in `database/migrations` en beginnen met een timestamp.

## 2. Routing
- Routes worden gedefinieerd in `routes/web.php` (voor web) en `routes/api.php` (voor API).
- Gebruik **RESTful routing** voor controllers:
  ```php
  Route::resource('books', BookController::class);

## 3. Controllers
- Controllers bevatten alleen logica voor **HTTP-verzoeken** en roepen services/models aan.
- Gebruik methoden zoals `index()`, `store()`, `update()`, `destroy()`.

## 4. Models en Eloquent
- Modelnamen zijn **enkelvoud** en de tabelnaam is **meervoud** (`Book.php` -> `books`).
- Gebruik **Mass Assignment Protection** met `$fillable`:

## 5. Views (Blade Templates)
- Views bevinden zich in `resources/views` en gebruiken `.blade.php` extensie.
- Gebruik `@extends`, `@section`, `@yield` voor herbruikbare layouts.
- Blade-directives zoals `@if`, `@foreach`, `@include`, etc., kunnen worden gebruikt om conditionele logica en herbruikbare onderdelen toe te voegen.
- Views kunnen data ontvangen vanuit controllers en worden weergegeven in de browser.
- Gebruik de `@include`-directive om herbruikbare onderdelen zoals navigatie of footers in meerdere views in te voegen.


