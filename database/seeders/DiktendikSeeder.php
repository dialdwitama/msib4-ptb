<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Diktendik;
use Illuminate\Database\Seeder;

final class DiktendikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diktendik::factory(10)->create();
    }
}