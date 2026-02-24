<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LocaleController;

Route::get('/locale/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

Route::middleware([\App\Http\Middleware\SetLocale::class])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/finishing', [ServiceController::class, 'finishing'])->name('finishing');
    Route::get('/structure-design', [ServiceController::class, 'structure'])->name('structure');
    Route::get('/interior-design', [ServiceController::class, 'interior'])->name('interior');
    
    Route::get('/training', [TrainingController::class, 'index'])->name('training');
    Route::post('/training', [TrainingController::class, 'store'])->name('training.store');
    
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});
