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

    $obj = new stdClass();
    $obj -> name = "zoka";
    $obj -> id = 5;
    $obj -> gender = "male";

    return view('welcome',compact('obj'));
});


Route::get('/Show_Required/{id}',function ($id){
   return $id;
}) -> name("ShowR");

Route::get('/Show_Optional/{id?}',function ($id = ""){
    if($id != ""){
        return $id;
    }else{
        return "Welcome";
    }
}) -> name("ShowO");

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');



/*
Route::namespace('Front')->group(function (){
    Route::get("users","UserController@ShowUserName");
    Route::get('usersD','UserController@ShowUserDetail');
});

/*
Route::prefix('users')->group(function (){
    Route::get("Show",function (){
       return "Work";
    });
});
*/

/*
Route::group(['prefix' => 'users','middleware'=>'auth'],function (){
   Route::get("showGroup0",function (){
       return "ShowGroup0";
   });
    Route::get("showGroup1",function (){
        return "ShowGroup1";
    });
    Route::get("showGroup2",function (){
        return "ShowGroup2";
    });
});
*/

/*
Route::get("/middle",function (){
    return 'Middle';
})->middleware('auth');



//Route::get('ShowName2','Front\UserController@ShowUserName2');

Route::group(['namespace'=> 'Front'],function (){
   Route::get('ShowName1','UserController@ShowUserName1')->middleware('auth');
    Route::get('ShowName2','UserController@ShowUserName2');
    Route::get('ShowName3','UserController@ShowUserName3')->middleware('auth');
});



Route::get('login',function (){
   return 'this is Login Screen';
}) -> name('login');


Route::resource('news',"NewsController");

Route::get('landing',function (){
   return view('landing');
});


Route::get('about',function (){
   return view('about');
});

*/


