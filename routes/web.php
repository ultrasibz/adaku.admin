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
    return view('landing');
})->name('landing');
Route::middleware(['auth'])->group(function () {
    Route::get('/home', \App\Http\Livewire\Home::class)->name('home');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', \App\Http\Livewire\User\UserIndex::class)->name('index');
        Route::get('/add', \App\Http\Livewire\User\UserAdd::class)->name('add');
    });
    
     Route::prefix('customer')->name('customer.')->group(function () {
        Route::get('/', \App\Http\Livewire\Customer\CustomerIndex::class)->name('index');
        
        Route::get('/{customer}/details', \App\Http\Livewire\Customer\CustomerShow::class)->name('show');
        
    });

    Route::prefix('loan')->name('loan.')->group(function () {
        Route::get('/', \App\Http\Livewire\Loan\LoanIndex::class)->name('index');
        Route::get('/approved', \App\Http\Livewire\Loan\LoanApproved::class)->name('approved');
        Route::get('/{loan}/details', \App\Http\Livewire\Loan\LoanShow::class)->name('show');
        Route::get('/{loan}/edit', \App\Http\Livewire\Loan\LoanEdit::class)->name('edit');
    });

});
