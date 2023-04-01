<?php

use App\Http\Controllers\Admin\InvoiceController as AdminInvoiceController;
use App\Http\Controllers\Admin\InvoicePdfController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware' => ['auth']], function() {

    Route::group(['middleware' => ['verified']], function() {
        Route::get('/dashboard', function() {
            return view('dashboard');
        })->name('dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {

        Route::get('invoices/pdf/{invoice}', [InvoicePdfController::class, 'show'])->name('invoices.pdf.show');
        Route::get('invoices/pdf/create/{invoice}', [InvoicePdfController::class, 'create'])->name('invoices.pdf.create');

        Route::resource('invoices', AdminInvoiceController::class);
      });

});

require __DIR__.'/auth.php';
