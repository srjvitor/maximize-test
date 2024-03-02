<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MateriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->title(),
            'descricao' => $this->faker->text(),
            'imagem' => $this->faker->imageUrl(),
            'texto_completo' => $this->faker->text(),
            'data_de_publicacao' => $this->faker->dateTime(),
        ];
    }
}
