<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link', 'studio', 'release_date', 'image', 'paid'];

    public function artist() {
        return $this->belongsToMany(artist::class);
    }

    public function genre() {
        return $this->belongsToMany(genre::class);
    }
}
