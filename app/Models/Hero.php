<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;
    protected $table = 'hero_table';
    protected $fillable = [
            'hero-title',
            'hero-desc' ,
            'hero-image_url' ,
            'hero-link' ,
            'hero-tagline' 
    ];
}