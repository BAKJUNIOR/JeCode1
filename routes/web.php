<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\productController;
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

Route::get('/', [pageController :: class , 'index']);

Route::get('/index', [pageController :: class , 'index']);

Route::get('/apropos',[pageController :: class , 'apropos']);

Route::get('/service', [pageController :: class , 'service']);

Route::get('/show/{id}', [pageController :: class , 'show']);

Route::get('/create', [productController :: class , 'create']);
Route::post('/saveproduct', [productController :: class , 'saveproduct']);

Route::delete('/deleteproduct/{id}', [productController :: class , 'deleteproduct']);

