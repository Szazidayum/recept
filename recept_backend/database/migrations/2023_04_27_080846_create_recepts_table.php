<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recepts', function (Blueprint $table) {
            $table->id('id');
            $table->timestamps();
            $table->string('nev');
            $table->foreignId('kategoria')->references('id')->on('kategorias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->date('feltoltes_datum')->default(Carbon::now());
        });
    }

    

    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
