<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artist_movie extends Model
{
    use HasFactory;
    protected $table = "artist_movies";
    protected $fillable = ['artist_id', 'movie_id'];
}
