<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use App\Setting;
use App\User;
use App\category_type;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        $user =User::all();
        return view('category.index')
            ->with('categories',$categories)
            ->with('user',$user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user =User::all();
        $categories_type = category_type::all();
        return view('category.create')
            ->with('user',$user)
            ->with('categories_type',$categories_type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest  $request)
    {

        $user =User::all();
        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/categories/',$featured_new_name);

        $category = new Category();

        $category->name = $request->name;
        $category->featured = 'uploads/categories/'.$featured_new_name;


        $category->save();

        $category->CategoryType()->sync($request['category_type']);

//        dd($request->category_type_id);


        //

        return redirect(route('category.index'))->with('user',$user);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user =User::all();
        $show = Post::find($id);
        $tags = $show->Tag;
        $settings = Setting::all()->first();

        return view('category.show')
            ->with('show',$show)
            ->with('tags',$tags)
            ->with('settings',$settings)
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
        $user =User::all();
        $category = Category::findOrfail($id);
        return view('category.edit')
            ->with('category',$category)
            ->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryStoreRequest $request, $id)
    {
        $user =User::all();
       $category = Category::find($id);


        $featured = $request->featured;
        $featured_new_name = time().$featured->getClientOriginalName();
        $featured->move('uploads/categories/',$featured_new_name);

        $category->featured = 'uploads/categories/'.$featured_new_name;
        $category->name = $request->name;


       $category->save();

       return redirect(route('category.index'))->with('user',$user);

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
        $category = Category::find($id);
        $category->delete();

        return redirect()->back()->with('user',$user);
    }
}
