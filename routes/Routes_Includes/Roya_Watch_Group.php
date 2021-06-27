<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\HomeController:: }}
/////////////////////////////////////////////////////

Route::group(['prefix'=>'Roya_watch','middleware'=>'auth'],function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/{category}', 'HomeController@Categories')->name('Categories');
});

?>
