<?php

use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\CapacityController:: }}
/////////////////////////////////////////////////////


Route::group(['prefix'=>'Capacity','middleware'=>'role:superadministrator|administrator'],function (){
    Route::get('/Capacity', 'CapacityController@index')->name('capacity.index');
});

?>
