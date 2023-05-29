<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Akademik;
use Illuminate\Database\Seeder;

final class AkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Akademik::factory(10)->create();
    }
}
