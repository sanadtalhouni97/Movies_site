<?php
use Illuminate\Support\Facades\Route;

// Controller Used in the Routes here Uncomment them and Go to Controller
/////////////////////////////////////////////////////
//{{ \App\Http\Controllers\WebsiteUIController:: }}
//{{ \App\Http\Controllers\CategoryController:: }}
//{{ \App\Http\Controllers\TagController:: }}
/////////////////////////////////////////////////////

Route::group(['prefix'=>'Roya'],function (){
//website UI
    Route::get('/','WebsiteUIController@index')->name('index');
//show category
    Route::get('/categories/{id}','CategoryController@show')->name('category.show');
//show posts related to similar tag
    Route::get('/tags/{id}','TagController@show')->name('tags.show');
//show entered search category
    Route::get('/categories/search/{id}','WebsiteUIController@search_show')->name('search_show');
});

?>
