<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\UserController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'users','middleware'=>'role:superadministrator|administrator'],function (){
    Route::get('/users','UserController@index')->name('user.index');
    Route::get('/users/create','UserController@create')->name('user.create');
    Route::post('/users/store','UserController@store')->name('user.store');
    Route::get('/users/NOT_admin/{id}','UserController@NOT_admin')->name('user.NOT_admin');
    Route::get('/users/Make_admin/{id}','UserController@Make_admin')->name('user.Make_admin');
    Route::get('/users/{id}','UserController@edit')->name('user.edit');
    Route::post('/users/{id}/update','UserController@update')->name('user.update');
    Route::get('/users/{id}/delete','UserController@destroy')->name('user.destroy');
});

?>
