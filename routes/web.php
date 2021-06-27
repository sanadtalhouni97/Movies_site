<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
//search for category
Route::get('search_fun','WebsiteUIController@search_fun')->name('search_fun');

//Roya Group Routes in the include bellow
include 'Routes_Includes/Roya_Group.php';

//Roya_Watch group Routes in the include bellow
include 'Routes_Includes/Roya_Watch_Group.php';

//Capacity group Routes in the include bellow
include 'Routes_Includes/Capacity_Group.php';

//settings group Routes in the include bellow
include 'Routes_Includes/Settings_Group.php';

//tag group Routes in the include bellow
include 'Routes_Includes/Tags_Group.php';

//users group Routes in the include bellow
include 'Routes_Includes/Users_Group.php';

//categories group Routes in the include bellow
include 'Routes_Includes/Categories_Group.php';

//categories_type group Routes in the include bellow
include 'Routes_Includes/Category_Type_Group.php';

//posts group Routes in the include bellow
include 'Routes_Includes/Posts_Group.php';

//my_profile Routes in the include bellow
include 'Routes_Includes/My_Profile_Group.php';

//movies route
// Note: This group of routes include Actor Routes
include 'Routes_Includes/Movies_Group.php';

//redirect back
Route::get('back', function () {
    return redirect()->back();
})->name('back');

Auth::routes();


//comment's bellow just for test


//Route::group(['middleware'=>['role:administrator']],function (){
//
//    Route::resource('users','UsersController');
//    Route::resource('permission','PermissionController');
//    Route::resource('roles','RolesController');
//
//});


//Route::get('/sanad',function (){
//
////   return App\Post::find(7)->Tag;
//    return App\User::find(1)->profile;
//});


//roles
//Route::get('/newrole', function () {
//
////    create owner
//    $owner = new App\Role();
//    $owner->name = 'owner';
//    $owner->display_name = 'project owner';
//    $owner->description = 'user is the owner of a given project';
//    $owner->save();
//
//
////create admin
//    $admin = new App\Role();
//    $admin->name = 'admin';
//    $admin->display_name = 'project admin';
//    $admin->description = 'user is the admin of a given project';
//    $admin->save();
//
//
//    $super = new App\Role();
//    $super->name = 'super admin';
//    $super->display_name = 'project admin';
//    $super->description = 'user is the admin of a given project';
//    $super->save();
//
//
//
//    return back();
//});





