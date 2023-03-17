<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birthdate'];

    public function movie() {
        return $this->belongsToMany(Movie::class, 'artist_movies');
    }
}
