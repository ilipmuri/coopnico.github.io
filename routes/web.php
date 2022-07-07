<?php

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [App\Http\Controllers\AboutUsController::class, 'index'])->name('aboutus');
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/loans', [App\Http\Controllers\LoansController::class, 'index'])->name('loans');
Route::get('/savings', [App\Http\Controllers\SavingsController::class, 'index'])->name('savings');
Route::get('/agriproducttrading', [App\Http\Controllers\AgriProductsController::class, 'index'])->name('agriproducttrading');
Route::get('/socialservice', [App\Http\Controllers\SocialServicesController::class, 'index'])->name('socialservice');
Route::get('/coopassurancecenter', [App\Http\Controllers\CoopAssuranceCenterController::class, 'index'])->name('coopassurancecenter');
Route::get('/downloadableforms', [App\Http\Controllers\DownloadableFormsController::class, 'index'])->name('downloadableforms');
Route::get('/newsandupdates', [App\Http\Controllers\NewsAndUpdatesController::class, 'index'])->name('newsandupdates');
Route::get('/contactus', [App\Http\Controllers\ContactUsController::class, 'index'])->name('contactus');
