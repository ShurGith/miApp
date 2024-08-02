<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
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
Route::get('show/{product}', [ProductController::class,'show'])->name('product.show');
Route::group(['prefix' => 'product', 'middleware' => ['auth']], function(){
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::post('store', [ProductController::class,'store'])->name('product.store');
    Route::get('edit/{product}', [ProductController::class,'edit'])->name('product.edit');
    Route::put('update/{product}', [ProductController::class,'update'])->name('product.update');
    Route::delete('delete/{product}', [ProductController::class,'destroy'])->name('product.delete');
});

Route::get('/product/prueba/{product}', [ProductController::class,'prueba'])->name('product.prueba');
Route::group(['prefix' => 'categoria', 'middleware' => ['auth']], function(){
    Route::get('index', [CategoriaController::class, 'index'])->name('catIndex');
    Route::put('update', [CategoriaController::class, 'update'])->name('catUpdate');
    Route::put('imagedelete', [CategoriaController::class, 'imageDelete'])->name('imageDelete');
    Route::put('imageupload', [CategoriaController::class, 'imageUpload'])->name('imageUpload');
    Route::put('imgDelSeg', [CategoriaController::class, 'imgDelSeg'])->name('imgDelSeg');
});

Route::get('/lang/{lang}', [LanguageController::class, 'switch'])->name('lang');
Route::get('/theme/{theme}', [ThemeController::class, 'switch'])->name('theme');
