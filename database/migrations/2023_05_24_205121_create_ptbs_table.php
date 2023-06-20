<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ptbs', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->string('kode')->unique();
            $table->string('pt');
            $table->text('progressTerakhir');
            $table->date('tgl');
            $table->date('deadline');
            $table->string('status');
            $table->string('pic');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ptbs');
    }
};
