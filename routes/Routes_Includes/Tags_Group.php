<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\TagController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'tag','middleware'=>'role:superadministrator|administrator|editor'],function (){
    //tags
    Route::get('/tags','TagController@index')->name('tags.index');
    Route::get('/tags/create', 'TagController@create')->name('tags.create');
    Route::post('/tags/store', 'TagController@store')->name('tags.store');
    Route::get('/tags/edit/{id}', 'TagController@edit')->name('tags.edit');
    Route::put('/tags/update/{id}', 'TagController@update')->name('tags.update');
    Route::get('/tags/destroy/{id}', 'TagController@destroy')->name('tags.destroy');
});

?>
