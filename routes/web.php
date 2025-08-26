<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackAjaxController;
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

Route::get('/contact', 'ContactController@contact');
Route::post('contact', ['as' => 'contactus', 'uses' => 'ContactController@contactPost']);

Route::get('/userrequest/{id}', 'UserRequestController@userRequest');
Route::post('/userrequest', ['as' => 'userrequest', 'uses' => 'UserRequestController@userRequestPost']);

Route::get('incoterms', 'IncoTermsAjaxController@index');
Route::post('incoterms', 'IncoTermsAjaxController@ajaxIncoTermsPost')->name('ajaxIncoTerms.post');

Route::get('/track-shipment', [TrackAjaxController::class, 'index'])->name('track.index');
Route::post('/track-shipment', [TrackAjaxController::class, 'track'])->name('track.ajax');


Route::get('/account_invoices', [InvoiceController::class, 'invoices'])->middleware('auth')->name('account.invoices');
