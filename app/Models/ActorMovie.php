<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorMovie extends Model
{
    use HasFactory;
    protected $table = 'actor_movie';

    public function actor()
    {
        return $this->belongsTo(Actor::class, 'act_id');
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'mov_id');
    }
}
