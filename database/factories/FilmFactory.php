<?php

namespace Database\Factories;

use App\Models\Film;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    protected $model = Film::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */ public function definition(): array
{
    return [
        'name' => fake()->sentence(),
        'status' => fake()->boolean(),
    ];
}

    protected static function newFactory(): Factory
    {
        return FilmFactory::new();
    }
}
