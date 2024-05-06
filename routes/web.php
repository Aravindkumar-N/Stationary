<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StationarytController;
use App\Http\Controllers\compareController;

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



Route::resource("/store", StoreController::class);
Route::resource("/cat", StationarytController::class);
Route::get("/storesByCategory/{categoryId}",[compareController::class,'storesByCategory']);
Route::get('/stores/category/{categoryId}', 'compareController@storesByCategory')->name('compare');
// Route::resource("/student", StudentController::class);
// Route::get('/',[StoreController::class,'home']);
// Route::get('addpage',[StoreController::class,"addpage"]);
// Route::post('addsubmit',[StoreController::class,'addsubmit']);