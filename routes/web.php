<?php

use App\Http\Controllers\LibraryController;
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

Route::get('/', [LibraryController::class, 'index']);

Route::create('/libraries/create', [LibraryController::class, 'libraries.create']);

Route::post('/libraries', [LibraryController::class, 'libraries.store']);

Route::get('/libraries{library}', [LibraryController::class, 'libraries.show']);

Route::get('/libraries/{library}/edit', [LibraryController::class, 'libraries.edit']);

Route::patch('/libraries{library}', [LibraryController::class], 'libraries.update');

Route::delete('/libraries{library}', [LibraryController::class, 'libraries.destroy']);