<?php

namespace App\Http\Controllers;

use App\Http\Requests\TagRequest;
use App\Tag;
use App\Setting;
use App\User;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = User::all();
        $tags = Tag::paginate(5);
        return view('tags.index')
            ->with('tags',$tags)
            ->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        return view('tags.create')
            ->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $user = User::all();


        Tag::create($request->all());


       return redirect()
           ->route('tags.index')
           ->with('status','saved successfully')
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
        $user = User::all();
        $tags = Tag::find($id);
        $find_posts = $tags->posts;
        $settings = Setting::all()->first();

        return view('tags.show')
            ->with('find_posts',$find_posts)
            ->with('settings',$settings)
            ->with('tags',$tags)
            ->with('user',$user);


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
        $tag = Tag::find($id);

        return view('tags.edit')
            ->with('tag',$tag)
            ->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {

        $user = User::all();


        $tag = Tag::find($id);

        $tag->tag = $request->tag;

        $tag->save();

        return redirect()->route('tags.index')
            ->with('status','changed successfully')
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
        $user = User::all();

        $tag = Tag::find($id);

        $tag->destroy($id);

        return redirect()->back()
            ->with('status','deleted successfully')
            ->with('user',$user);
    }
}
