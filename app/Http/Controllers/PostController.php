<?php

namespace App\Http\Controllers;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Str;


use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $posts)
    {

        $user = User::all();

        return view('posts.index')
            ->with('posts',$posts->paginate(5))
            ->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {

        $user = User::all();


        $categories = Category::all();
        $tags = Tag::all();

        if($categories->count() >= 1 ){

            if($tags->count() >=1){
                return view('posts.create')
                    ->with('categories',$categories)
                    ->with('tags',$tags)
                    ->with('user',$user);
            }else{
                return redirect()
                    ->route('tags.create')
                    ->with('empty','you need to create category in order to create post!')
                    ->with('user',$user);

            }

        }else{
            return redirect()
                ->route('category.create')
                ->with('empty','you need to create category in order to create post!')
                ->with('user',$user);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {


        $user = User::all();

        $featured = $request->featured;
        $photo = $request->photo;


        //for video
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/posts',$featured_new_name);

        $video_name  = 'uploads/posts/'.$featured_new_name;
        //

        //for image
        $photo_new_name = time().$photo->getClientOriginalName();
        $photo->move('uploads/posts',$photo_new_name);

        $image_name  = 'uploads/posts/'.$photo_new_name;
        //

        $post = new Post();
        $post->title = Str::slug($request->title, '-');
        $post->content = $request->contents;
        $post->category_id = $request->category_id;
        $post->photo =$image_name;
        $post->featured =$video_name;

        $post->save();

         $post->Tag()->sync($request['tags']);



        return redirect()->route('posts.index')
            ->with('user',$user);

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
        $user = User::all();
        $posts = Post::find($id);
        $category = Category::all();
        $tags = Tag::all();

        return view('posts.edit')
            ->with('posts',$posts)
            ->with('categories',$category)
            ->with('tags',$tags)
            ->with('user',$user);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {

        $user = User::all();
        $post = Post::find($id);

        if($request->hasFile('featured')){

            $featured = $request->featured;
            $featured_new_name = time().$featured->getClientOriginalName();
            $featured->move('uploads/posts/',$featured_new_name);

            $post->featured = 'uploads/posts/'.$featured_new_name;
        }

        if($request->hasFile('photo')){

            $photo = $request->photo;
            $photo_new_name = time().$photo->getClientOriginalName();
            $photo->move('uploads/posts/',$photo_new_name);

            $post->photo = 'uploads/posts/'.$photo_new_name;
        }



        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->contents;

        $post->save();

        $post->Tag()->sync($request->tags);
        return redirect()->route('posts.index')
            ->with('user',$user);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user =User::all();
        $post = Post::find($id);
        $post->delete();


        return redirect()->back()
            ->with('user',$user);
    }

    public function Trashed(){

        $user = User::all();
        $posts = Post::onlyTrashed()->paginate(5);

        return view('posts.Trashed')
            ->with('posts',$posts)
            ->with('user',$user);
    }

    public function restore($id){

        $user = User::all();
        $posts = Post::withTrashed()->where('id',$id);
        $posts->restore();
        return redirect()->route('posts.index')
            ->with('user',$user);
    }

    public function hardDelete($id){

        $user = User::all();
        $post = Post::withTrashed()->where('id',$id);
        $post->forceDelete();


        return redirect()->back()
            ->with('user',$user);
    }
}
