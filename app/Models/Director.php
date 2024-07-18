<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Director extends Model
{
    //
    public $table = 'directors';
    protected $primaryKey = 'dir_id';
    public $incrementing = false;
    public $timestamps = false;

    // public function movies(){
    //     return $this->belongsToMany(Movie::class);
    // }
    public function directormovie(){
        return $this->hasMany(DirectorMovie::class, 'dir_id');
    }
}
