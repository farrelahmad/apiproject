<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'stories',
        'storiewriter',
    ];
}
