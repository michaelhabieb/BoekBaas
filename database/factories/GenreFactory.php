<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Genre;

class GenreFactory extends Factory {
    protected $model = Genre::class;

    public function definition(): array {
        return [
            'id' => Str::uuid(),
            'name' => $this->faker->unique()->word(),
        ];
    }
}
