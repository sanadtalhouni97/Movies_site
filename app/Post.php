<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{

    use SoftDeletes;

    protected $table = 'posts';

    protected $fillable = ['title','content','category_id','featured'];

    protected $dates = ['deleted_at'];


    public function  Image($featured){

        return asset($featured);
    }


    public function category (){

        return $this->belongsTo('App\Category');

    }

    public function Tag(){

        return $this->belongsToMany('App\Tag');
    }

    public function movies(){

        return $this->belongsToMany('App\Movies');
    }




}
