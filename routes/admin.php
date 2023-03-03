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

Route::get('/admin', function () {
    return "hello";
});
Route::get('/show string/{id?}', function () {
    return "jj";
})->name('b');

Route::namespace('front')->group(function(){     //conroller folder front  
    Route::get('show','userController@showAdminName');  //controller usersController method showAdminName 
    });


    // Route::prefix('users')->group(function(){     
    //     Route::get('users','userController@showAdminName');  

    Route::group(['prefix' =>'users','middleware'=>'auth'],function(){ 
        
        
        
        Route::get('/',function(){
            return "work";
        });
    });
            // Route::get('users','userController@showAdminName');  
    
    Route:: get('check',function(){
        return "midllware";
    }
    )->middleware('auth');// يمنع تفوت عليا اذا ماامل auth


