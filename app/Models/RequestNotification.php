<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestNotification extends Model
{
    use HasFactory;


    public function transaction() {

        return $this->belongsTo(Transaction::class);
    }
}
