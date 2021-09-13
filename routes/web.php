<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FileUploadController;
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

Route::resource('post', PostController::class);

Route::get('upload-ui', [FileUploadController::class, 'dropzoneUi' ]);
Route::post('file-upload', [FileUploadController::class, 'dropzoneFileUpload' ])->name('dropzoneFileUpload');

