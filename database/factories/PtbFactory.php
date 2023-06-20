<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ptb>
 */
class PtbFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode' => $this->faker->unique()->word(),
            'pt' => $this->faker->word(),
            'progressTerakhir' => $this->faker->text(),
            'tgl' => $this->faker->date(),
            'deadline' => $this->faker->date(),
            'status' => $this->faker->word(),
            'progressReport' => $this->faker->word(),
            'pic' => $this->faker->word(),
            'permasalahan' => $this->faker->word(),
        ];
    }
}