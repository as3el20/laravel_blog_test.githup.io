<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class users extends User
{
    use HasFactory;
    public $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'token'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];
    public $timestamps = true;
    public function post()
    {
        return $this->hasMany(post::class);
    }
}
