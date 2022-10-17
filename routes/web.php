<?php

use App\Http\Controllers\UserController;
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

Route::get('/test2', function(){
    return "Hello World";
});

Route::redirect('/test', '/test2');
Route::view('/greeting', 'greeting', ['name' => 'Resa Auliana Risyan']);

// Route::get('/user/{id}', function($id){
//     // var_dump(gettype($id));
//     return "User " . $id;
// });
// Route::get('/user2/{id?}', function($id = null){
//     if($id == null) return "ID User Kosong";
//     return "User " . $id;
// });

// Route::get('/user/{name}', function($name){
//     return 'Hai ' . $name. ' ...!';
// })->where('name', '[A-Za-z]+');


// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

Route::get('/user/{name}', [UserController::class, 'show']);
// Route::get('/user/profile', function(){
//     return 'Hello There';
// })->name('profile');