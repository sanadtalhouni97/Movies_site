<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Role;
use App\Permission;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function __construct()
//    {
//
//        $this->Auth::user()->hasRole('role-name');
//
//    }

    public function index(){
        $user = User::all();


        //check Role




            $users_admin = User::Where('admin',0)->get();

            return view('users.index')
                ->with('user',$user)
                ->with('users_admin',$users_admin);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();

        //check Role
        if (Auth::user()->hasRole('superadministrator') === true
        || Auth::user()->hasRole('Administrator') === true){

                $user_type = Role::all();
                $permission = Permission::all();
                return view('users.create')
                    ->with('user_type',$user_type)
                    ->with('permission',$permission)
                    ->with('user',$user);
        }
        else{
            return redirect()->route('home')
                ->with('warning','you are not authorized')
                ->with('user',$user);

        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {


        //check Role
        if (Auth::user()->hasRole('superadministrator') === true
            || Auth::user()->hasRole('Administrator') === true){

        //create User
        $user = User::create([
            'name'    =>    $request->name,
            'email'   =>    $request->email,
            'password'=>    bcrypt($request->password)
        ]);

         //create User Profile
         $profile = Profile::create([
            'user_id'=>$user->id,
            'avatar' => 'uploads\avatar\1.png'
        ]);

         // Request for User Permission and User Type
        $permissions = $request->permissions;
        $user_type =$request->user_type;


        //sync User Roles
        $user->syncRoles([$user_type]);

        //sync User Permissions
        $user->syncPermissions($permissions);



        return redirect()->route('user.index');
        }
        else{
            return redirect()->route('home')
                ->with('warning','you are not authorized');

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
        $user =User::all();

        if (Auth::user()->hasRole('superadministrator') === true){

            $users = User::find($id);
;
        return view('users.edit')
            ->with('users',$users)
            ->with('user',$user);
        }else{
            return redirect()->route('home')
                ->with('warning','you are not authorized')
                ->with('user',$user);

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $id)
    {

        $user =User::all();

        $update = User::find($id);

        $update->name = $request->name;
        $update->password = bcrypt($request->password);

        $update->save();

        return redirect()->back()
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

        $user = User::find($id);

        $user->delete();
        return redirect()->back()->with('status','user deleted successfully');

    }

    public function NOT_admin($id)
    {
        $user  =User::all();
        $users = User::find($id);
        $users->admin = 0;
        $users->save();
        return redirect()->route('user.index')
            ->with('user',$user);
    }

    public function Make_admin($id)
    {
        $user  =User::all();
        $users = User::find($id);
        $users->admin = 1;
        $users->save();
        return redirect()->route('user.index')
            ->with('user',$user);


    }
}
