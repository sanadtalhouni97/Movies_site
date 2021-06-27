<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\CategoriesTypeController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'categories_type','middleware'=>'role:superadministrator|administrator|editor'],function (){
    Route::get('/create', 'CategoriesTypeController@create')->name('categories_type.create');
    Route::post('/create/store', 'CategoriesTypeController@store')->name('categories_type.store');
    Route::get('/Categories_types', 'CategoriesTypeController@index')->name('categories_type.index');
    Route::get('/Categories_types/delete/{id}', 'CategoriesTypeController@destroy')->name('categories_type.destroy');
    Route::get('/Categories_types/edit/{id}', 'CategoriesTypeController@edit')->name('categories_type.edit');
    Route::post('/Categories_types/update/{id}', 'CategoriesTypeController@update')->name('categories_type.update');

});

?>
