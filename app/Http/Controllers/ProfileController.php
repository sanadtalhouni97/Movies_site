<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $user = User::all();
        $profile = User::find($id);
        $user_info = Profile::Where('user_id',$id)->first();

        return view('profile.show')
            ->with('user_info',$user_info)
            ->with('user',$user)
            ->with('profile',$profile);


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
    public function update(ProfileRequest $request, $id)
    {


        $UpdateProfile = Profile::where('user_id',$id)->first();

        $UpdateUser = User::find($id);

        //upload picture
        $avatar = $request->avatar;
        $avatar_new_name = time().$avatar->getClientOriginalName();
        $avatar->move('uploads/profile_picture/',$avatar_new_name);



        $UpdateUser->name = $request->name;
        $UpdateUser->email = $request->email;
        $UpdateProfile->facebook = $request->facebook;
        $UpdateProfile->twitter = $request->twitter;
        $UpdateProfile->gitgub = $request->gitgub;
        $UpdateProfile->about = $request->about;
        $UpdateProfile->avatar = 'uploads/profile_picture/'.$avatar_new_name;

        $UpdateUser->save();
        $UpdateProfile->save();

        return redirect()->back()->with('status','Profile updated successfully');
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
