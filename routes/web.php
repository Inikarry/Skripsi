<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\Mongodb\DataController;

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
    return view('pages.index');
})->name('index');

Route::get('/testSearch', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'mongodb', 'namespace'=> 'Mongodb'], function () {
    Route::get('data', [DataController::class, 'index'])->name('mongodb.index');
    Route::get('show/{id}', [DataController::class, 'show'])->name('mongodb.show');
});

Route::get('/form', [FormDataController::class, 'showForm']);
Route::post('/save-form', [FormDataController::class, 'saveForm']);
Route::get('/daftar', [FormDataController::class, 'showDaftar'])->name('daftar');
Route::get('/data', [FormDataController::class, 'data'])->name('data');
Route::post('/show-data', [FormDataController::class, 'showData']);
Route::get('/search', [FormDataController::class, 'search']);

Route::post('/update/{id}', [FormDataController::class, 'updateData'])->name('update');
Route::patch('/save-update/{id}', [FormDataController::class, 'saveUpdate'])->name('save-update');
Route::delete('/delete/{id}', [FormDataController::class, 'deleteData'])->name('delete');
