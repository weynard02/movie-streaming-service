<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class genre_movie extends Model
{
    use HasFactory;
    protected $table = "genre_movies";
    protected $fillable = ['genre_id', 'movie_id'];
}
