<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;


    public $fillable = [
        'user_id', 'book_id', 'start_date', 'start_time', 'end_day', 'end_time', 'duration', 'status', 'overdue', 'penalty', 
    ];
    
    public function user() {
        return $this->belongsT0(User::class);
    }

    public function book() {
        return $this->belongsTop(Book::class);
    }
}