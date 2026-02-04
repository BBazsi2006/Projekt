<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('adomanyozok', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->string('email')->unique();
            $table->string('jelszo');
            $table->foreignId('ember')->references('id')->on('emberek');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('adomanyozok');
    }
};
