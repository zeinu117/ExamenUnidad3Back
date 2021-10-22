<?php

namespace Database\Factories;

use App\Models\DatosPersonales;
use Illuminate\Database\Eloquent\Factories\Factory;

class DatosPersonalesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DatosPersonales::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apellidoPaterno' => $this->faker->sentence(),
            'apellidoMaterno' => $this->faker->sentence(),
            'nombre' => $this->faker->name(),
            'sexo' => $this->faker->randomElement(['H','M']),
            'fechaNacimiento' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail
        ];
    }
}
