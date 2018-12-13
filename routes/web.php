<?php

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

Route::get('/play', function () {
    return view('play');
});


Route::get('/2', function () {
    return view('welcome2');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/advance', 'AdvancedController@index')->name('advance');


// Route::group(['middleware' =>['web','auth']],function(){
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Route::get('/home',function(){
//         if(Auth::user()->advanced == 0){
//             return view('home');
//         }else{
//             return view('advance');
//         }
//     });
// });

