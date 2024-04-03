<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', function () { 
    return view('welcome');
});


// Route::get('/hello', function () {
//     return 'Hello Naji';
// });

// Route::get('/post/{id}/{name}',function($id,$name){
//     return "I'm ".$name." my nember is :".$id ;
// });

// Route::get(' ', array('as'=> 'admin' ,function(){
//     $url=route('admin');
//     return "hi ".$url; 
// }));

// Route::get('/Post/{id}', [PostController::class, 'index']);

Route::resource('Posts', PostController::class);