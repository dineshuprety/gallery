<?php

use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('blog', [GalleryController::class, 'index'])->name('blog.index');
Route::get('blog/{id}', [GalleryController::class, 'show'])->name('blog.show');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
