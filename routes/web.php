<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
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

Route::get('/',[HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');
Route::get('/feature', [FeatureController::class, 'index'])->name('feature.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/testimonial', [ServiceController::class, 'index'])->name('testimonial.index');
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/error', [ErrorController::class, 'index'])->name('error.index');