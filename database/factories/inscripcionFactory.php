<?php

namespace Database\Factories;

use App\Models\inscripcion;
use Illuminate\Database\Eloquent\Factories\Factory;

class inscripcionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = inscripcion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'materia_id' => $this->faker->word,
        'alumno_id' => $this->faker->word,
        'status' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
