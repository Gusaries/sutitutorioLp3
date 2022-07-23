<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VentaSeederFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "fecha" => $this->faker->numberBetween(date_format("now")),
            "montoTotal" => $this->faker->numberBetween(10.50,225.90),
            "cantidad" => $this->faker->numberBetween(1,5),
            "color" => rojo,
            "precio" => $this->faker->numberBetween(10,200),
        ];
    }
}
