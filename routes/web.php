<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StationaryController;
use App\Http\Controllers\compareController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleItemController;
use App\Http\Controllers\TaxController;


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
Route::view('layout','layout.index');
Route::view('chumma','stores.cumma');

Route::resource("/store", StoreController::class);
Route::resource("/cat", StationaryController::class);

Route::get('categories/{categoryId}/stores', [compareController::class, 'viewStores']);
Route::resource("/customer", CustomerController::class);
Route::resource("/group", GroupController::class);

Route::view('register','login.registration');
Route::post('login_store',[LoginController::class,'store']);
Route::view('home','home');
Route::view('login','login.login');
Route::post('/authenticate',[LoginController::class, 'authenticate']);
Route::get('logout',[LoginController::class, 'logout']);

Route::resource('/sale', SaleController::class);
Route::get('/addcart/{id}', [SaleController::class, 'addcart']);
Route::post('/addcart/{id}/show2', [SaleController::class, 'show2']);
Route::get('/addcart/invoice/{id}', [SaleController::class, 'viewInvoice']);
Route::get('/addcart/invoice/{id}/generate', [SaleController::class, 'generateInvoice']);
Route::resource('/saleItem', SaleItemController::class);
Route::resource('/tax', TaxController::class);

//  Route::resource("/cat", StationaryController::class);
// Route::get("/storesByCategory",[compareController::class,'storesByCategory']);
// Route::get("/product", 'StationarytController@productView');
// Route::get('/product/{$id}/index1', [StoreController::class, 'index1']);

// Route::resource("/student", StudentController::class);
// Route::get('/',[StoreController::class,'home']);
// Route::get('addpage',[StoreController::class,"addpage"]);
// Route::post('addsubmit',[StoreController::class,'addsubmit']);