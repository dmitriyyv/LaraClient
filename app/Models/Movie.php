<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    protected $fillable = [
        'movie_id',
        'original_id',
        'title',
        'description',
        'vote_average',
        'url_img',
        'release_date',
        'created_at',
        'updated_at',
    ];

    public function categories(){
        return  ($this->belongsToMany( Category::class, "movies_category", null, null, "original_id", "original_film_id" ));
    }

    use HasFactory;
}
