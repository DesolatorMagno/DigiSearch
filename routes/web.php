<?php

use App\Http\Controllers\DigimonSimpleSearchController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/digimon-simple', DigimonSimpleSearchController::class)->name('search.simple');
Route::get('/digisearch', DigimonSimpleSearchController::class)->name('search');
