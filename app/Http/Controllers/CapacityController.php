<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Movies;

class CapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //count for users
        $user = User::all();
        $space =   100 - $user->count();





        //count for categories
        $categories = Category::all();
        $space_categories= 500 - $categories->count();

        //count for posts
        $posts = Post::all();
        $space_posts = 1000 - $posts->count();

        //count for tags
        $tags = Tag::all();
        $space_tags = 5000 - $tags->count();

        //get movies
        $movies = Movies::all();


        return view('capacity.index')
            ->with('user',$user)
            ->with('space',$space)
            ->with('categories',$categories)
            ->with('space_categories',$space_categories)
            ->with('posts',$posts)
            ->with('space_posts',$space_posts)
            ->with('tags',$tags)
            ->with('space_tags',$space_tags)
            ->with('movies',$movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
