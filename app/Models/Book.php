<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $fillable = [
        'isbn', 'accesion_number', 'author', 'publication_year', 'publication_address', 'title', 'category', 'quantity', 'level', 'pages', 'edition', 'status', 'total_borrow', 'image', 
    ];

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }
}
