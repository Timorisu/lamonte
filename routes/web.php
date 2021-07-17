<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessegeController;

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
Route::get('/admin', [MessegeController::class, 'index'])->name('admin.index');
Route::post('/store', [MessegeController::class, 'store'])->name('store');
