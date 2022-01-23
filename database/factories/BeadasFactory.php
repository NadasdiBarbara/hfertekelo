<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BeadasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class' => $this->faker->numberBetween(9,14),
            'name' =>$this->faker->name(),
            'url' =>$this->faker->url(),
            'points' => $this->faker->numberBetween(1,5),
            'message' => $this->faker->text(),
            
        ];
    }
}
