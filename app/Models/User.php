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
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'unique_id', 'lastname', 'firstname', 'middlename', 'level', 'grade', 'strand', 'section', 'course', 'year', 'department', 'gender', 'cpnumber', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function roles() {
        return $this->belongsToMany(Role::class);   
    }

    public function hasRole($role)
    {
        // Assuming you have a roles() relationship defined in your User model
        // and the Role model has a name or id attribute
        return $this->roles()->where('role_description', $role)->exists();
    }
}
