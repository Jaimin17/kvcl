<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;


Route::get('/', [FormController::class, "view"]);
Route::get('/add', [FormController::class, 'index']);
Route::post('/add', [FormController::class, "store"]);
Route::get("/user/{id}", [FormController::class, "userDetail"]);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
