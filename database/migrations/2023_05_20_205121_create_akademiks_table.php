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
        Schema::create('akademiks', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->string('kode')->unique();
            $table->string('nama_pt');
            $table->date('tanggal_monev');
            $table->text('permasalahan');
            $table->string('alamat_monev');
            $table->string('alamat_direktori');
            $table->string('alamat_pddikti');
            $table->string('hasil_monev')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akademiks');
    }
};
