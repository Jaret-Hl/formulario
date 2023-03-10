<?php

use App\Http\Controllers\Admin\fileController;
use App\Http\Controllers\Admin\homeController;
use App\Http\Controllers\AjaxUploadController;
use App\Http\Controllers\photosController;
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

Auth::routes();

Route::get('admin', [homeController::class, 'index'])->name('admin.home');

Route::resource('admin/files', fileController::class)->names('admin.files');

Route::get('image-preview', [AjaxUploadController::class, 'index']);
Route::post('upload', [AjaxUploadController::class, 'store']);