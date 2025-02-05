<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Borrow;
use App\Models\Book;
use App\Models\User;

class BorrowFactory extends Factory {
    protected $model = Borrow::class;

    public function definition(): array {
        $borrowDate = $this->faker->dateTimeBetween('-1 year', 'now');
        $returnDate = $this->faker->boolean(70) ? $this->faker->dateTimeBetween($borrowDate, 'now') : null; 

        return [
            'id' => Str::uuid(),
            'book_id' => Book::inRandomOrder()->first()?->id,
            'user_id' => User::inRandomOrder()->first()?->id,
            'borrow_date' => $borrowDate,
            'return_date' => $returnDate,
        ];
    }
}
