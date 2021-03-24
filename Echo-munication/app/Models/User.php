<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'name',
        'username',
        'email',
        'avatar',
        'password'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'remember_token',
        'password'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relations
     */

    public function tutorials()
    {
        return $this->hasMany(tutorial::class)->withCount('comments', 'likes');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
}
