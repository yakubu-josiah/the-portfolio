<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeEdit extends Model
{
    protected $fillable = [
        'image', 
        'status', 
        'content',
        'title'
    ];
    use HasFactory;
}
