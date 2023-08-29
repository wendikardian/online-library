<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// import BelongsTo
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Books extends Model
{
    // add fillable property for  // filed isbn, title, author, image_path, publisher, category, page, language, publish_date, subjects, desc
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'image_path',
        'publisher',
        'category',
        'page',
        'language',
        'publish_date',
        'subjects',
        'desc'
    ];
    use HasFactory;

    // add method to make relation with Author belongsTo
    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
