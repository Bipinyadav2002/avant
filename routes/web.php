<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IncoTermsAjaxController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackAjaxController;
use App\Http\Controllers\UserRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/home', function () {
//     return view('home');
// })->name('home');

Route::get('/oceanfreight', function () {
    return view('oceanfreight');
})->name('oceanfreight');

Route::get('/airfreight', function () {
    return view('airfreight');
})->name('airfreight');

Route::get('/hazardous', function () {
    return view('hazardous');
})->name('hazardous');

Route::get('/lineragency', function () {
    return view('lineragency');
});

Route::get('/customercenter', function () {
    return view('customercenter');
})->name('customercenter');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'contactPost'])->name('contact.post');

Route::get('/userrequest/{id}', [UserRequestController::class, 'userRequest'])->name('userrequest');
Route::post('/userrequest', [UserRequestController::class, 'userRequestPost'])->name('userrequest.post');

Route::get('incoterms', [IncoTermsAjaxController::class, 'ajaxIncoTerms'])->name('ajaxIncoTerms');
Route::post('incoterms', [IncoTermsAjaxController::class, 'getIncoTerms'])->name('getIncoTerms');

Route::get('/track-shipment', [TrackAjaxController::class, 'index'])->name('track.index');
Route::post('/track-shipment', [TrackAjaxController::class, 'track'])->name('track.ajax');


Route::get('/account_invoices', [InvoiceController::class, 'invoices'])->middleware('auth')->name('account.invoices');
