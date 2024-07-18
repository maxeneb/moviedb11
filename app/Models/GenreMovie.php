<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    use HasFactory;
    protected $table = 'genre_movie';
    public function movies()
    {
        return $this->belongsTo(Movie::class, 'mov_id');
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'gen_id');
    }
}
