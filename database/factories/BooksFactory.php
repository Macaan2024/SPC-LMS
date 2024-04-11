<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => fake()->unique()->numerify('###-### -###'),
            'author' => fake()->name(),
            'publication_year' => fake()->numberBetween($min = 1980 , $max = 2024),
            'publication_address' => fake()->address(),
            'title' => fake()->sentence(6, true),
            'category' => fake()->randomElement(['Computers Studies', 'Networking', 'Electrical']),
            'quantity' => fake()->randomDigit(),
            'level' => fake()->randomElement(['College' , 'Senior Highschool', 'Highschool', 'Elementary']),
            'language' => fake()->randomElement(['English' , 'Filipino', 'Spanish']),
            'edition' => fake()->randomElement(['1st-Edition', '2nd-Edition', '3rd-Edition']),
            'status' => fake()->randomElement(['Not Available' , 'Available']),
            'image' => fake()->lexify('???'),
            'total_borrow' => fake()->randomDigit(),
        ];
    }
}
