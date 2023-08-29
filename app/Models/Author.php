<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    // property table to 'author'
    protected $table = 'author';
    use HasFactory;

    // add method to make relation with Books has many
    public function member(): HasMany
    {
        return $this->hasMany(Book::class);
    }
}
