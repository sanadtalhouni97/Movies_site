<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;

    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Profile()
    {

        return $this->hasOne('App\Profile');


         }


         //check for validation Users Roles
         public function RoleUsers(){

             if(Auth::user()->hasRole('administrator') === true
                 ||   Auth::user()->hasRole('superadministrator') === true){
                 $user_check_role = true;
             }else{
                 $user_check_role =  false;
             }

             return $user_check_role;
         }

        public function RoleSettings(){

            if(Auth::user()->hasRole('superadministrator') === true){
                $Settings_check_role = true;
            }else{
                $Settings_check_role =  false;
            }

            return $Settings_check_role;
        }

    public function RoleCOT(){

        if(Auth::user()->hasRole('superadministrator') === true
        || Auth::user()->hasRole('administrator') === true
        || Auth::user()->hasRole('editor') === true){
            $COT_check_role = true;
        }else{
            $COT_check_role =  false;
        }

        return $COT_check_role;
    }



}
