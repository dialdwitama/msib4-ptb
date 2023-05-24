<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Monev;
use Illuminate\Database\Seeder;

final class MonevSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monev::factory(10)->create();
    }
}
