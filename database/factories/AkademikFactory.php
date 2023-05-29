<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Akademik>
 */
final class AkademikFactory extends Factory
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
            'nama_pt' => $this->faker->word(),
            'tanggal_monev' => $this->faker->date(),
            'permasalahan' => $this->faker->text(),
            'alamat_monev' => $this->faker->address(),
            'alamat_direktori' => $this->faker->address(),
            'alamat_pddikti' => $this->faker->address(),
            'hasil_monev' => $this->faker->word(),
        ];
    }
}
