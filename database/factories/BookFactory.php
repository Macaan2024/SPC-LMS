<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
   
    public function definition(): array
    {
        
        $i = 0;

       
        return [
            'isbn' => fake()->unique()->numerify('###-### -###'),
            'accesion_number' => fake()->unique()->numerify('###-### -###'),
            'author' => fake()->name(),
            'publication_year' => fake()->numberBetween($min = 1980 , $max = 2024),
            'publication_address' => fake()->address(),
            'title' => fake()->sentence(6, true),
            'category' => fake()->randomElement(['Computers Studies', 'Networking', 'Electrical']),
            'quantity' => fake()->randomDigit(),
            'level' => fake()->randomElement(['College']),
            'pages' => fake()->randomElement(['English' , 'Filipino', 'Spanish']),
            'edition' => fake()->randomElement(['1st-Edition', '2nd-Edition', '3rd-Edition']),
            'status' => fake()->randomElement(['Not Available' , 'Available']),
            'image' => fake()->lexify('book' . ($i+1) . '.png'),
            'total_borrow' => fake()->randomDigit(),
        ];
    }
}
