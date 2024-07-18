<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectorMovie extends Model
{
    use HasFactory;
    protected $table = 'director_movie';

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'mov_id');
    }

    public function director()
    {
        return $this->belongsTo(Director::class, 'dir_id');
    }
}
