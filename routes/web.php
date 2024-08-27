<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseworkController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/crud/items', [CourseworkController::class, 'list']);

Route::get('/crud/create', [CourseworkController::class, 'create']); 

Route::post('/crud/items', [CourseworkController::class, 'store']); 

Route::post('uploads', [CourseworkController::class, 'uploads']);

Route::delete('/crud/delete/{record}', [CourseworkController::class, 'destroy']);

Route::get('/crud/{record}/edit', [CourseworkController::class, 'edit']);

/* Route::get('/crud/{record}/{originalName?}', [CourseworkController::class, 'show']); */

Route::put('/crud/{record}', [CourseworkController::class, 'update']); 

Route::get('/crud/{record}/{slug}', [CourseworkController::class, 'singleRecord']);


