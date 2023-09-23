<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::group(['middleware' => 'invoiceCheck'],function(){
    Route::get('view-from',[InvoiceController::class,'index'])->name('invoice.view');
    Route::get('add-invoie',[InvoiceController::class,'create'])->name('invoice.create');
    Route::post('store-new',[InvoiceController::class,'store'])->name('invoice.store');
    Route::get('edit-user/{id}',[InvoiceController::class,'edit'])->name('invoice.edit');
    Route::post('update-user/{id}',[InvoiceController::class,'update'])->name('invoice.update');
    Route::get('invoice-delete/{id}',[InvoiceController::class,'destroy'])->name('invoice.delete');
    Route::get('invoice-MailSend/{id}',[InvoiceController::class,'sendmail'])->name('invoice.sendmail');
});



