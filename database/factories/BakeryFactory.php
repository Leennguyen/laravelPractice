<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bakery>
 */
class BakeryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $imgs = ['111.jpg','234.jpg','1234.jpg','banhkem.jpg','banhtraicay.jpg', 'cupcake.jpg', 'sukem.jpg', 'sukemdau.jpg'];
        return [
            'name' => $this->faker->name(),	
            'price' => rand(1, 100),
            'img' => $imgs [rand(0, 7)],

        ];
    }
}
