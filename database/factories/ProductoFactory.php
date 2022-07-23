<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'cantidad' => $this->faker->numberBetween(1, 100),
            'precio' => $this->faker->randomFloat(2, 0, 100),
        ];
    }
}
