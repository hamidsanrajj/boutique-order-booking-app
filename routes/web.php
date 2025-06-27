<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\DressCollectionController;
use App\HTTP\Controllers\HomeController;
use App\HTTP\Controllers\OrderController;
use App\HTTP\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });


Route::view('/add-dress-collection','/include/views/addDressCollection/addDressCollection')->name('addDressCollection');

Route::get('/add-dress-collection', [DressCollectionController::class, 'index']);
Route::post('/add-dress-collection', [DressCollectionController::class, 'store']);

Route::get('/', [HomeController::class, 'index'])->name('home');

//detail
Route::get('/detail', [DressCollectionController::class, 'detail_index']);

//buy
Route::get('/buy', [OrderController::class, 'index']);
Route::post('/buy', [OrderController::class, 'buy']);
    
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'query']);
    
