<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    protected $fillable=[
       'id', 'Title','Slug','Description','Image_Path','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(users::class);
    }
}
