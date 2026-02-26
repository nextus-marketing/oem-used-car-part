<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\EditorImageController;
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

Route::view('/', 'Frontend.home')->name('home');
Route::view('/about', 'Frontend.about')->name('about');
Route::view('/engine', 'Frontend.engine')->name('engine');
Route::view('/transmission', 'Frontend.transmission')->name('transmission');
Route::view('/contact', 'Frontend.contact')->name('contact');
Route::view('/thankyou', 'Frontend.thankyou')->name('thankyou');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-conditions', 'Frontend.terms-and-conditions')->name('terms-and-conditions');

Route::post('/editor/image-upload', [EditorImageController::class, 'upload'])
    ->name('editor.image.upload');

Route::view('/car-engine', 'Frontend.car-engine')->name('car-engine');

Route::view('/car-transmission', 'Frontend.car-transmission')->name('car-transmission');

Route::view('/car-terms-and-conditions', 'Frontend.car-terms-and-conditions')->name('car-transmission');

Route::view('/car-privacy-policy', 'Frontend.car-privacy-policy')->name('car-privacy-policy');

Route::view('/car-shipping-policy', 'Frontend.car-shipping-policy')->name('car-shipping-policy');

Route::view('/car-return-policy', 'Frontend.car-return-policy')->name('car-return-policy');

Route::view('/shipping-policy', 'Frontend.shipping-policy')->name('shipping-policy');

Route::view('/return-policy', 'Frontend.return-policy')->name('return-policy');

Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});


require __DIR__ . '/auth.php';
require __DIR__ . '/backend.php';
require __DIR__ . '/frontend.php';
