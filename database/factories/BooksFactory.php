<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Schema::create('books', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        //     $table->string('isbn', 13);
        //     $table->string('title', 250);
        //     $table->string('author', 150);
        //     $table->string('image_path', 100);
        //     $table->string('publisher', 50);
        //     $table->string('category', 50);
        //     $table->bigInteger('page');
        //     $table->string('language', 20);
        //     $table->timestamp('publish_date');
        //     $table->string('subjects', 50);
        //     $table->text('desc');
        // });
        // Create factory based on that schema
        return [
            'isbn' => $this->faker->isbn13(),
            'title' => $this->faker->sentence(5),
            'author' => $this->faker->name(),
            'image_path' => $this->faker->imageUrl(),
            'publisher' => $this->faker->company(),
            'category' => $this->faker->word(),
            'page' => $this->faker->numberBetween(100, 500),
            'language' => $this->faker->languageCode(),
            'publish_date' => $this->faker->dateTimeBetween('now', 'now'),
            'subjects' => $this->faker->word(),
            'desc' => $this->faker->paragraph(5),
        ];
    }
}
