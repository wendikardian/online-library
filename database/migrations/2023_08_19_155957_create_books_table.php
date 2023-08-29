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
        // create a schema with data
        // isbn varchar/13
        // title varchar/250
        // author varchar/150
        // image_path varchar/100
        // publisher varchar/50
        // category varchar/50
        // page bigint/5
        // language varchar/20
        // publish_date timestamp
        // subjects varchar/50
        // desc text

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('isbn', 13);
            $table->string('title', 250);
            $table->unsignedBigInteger('author_id');
            $table->string('image_path', 100);
            $table->string('publisher', 50);
            $table->string('category', 50);
            $table->bigInteger('page');
            $table->string('language', 20);
            $table->timestamp('publish_date');
            $table->string('subjects', 50);
            $table->text('desc');
            // add user_id
            $table->unsignedBigInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
