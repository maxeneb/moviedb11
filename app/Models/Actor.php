<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Actor extends Model
{
    //
    protected $table = 'actors';
    protected $primaryKey = 'act_id';
    public $incrementing = false;
    public $timestamps = false;

    // public function movies(){
    //     return $this->belongsToMany(Movie::class);
    // }
    public function actormovie(){
        return $this->hasMany(ActorMovie::class, 'act_id');
    }
}
