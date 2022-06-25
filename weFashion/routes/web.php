<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });  

// Route::get('/', [ClientController::class,'productAll'])->name('welcome');
// Route::get('/produit/{id}', [ClientController::class,'productId'])->name('productDetails');
// Route::get('/produits/categorie/{id}', 'getByCategory')->name('products.category')->where(['id' => '[0-9]+']);;
Auth::routes();

Route::controller(ClientController::class)->group(function(){
    Route::get('/', 'index')->name('product.list');
    Route::get('/produit/{id}', 'getByIdProduct')->name('product.show')->where(['id'=>'[0-9]+']);
    Route::get('/produits/categorie/{id}', 'getByCategoryId')->name('product.category')->where(['id'=>'[0-9]+']);
    // Route::get('/produits/soldes', 'getByState')->name('product.state');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
