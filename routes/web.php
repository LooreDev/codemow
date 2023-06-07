<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DesarrolladoresController;
use App\Http\Controllers\FloresController;
use App\Http\Controllers\JardinerosController;
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

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/desarrolladores', [DesarrolladoresController::class, 'desarrolladores']);
Route::get('/jardineros', [JardinerosController::class, 'jardineros']);
Route::get('/flores', [FloresController::class, 'flores']);
