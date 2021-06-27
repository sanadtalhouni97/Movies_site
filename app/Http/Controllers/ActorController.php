<?php

namespace App\Http\Controllers;

use App\Actors;
use App\Http\Requests\ActorRequest;
use App\Post;
use Illuminate\Http\Request;
use App\User;
use App\Movies;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::all();
        $actors = Actors::paginate(5);
        $movies = Movies::all();
        return view('actor.index')
            ->with('user', $user)
            ->with('actors', $actors)
            ->with('movies',$movies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $movies = Movies::all();

        if ($movies->count() >= 1) {

            return view('actor.create')
                ->with('user', $user)
                ->with('movies', $movies);
        } else {
            return redirect()->route('movies.create')
                ->with('warning', 'you need to create movie in order to add Actor');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActorRequest $request)
    {

        $actor_image = $request->actor_image;
        $actor_image_new_name = time() . $actor_image->getClientOriginalName();
        $actor_image->move('uploads/actors/', $actor_image_new_name);

        $actors = new Actors();

        $actors->actor_name = $request->actor_name;
        $actors->movie_id = $request->movie_id;
        $actors->actor_image = 'uploads/actors/' . $actor_image_new_name;

        $actors->save();

        return redirect()
            ->route('actor.index')
            ->with('status','Actor Added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$actor_name)
    {
        $user = User::all();
        $actor = Actors::find($id);
        $movies = Movies::where('id',[$actor->movie_id])->get();
        $post = Post::all();

        return view('actor.show')
            ->with('user',$user)
            ->with('actor',$actor)
            ->with('movies',$movies)
            ->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $user = User::all();
        $movies = Movies::all();
        $actor = Actors::find($id);

        if ($movies->count() >= 1) {

            return view('actor.edit')
                ->with('user', $user)
                ->with('movies', $movies)
                ->with('actor',$actor);
        } else {
            return redirect()->route('movies.create')
                ->with('warning', 'you need to create movie in order to add Actor');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActorRequest $request, $id)
    {
        $actor_image = $request->actor_image;
        $actor_image_new_name = time() . $actor_image->getClientOriginalName();
        $actor_image->move('uploads/actors/', $actor_image_new_name);

        $actor = Actors::find($id);

        $actor->movie_id = $request->movie_id;
        $actor->actor_name = $request->actor_name;
        $actor->actor_image = 'uploads/actors/' . $actor_image_new_name;

        $actor->save();
        return redirect()
            ->route('actor.index')
            ->with('warning','Actor updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actor = Actors::find($id);

        $actor->delete();
        return redirect()->route('actor.index')
            ->with('status','Actor deleted successfully');
    }
}
