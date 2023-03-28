<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\User;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];
    public function user() {
        return $this->hasMany(User::class);
    }
}
