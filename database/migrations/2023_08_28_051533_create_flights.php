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
        //
// Create a schema flights

        Schema::create('flights', function (Blueprint $table) {
            // check if tables has column departures
            // if (Schema::hasColumn('flights', 'departure')) {
            //     // $table->dropColumn('departure');
            // } else {
            // }
            $table->id();
            $table->timestamps();
            $table->integer('passengers');
            $table->dateTime('departure');
            // rename column departures into deps
            // $table->renameColumn('departure', 'deps');
            // add another column called amount with float name with char confirmed with boolean
            // $table->float('amount', 8, 2);
            // $table->char('name', 100);
            // $table->boolean('confirmed');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // drop is exist table
        Schema::dropIfExists('flights');
        //
        // Schema::table('flights', function (Blueprint $table) {
        //     $table->dropColumn('deps');
        //     $table->dropColumn('passengers');
        // });
    }
};
