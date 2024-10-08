<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormDataController;
use App\Http\Controllers\Mongodb\DataController as MongoDBController;
use App\Http\Controllers\Elastic\DataController as ElasticController;

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
    Route::get('data', [MongoDBController::class, 'index'])->name('mongodb.data.index');
    Route::get('show/{id}', [MongoDBController::class, 'show'])->name('mongodb.data.show');
    Route::put('update/{id}', [MongoDBController::class,'update'])->name('mongodb.data.update');
    Route::delete('delete/{id}', [MongoDBController::class,'destroy'])->name('mongodb.data.delete');

    Route::get('create', [MongoDBController::class,'create'])->name('mongodb.create.form');
    Route::post('save', [MongoDBController::class,'store'])->name('mongodb.create.save');
    Route::get('check', [MongoDBController::class,'checkExist'])->name('mongodb.create.check');
});

Route::group(['prefix'=> 'elastic', 'namespace'=> 'Elastic'], function () {
    Route::get('data', [ElasticController::class, 'index'])->name('elasticsearch.data.index');
    Route::get('test', [ElasticController::class, 'test']);
    Route::get('show/{id}', [ElasticController::class, 'show'])->name('elasticsearch.data.show');
    Route::put('update/{id}', [ElasticController::class,'update'])->name('elasticsearch.data.update');
    Route::delete('delete/{id}', [ElasticController::class,'destroy'])->name('elasticsearch.data.delete');

    Route::get('create', [ElasticController::class,'create'])->name('elasticsearch.create.form');
    Route::post('save', [ElasticController::class,'store'])->name('elasticsearch.create.save');
    Route::get('check', [ElasticController::class,'checkExist'])->name('elasticsearch.create.check');
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
