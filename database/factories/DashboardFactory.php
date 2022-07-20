<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dashboard>
 */
class DashboardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jumlah_bibit'=>$this->faker->numberBetween(5,20),
            'jumlah_pupuk'=>$this->faker->numberBetween(10,40),
            'start_date'=>$this->faker->date,
            'end_date'=>$this->faker->date(max:'now'),
            'total_hasil'=>$this->faker->numberBetween(200,1000)
        ];
    }
}
