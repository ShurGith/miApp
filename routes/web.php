<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/product/main', [ProductController::class, 'main'])->name('product.main');
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{product}', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/update/{product}', [ProductController::class,'update'])->name('product.update');
Route::get('/product/show/{product}', [ProductController::class,'show'])->name('product.show');
Route::delete('/product/delete/{product}', [ProductController::class,'destroy'])->name('product.delete');

Route::get('/product/prueba/{product}', [ProductController::class,'prueba'])->name('product.prueba');

Route::get('/categoria/index', [CategoriaController::class, 'index'])->name('catIndex');
Route::put('/categoria/update', [CategoriaController::class, 'update'])->name('catUpdate');
Route::put('/categoria/imagedelete', [CategoriaController::class, 'imageDelete'])->name('imageDelete');
Route::put('/categoria/imageupload', [CategoriaController::class, 'imageUpload'])->name('imageUpload');
