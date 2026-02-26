<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;


Route::post('/contact-enquiry', [HomeController::class, 'contactEnquiry'])->name('contact-enquiry');

Route::post('/auto-enquiry', [HomeController::class, 'autoEnquiry'])->name('auto-enquiry');

Route::post('/model-enquiry', [HomeController::class, 'modelEnquiry'])->name('model-enquiry');

Route::get('/blogs', [HomeController::class, 'index'])->name('blogs');

Route::get('/blogs/{slug}', [HomeController::class, 'blog_details'])->name('blogs.details');


Route::post('/lead-enquiry', [HomeController::class, 'leadEnquiry'])->name('lead-enquiry');