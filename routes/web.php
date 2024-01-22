<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchantController;

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

Route::get('/', [MerchantController::class,'index'])->name('merchants.index');
Route::prefix('merchant/')->group(function () {
    Route::get('/create', [MerchantController::class,'create'])->name('merchants.create');
    Route::get('/view/{id}', [MerchantController::class,'show'])->name('merchants.view');
    Route::post('/create', [MerchantController::class,'store'])->name('merchants.store');
    Route::get('/update/{id}',[MerchantController::class,'edit'])->name('merchants.edit');
    Route::post('/update/{id}',[MerchantController::class,'update'])->name('merchants.update');
    Route::delete('/remove/{id}',[MerchantController::class,'destroy'])->name('merchants.destroy');
});
