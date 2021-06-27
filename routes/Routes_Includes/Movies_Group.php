<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\MoviesController:: }}
//{{ \App\Http\Controllers\ActorController:: }}
/////////////////////////////////////////////////////

Route::group(['prefix'=>'Movies','middleware'=>'role:superadministrator|administrator|editor'],function (){

    //create movie
    Route::get('/all_movies','MoviesController@index')->name('movies.index');
    Route::get('/create_movie','MoviesController@create')->name('movies.create');
    Route::post('/store_movie','MoviesController@store')->name('movies.store');
    Route::get('/edit_movie/{id}','MoviesController@edit')->name('movies.edit');
    Route::put('/update_movie/{id}','MoviesController@update')->name('movies.update');
    Route::get('/delete_movie/{id}','MoviesController@destroy')->name('movies.destroy');
    Route::get('/show/{id}','MoviesController@show')->name('movies.show');
    Route::get('/collection/{name}','MoviesController@collection')->name('movies.collection');




    //create actor
    Route::get('/all_actors','ActorController@index')->name('actor.index');
    Route::get('/Add_actor','ActorController@create')->name('actor.create');
    Route::post('/store_actor','ActorController@store')->name('actor.store');
    Route::get('/actor_edit/{id}','ActorController@edit')->name('actor.edit');
    Route::put('/update_actor/{id}','ActorController@update')->name('actor.update');
    Route::get('/delete_actor/{id}','ActorController@destroy')->name('actor.destroy');
    Route::get('/{id}/{actor_name}','ActorController@show')->name('actor.show');


});

?>
