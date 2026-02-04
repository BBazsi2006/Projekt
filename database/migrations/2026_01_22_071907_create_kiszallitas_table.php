<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kiszallitasok', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alapitvanyId')->references('id')->on('alapitvanyok');
            $table->foreignId('adomanyId')->references('id')->on('adomanyok');
            $table->date('megrendelesDatuma');
            $table->date('elszallitasDatuma')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kiszallitasok');
    }
};
