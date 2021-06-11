<?php

namespace Database\Factories;

use App\Models\alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class alumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->word,
        'apepaterno' => $this->faker->word,
        'apematerno' => $this->faker->word,
        'carrera' => $this->faker->word,
        'fecha_nac' => $this->faker->word,
        'user_id' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
