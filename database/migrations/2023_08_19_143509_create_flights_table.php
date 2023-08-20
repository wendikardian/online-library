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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // Create a new schema called flight with departure datetime and passengers integer
        // Schema::create('flights', function (Blueprint $table) {
        //     $table->id();
        //     // $table->timestamps();
        //     $table->dateTime('departure');
        //     $table->integer('passengers');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
