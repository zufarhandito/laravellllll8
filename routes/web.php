<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Verified;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


//start from here
Route::group(['middleware'=>'auth:sanctum','verified'],function(){
    route::resource('tasks', TaskController::class);
});

Route::group(['middleware'=>'can:isManager'],function(){
    route::resource('items',ItemController::class);
    route::resource('users',UserController::class);
});

// Route::middleware('can:isManager')->get('/items',function(){
//     return view('items.index');
// });