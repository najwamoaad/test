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

Route::get('/show member/{id}', function ($id) {
    return $id;
})->name('a');
Route::get('/show string/{id?}', function () {
    return "jj";
})->name('b');

Route::namespace('Admin')->group(function(){ 
 Route::get('second','ScondController@show0')->middleware('auth');
 Route::get('second1','ScondController@show1') ;
 Route::get('second2','ScondController@show2') ;
 Route::get('second3','ScondController@show3');
});

Route:: get('login',function ()
{
return "must login to access this route";
})->name('login');

Route::resource('news','newscontroller');

Route:: get('/test',function(){
    return view('layout');
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

 

 