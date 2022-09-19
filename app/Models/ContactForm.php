<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'name', 
        'user', 
        'email', 
        'city', 
        'subject', 
        'message', 
        'edit', 
        'update'
    ];
    use HasFactory;


    public static function getForAdmin(){
        return self::orderBy('id', 'DESC')->get();
    }

    public static function single($id)
    {
        return self::where('id', $id)->first();
    }
}
