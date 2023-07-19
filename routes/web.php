<?php

use App\Events\UserRegisterBroadcast;
use Illuminate\Support\Facades\Route;

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

Route::get('/user/register', function () {
    return view('user-register');
});

Route::post('/user/register', function () {

    $name = request()->name;

    event(new UserRegisterBroadcast($name));
    
    return view('user-register');
});
