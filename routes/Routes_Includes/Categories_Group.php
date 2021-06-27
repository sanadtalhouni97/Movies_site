<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\CategoryController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'categories','middleware','role:superadministrator|administrator|editor'],function (){
    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::get('/category/destroy/{id}', 'CategoryController@destroy')->name('category.destroy');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::put('/category/update/{id}', 'CategoryController@update')->name('category.update');
});

?>
