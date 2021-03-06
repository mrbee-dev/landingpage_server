<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [LandingpageController::class, 'showIndex'])->name('index');
Route::post('/', [LandingpageController::class, 'sendMail'])->name('send.mail');
Route::get('/my-admin-nha-thuoc-phong-nhi-060798-220597', [AdminController::class, 'index'])->name('admin.index');
