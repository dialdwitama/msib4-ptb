<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Kemahasiswaan;
use Illuminate\Database\Seeder;

final class KemahasiswaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kemahasiswaan::factory(10)->create();
    }
}