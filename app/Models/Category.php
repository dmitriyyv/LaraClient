<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'original_category_id',
        'title',
    ];

    public function films(){

        return $this->belongsToMany(
            Movie::class,
            'film_category',
            null,
            null,
            'original_id',
            'original_category_id'
        );
    }

    use HasFactory;
}
