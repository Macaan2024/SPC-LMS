<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'unique_id', 'lastname', 'firstname', 'middlename', 'grade', 'level', 'strand', 'section', 'course', 'year', 'department', 'gender', 'cpnumber', 'email', 'password', 'role_id', 'status', 'user_image', 'total_fines',
    ];


    public function role() {
        return $this->belongsTo(Role::class);   
    }

    public function hasRole($role)
    {
        // Assuming you have a roles() relationship defined in your User model
        // and the Role model has a name or id attribute
        return $this->role_id == $role;
    }

    //books
    

    public function payment() {
        return $this->hasMany(Payment::class);
    }


    public function transactions() {
        return $this->hasMany(Transaction::class);
    }
    
}
