<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->text(),
            "slug" => $this->faker->unique()->slug(),
            "genre_id" => mt_rand(1, 5),
            "author" => $this->faker->name(),
            "sinopsis" => $this->faker->paragraph(20)
        ];
    }
}
