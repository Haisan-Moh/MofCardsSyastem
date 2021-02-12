<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WalletsController;
use App\Http\Controllers\ReceiptsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', ['address' => 'الرئيسية']);
});



Route::get('/bank', function () {
    return view('wallets/bank', ['address' => 'حافظة توريد بنكية']);
});

Route::get('/list', function () {
    return view('wallets/list');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::resource('wallets',WalletsController::class);
Route::get('/new', [WalletsController::class, 'new'])->name('wallets.new');

Route::resource('receipts',ReceiptsController::class);

Route::get('/dashboard', function () {
    return view('home', ['address' => 'الرئيسية']);
    //return view('home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';