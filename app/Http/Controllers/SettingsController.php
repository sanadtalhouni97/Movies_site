<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsRequest;
use Illuminate\Http\Request;
use App\Setting;
use App\User;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user =User::all();

        if (Auth::user()->hasRole('superadministrator') === true){
        $settings = Setting::first();

        return view('settings.settings')
            ->with('settings',$settings)->with('user',$user);
        }else{
            return redirect()
                ->route('home')
                ->with('warning','you are not authorized')
                ->with('user',$user);

        }
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
    public function store(SettingsRequest $request)
    {
        $user =User::all();

        if (Auth::user()->hasRole('superadministrator') === true){



        $settings_store = new Setting();

        $settings_store->blog_name = $request->blog_name;
        $settings_store->phone_number = $request->phone_number;
        $settings_store->blog_Email = $request->blog_Email;
        $settings_store->address = $request->address;
        $settings_store->linkedIn = $request->linkedIn;
        $settings_store->twitter = $request->twitter;
        $settings_store->facebook = $request->facebook;

        $settings_store->save();

        return redirect()->back()
            ->with('user',$user)
            ->with('status','saved successfully');;
        }else{
            return redirect()
                ->route('home')
                ->with('warning','you are not authorized')->with('user',$user);

        }

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
    public function update(SettingsRequest $request, $id)
    {

        $user =User::all();


        $settings = Setting::find($id);

        $settings->blog_name = $request->blog_name;
        $settings->phone_number = $request->phone_number;
        $settings->blog_Email = $request->blog_Email;
        $settings->address = $request->address;
        $settings->twitter = $request->twitter;
        $settings->facebook = $request->facebook;
        $settings->linkedIn = $request->linkedIn;


        $settings->save();

        return redirect()->back()
            ->with('user',$user)
            ->with('status','updated successfully');
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
