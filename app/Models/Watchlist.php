<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    protected $table = "watchlists";
    protected $fillable = ['user_id', 'movie_id', 'order'];

    public function usermade() {
        return $this->belongsToMany(Usermade::class);
    }
}
