<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable =
        ['category_id', 'tag_id', 'post_id', 'movie_title', 'actors',
            'movie', 'about_movie'];
    protected $table = 'movies';

    public function Category()
    {
        return $this->hasOne('App\Category');
    }

    public function Post()
    {
        return $this->hasMany('App\Post');
    }

    public function Tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function Category_type()
    {
        return $this->belongsToMany('App\category_type');
    }


}
