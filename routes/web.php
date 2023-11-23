<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
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


Route::get('/', [pageController :: class , 'about']);

Route::get('/about',[pageController :: class , 'about'] );

Route::get('/apropos',[pageController :: class , 'apropos']);

Route::get('/service', [pageController :: class , 'service']);


