<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'admin',
            'email' => $this->faker->email,
            'password' => bcrypt('12345678'),
            'is_admin' => 1
        ];
    }
}
