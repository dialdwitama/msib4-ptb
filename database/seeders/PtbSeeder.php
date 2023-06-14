<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Ptb;
use Illuminate\Database\Seeder;

final class PtbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ptb::factory(7)->create();
    }
}
