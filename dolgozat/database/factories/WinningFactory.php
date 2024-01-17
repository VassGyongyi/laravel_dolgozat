<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Part;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Winning>
 */
class WinningFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'brand_id' => Brand::all()->random()->brand_id,
            'part_id' => Part::all()->random()->part_id,
            'product_id' => Product::all()->random()->product_id,
            'date' => fake()->date()
        ];
    }
}
