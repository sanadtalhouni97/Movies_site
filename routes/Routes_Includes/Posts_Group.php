<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\PostController:: }}
/////////////////////////////////////////////////////

Route::group(['prefix'=>'posts','middleware'=>'role:superadministrator|administrator|editor'],function (){
    //posts
    Route::get('/post', 'PostController@index')->name('posts.index');
    Route::get('/post/create', 'PostController@create')->name('posts.create');
    Route::post('/post/store', 'PostController@store')->name('posts.store');
    Route::get('/post/destroy/{id}', 'PostController@destroy')->name('posts.destroy');
    Route::get('/post/Trashed', 'PostController@Trashed')->name('posts.Trashed');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('posts.restore');
    Route::get('/post/hardDelete/{id}', 'PostController@hardDelete')->name('posts.hardDelete');
    Route::get('/post/edit/{id}', 'PostController@edit')->name('posts.edit');
    Route::put('/post/update/{id}', 'PostController@update')->name('posts.update');
});

?>
