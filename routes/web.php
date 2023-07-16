<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/hello',function(){
    return 'Hello World';
});

Route::get('/user',[UserController::class,'index']);

Route::any('/create',[UserController::class,'create']);

Route::any('store',[UserController::class,'store']); //using any function ()

Route::any('test', function (Request $request) {
    // ...
    dd($request);
});

Route::redirect('/redirect', '/create');  //using redirect methods

Route::view('/first', 'first'); //define by resoure/view/wecolme.blade.php

// Route::view('/first', 'first', ['name' => 'test']);

Route::get('/student/{name?}', function ($name = null) {
    return $name;
});                                                 // Optional Parameters


Route::get('/students/{name?}', function ($name) {
    return $name;
});                                                 // Optional Parameters

//Regular Expression Constraints

Route::get('/teacher/{name}',function($name){
    return $name;
})->where('name','[A-Za-z]+');

Route::get('/teacher/{id}',function($id){
    return $id;
})->where('id','[0-9]+');

Route::get('/teachers/{name}/{id}',function($name,$id){
    return "Teacher   ".$name."And Id No  ".$id;
})->where(['name'=>'[A-Za-z]+','id'=>'[0-9]+']);
