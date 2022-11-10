<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\LuxeTribeLoginController;
use App\Http\Controllers\LuxeTribesRegisterController;

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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('logout', function () {
    Session::flush();
    Auth::logout();
    return Redirect('login');

});

Route::resource('user',  LuxeTribeLoginController::class);
Route::post('/luxe-register', [LuxeTribesRegisterController::class, "createLuxeTribeMember"] )->name('luxe-register');