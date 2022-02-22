<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'publisher' => $this->faker->company(30),
            'cover' => $this->faker->sentence(20),
            'isbn' =>  $this->faker->ISBN,
            'detail' => (string)$this->faker->sentence,
            'publication_year' => (string) $this->faker->year,
            'image_name' => $this->faker->sentence,
            'price' => (string)$this->faker->randomNumber(2),
        ];
    }
}
