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

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/play/{id}', 'HomeController@play');
Route::post('/home/convert', 'HomeController@convert')->name('beginner.convert');



Route::get('/advance', 'AdvancedController@index')->name('advance');
Route::get('/advance/play/{id}', 'AdvancedController@play');
Route::post('/advance/convert', 'AdvancedController@convert')->name('advance.convert');
Route::get('/advance/download_certificate', 'AdvancedController@certificate')->name('download_certificate');



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

