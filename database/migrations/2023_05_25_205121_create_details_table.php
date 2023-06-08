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
        Schema::create('details', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->uuid('ptb_id');
            $table->foreign('ptb_id')->references('id')->on('ptbs');
            $table->string('permintaan');
            $table->string('kegiatan');
            $table->string('hasil_keg');
            $table->string('lampiran');
            $table->string('ket');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};