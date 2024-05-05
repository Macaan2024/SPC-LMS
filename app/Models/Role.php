<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_description',
        'created_at',
        'update_at',
    ];
    public function users() {
        return $this->belongsToMany(User::class);
    }
}
