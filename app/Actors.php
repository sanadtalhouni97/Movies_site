<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    protected $fillable = ['movie_id','actor_name'];

    protected $table = 'actors';
}
