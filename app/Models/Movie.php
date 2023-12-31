<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function movies()
    {
        return $this->belongsTo(MovieType::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
