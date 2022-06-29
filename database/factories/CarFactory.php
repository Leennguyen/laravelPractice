<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return  [
            'name_car' => $this->faker->name(),
            'price' => rand(10, 1000),   
            //'producer_id'=>rand(1,10),
            'img' =>'',
            // 'updated_at'=>now(),
            // 'created_at' => now()
        ];
    }

}
