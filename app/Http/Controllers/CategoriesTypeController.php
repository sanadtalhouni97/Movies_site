<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category_typeRequest;
use Illuminate\Http\Request;
use App\User;
use App\category_type;
use App\Category;

class CategoriesTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $categories_type = category_type::paginate(5);
        return view('categories_type.index')
            ->with('user',$user)
            ->with('categories_type',$categories_type);
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

        return view('categories_type.create')
            ->with('user',$user)
            ->with('categories',$categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Category_typeRequest   $request)
    {

        $categoryType = category_type::create($request->all());

        return redirect()->back()->with('status','category type saved successfully');
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
        $categories_type = category_type::find($id);

        return view('categories_type.edit')
            ->with('user',$user)
            ->with('categories_type',$categories_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Category_typeRequest $request, $id)
    {
        $categories_type = category_type::find($id);
        $categories_type->update($request->all());

        return redirect()->back()->with('status','category type updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoryType = category_type::find($id);

        $categoryType->delete();

        return redirect()->back()
            ->with('status','Category type Deleted successfully');
    }
}
