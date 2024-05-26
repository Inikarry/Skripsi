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
    Route::get('data', [DataController::class, 'index'])->name('mongodb.data.index');
    Route::get('show/{id}', [DataController::class, 'show'])->name('mongodb.data.show');
    Route::put('update/{id}', [DataController::class,'update'])->name('mongodb.data.update');
    Route::delete('delete/{id}', [DataController::class,'destroy'])->name('mongodb.data.delete');

    Route::get('create', [DataController::class,'create'])->name('mongodb.create.form');
    Route::post('save', [DataController::class,'store'])->name('mongodb.create.save');
    Route::get('check', [DataController::class,'checkExist'])->name('mongodb.create.check');
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
