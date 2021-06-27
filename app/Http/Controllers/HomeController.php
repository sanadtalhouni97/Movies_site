<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Movies;
use App\category_type;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
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

        //get Category types
        $category_type =category_type::all();

        return view('home')
            ->with('user',$user)
            ->with('space',$space)
            ->with('categories',$categories)
            ->with('space_categories',$space_categories)
            ->with('posts',$posts)
            ->with('space_posts',$space_posts)
            ->with('tags',$tags)
            ->with('space_tags',$space_tags)
            ->with('movies',$movies)
            ->with('category_type',$category_type)
            ;
    }

    public function Categories($category){


        dd($category);
//        return view()
    }


}
