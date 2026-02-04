<?php

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
        Schema::create('adomanyok', function (Blueprint $table) {
            $table->id();
            $table->integer('darabszam');
            $table->foreignId('adomanyNev')->references('id')->on('adomanynevek');
            $table->foreignId('anyag')->references('id')->on('anyagok');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adomanyok');
    }
};
