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
            $table->increments('id');
            $table->uuid('ptb_id');
            $table->foreign('ptb_id')->references('id')->on('ptbs')->onDelete('cascade');
            $table->date('tgl');
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