<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
   return view('home/index');
})->name('blogs');


Route::get('/pizza','PizzaController@pizza')->name('pizza');
Route::get('/about','HellowController@verification')->name('about');
Route::get('/contact','HellowController@validation')->name('contact');

Route::get('/bus','NameController@home')->name('buses');
Route::post('/bus','NameController@insert')->name('buses');

Route::get('/edit_bus/{id}','NameController@edit');
Route::post('/edit_bus/{id}','NameController@edit_bus');

Route::get('/delete_bus/{id}','NameController@delete');
Route::get('/view','NameController@view')->name('view');
Route::post('/view','NameController@view')->name('view');

Route::prefix('home')->group(function(){
    Route::group(['middleware' => ['verify']],function(){
        
    
 

    });
});


Route::prefix('pizza')->group(function(){
    Route::group(['middleware' => ['pizza']], function () {
        
    });
});


//match('get','post')