<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\Genre;

class BookFactory extends Factory {
    protected $model = Book::class;

    public function definition(): array {
        return [
            'id' => Str::uuid(),
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'genre_id' => Genre::inRandomOrder()->first()?->id, // Haal willekeurig een genre op
            'isbn' => $this->faker->unique()->isbn13(),
            'publication_year' => $this->faker->year(),
        ];
    }
}
