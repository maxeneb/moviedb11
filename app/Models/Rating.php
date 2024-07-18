<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Reviewer;

class Rating extends Model
{
    //
    protected $table = 'ratings';
    protected $primaryKey = 'rev_id';
    public $incrementing = false;
    public $timestamps = false;

    public function reviewer(){
        return $this->hasOne(Reviewer::class);
    }

    public function movies()
    {
        return $this->belongsTo(Movie::class, 'mov_id');
    }
}
