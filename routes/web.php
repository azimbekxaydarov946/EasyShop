<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProductComponent;
use App\Http\Livewire\ProductDetailComponent;
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

Route::get('/',HomeComponent::class)->name('home');
Route::get('/product',ProductComponent::class)->name('product');
Route::get('/contact',ContactComponent::class)->name('contact');
Route::get('/cart',CartComponent::class)->name('cart');
Route::get('/detail',ProductDetailComponent::class)->name('detail');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
