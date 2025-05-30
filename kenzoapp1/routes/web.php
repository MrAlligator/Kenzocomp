<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     // return view('welcome');
//     return view('dashboard.dashboard');
// });

// Route::get('/', function () {
//     return view('layouts.layout')->with('content', view('dashboard.dashboard'));
// })->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->name('dashboard');

// Route::get('/about', function () {
//     return view('dashboard.about');
// })->name('about');

Route::get('/', [DashController::class, 'index'])->name('home');
Route::get('/dashboard', [DashController::class, 'index'])->name('dashboard');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/pricing', [PriceController::class, 'index'])->name('pricing');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/set-language', function (\Illuminate\Http\Request $request) {
    session(['lang' => $request->lang]);
    return response()->json(['status' => 'ok']);
})->name('set.language');
