<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieCategory extends Model
{
    use HasFactory;

    protected $table = 'movies_category';

    protected $fillable=[
        'original_film_id',
        'original_category_id',
    ];
}
