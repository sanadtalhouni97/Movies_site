<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\SettingsController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'settings','middleware'=>['role:superadministrator']],function (){
    Route::get('/setting','SettingsController@index')->name('setting.index');
    Route::post('/setting/update/{id}','SettingsController@update')->name('setting.update');
    Route::post('/setting/store','SettingsController@store')->name('setting.store');
});

?>
