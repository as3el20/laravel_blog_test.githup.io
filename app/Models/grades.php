<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class grades extends Model
{
    use HasFactory;
    public $table = 'Grades';
    protected $Fillable = [
        'grades',
        'user_id'
    ];
    protected $Hidden = [];
}
