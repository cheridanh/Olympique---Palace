<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/services', [PropertyController::class, 'index'])->name('property.index');
Route::get('/services/{slug}-{property}', [PropertyController::class, 'show'])->name('property.show')->where([
    'property' => '[0-9]+',
    'slug' => '[0-9a-zA-Z\-]+',
]);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('properties', App\Http\Controllers\Admin\PropertyController::class)->except(['show']);
    Route::resource('options', App\Http\Controllers\Admin\OptionController::class)->except(['show']);
});
