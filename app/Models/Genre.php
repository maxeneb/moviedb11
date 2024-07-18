<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    //
    protected $table = 'genres';
    protected $primaryKey = 'gen_id';
    public $incrementing = false;
    public $timestamps = false;

    // public function movies()
    // {
    //     return $this->belongsToMany(Movie::class, 'gen_id');
    // }
    public function genremovie()
    {
        return $this->hasMany(GenreMovie::class, 'gen_id');
    }
}
