<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessegeController;
use App\Http\Controllers\AutAdminController;

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
    return view('index');
});
//Route::get('Messege', [MessageController::class, 'index']);
Route::post('/store', [MessegeController::class, 'store'])->name('store');


Route::get('/new-login', function () {
    return view('newLogin');
});


Route::post('/login', [AutAdminController::class, 'login'])->name('login');
Route::get('logout',  [AutAdminController::class, 'logout'])->name('logout');
Route::get('/admin', [MessegeController::class, 'index'])->name('admin.index');

// Route::group(['middleware' => 'auth'], function () {
//     
//     
// });