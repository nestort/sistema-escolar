<?php

namespace Database\Factories;

use App\Models\materia;
use Illuminate\Database\Eloquent\Factories\Factory;

class materiaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = materia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'horario' => $this->faker->word,
        'min_participantes' => $this->faker->randomDigitNotNull,
        'max_participantes' => $this->faker->randomDigitNotNull,
        'periodo_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
