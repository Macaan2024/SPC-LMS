<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $fillable = [
        'isbn', 'author', 'publication_year', 'publication_address', 'title', 'category', 'quantity', 'level', 'languge', 'edition', 'status', 'total_borrow', 'image_at', 
    ];
}
