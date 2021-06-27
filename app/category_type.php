<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category_type extends Model
{

    protected $fillable = ['name','categories_id'];

    protected $table = 'category_type';


    public function Category(){

        return $this->belongsToMany('App\Category');

    }

    public function Movies(){

        return $this->belongsToMany('App\Movies');
    }
}
