<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditMovieRequest;
use App\Http\Requests\MoviesRequest;
use Illuminate\Http\Request;
use App\Movies;
use App\User;
use App\Category;
use App\Post;
use App\Tag;
use App\Actors;
use App\category_type;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $movies = Movies::paginate(5);
        $post = Post::all();
        $Category = Category::all();


        return view('movies.index')
            ->with('user',$user)
            ->with('movies',$movies)
            ->with('post',$post)
            ->with('Category',$Category)
            ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $user = User::all();
        $categories = Category::all();
        $posts = Post::all();
        $category_type = category_type::all();

        return view('movies.create')
            ->with('user',$user)
            ->with('categories',$categories)
            ->with('posts',$posts)
            ->with('category_type',$category_type);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MoviesRequest  $request)
    {

        $movies = new Movies();
        $movie = $request->movie;
        $movie_new_name = time().$movie->getClientOriginalName();
        $movie->move('uploads/movies/',$movie_new_name);



        $movies->category_id = $request->category_id;
        $movies->post_id = $request->post_id;
        $movies->movie_title = $request->movie_title;
        $movies->movie = 'uploads/movies/'.$movie_new_name;
        $movies->about_movie = $request->about_movie;

        $movies->save();

        $movies->Category_type()->sync($request['movies_category_type']);

        return redirect()
            ->route('movies.index')
            ->with('status','movie added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
////
        $movies = Movies::find($id);


        $movies_categoryType = $movies->Category_type->first();



        $Category_type = category_type::all();


        $movies_related = Movies::all();







        $category = Category::where('id',$movies->category_id)->first();


//        dd($Category_type->Movies);

        $user = User::all();
        $posts = Post::where('id',$movies->post_id)->first();

        $movies_related_wallpaper = Post::all();

        $tags = Tag::all();
//        $tags_related = Tag::where('id',$posts->Tag->id)->get();


        $actors = Actors::where('movie_id',$id)->get();

        return view('movies.show')
            ->with('user',$user)
            ->with('posts',$posts)
            ->with('tags',$tags)
            ->with('movies',$movies)
            ->with('movies_categoryType',$movies_categoryType)
            ->with('actors',$actors)
            ->with('category',$category)
            ->with('movies_related',$movies_related)
            ->with('Category_type',$Category_type)
            ->with('movies_related_wallpaper',$movies_related_wallpaper)
            ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $categories = Category::all();
        $posts = Post::all();
        $movies = Movies::find($id);

        return view('movies.edit')
            ->with('user',$user)
            ->with('categories',$categories)
            ->with('posts',$posts)
            ->with('movies',$movies);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditMovieRequest  $request, $id)
    {


        $movies = Movies::find($id);

        $movie = $request->edit_movie;
        $movie_new_name = time().$movie->getClientOriginalName();
        $movie->move('uploads/movies/',$movie_new_name);



        $movies->category_id = $request->category_id;
        $movies->post_id = $request->post_id;
        $movies->movie_title = $request->movie_title;
        $movies->movie = 'uploads/movies/'.$movie_new_name;
        $movies->about_movie = $request->about_movie;

        $movies->save();

        return redirect()
            ->route('movies.index')
            ->with('status','movie updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $movies = Movies::find($id);
        $movies->delete();

        return redirect()
            ->route('movies.index')
            ->with('status','movies deleted successfully');
    }

    public function collection($name){


        $movies = category_type::where('name',$name)->get();
        $category_type = category_type::all();
        $posts = Post::all();
        $user = User::all();

        return view('movies.collection')
            ->with('movies',$movies)
            ->with('category_type',$category_type)
            ->with('posts',$posts)
            ->with('user',$user);
    }


}
