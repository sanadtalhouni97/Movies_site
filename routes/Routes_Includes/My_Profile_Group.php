<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\ProfileController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'my_profile','middleware'=>'auth'],function (){

    Route::get('/{id}','ProfileController@show')->name('profile.show');
    Route::post('/{id}/update','ProfileController@update')->name('profile.update');

});

?>
