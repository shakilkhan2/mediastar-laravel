<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarController;
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

Route::get('/', [StarController::class, 'Home']);
Route::get('/business', [StarController::class, 'Business']);
Route::get('/csr', [StarController::class, 'CSR']);
Route::get('/career', [StarController::class, 'Career']);
Route::get('/contact', [StarController::class, 'Contact']);
Route::get('/about', [StarController::class, 'About']);
Route::get('/achievements', [StarController::class, 'Achievements']);
Route::get('/management', [StarController::class, 'Management']);
Route::get('/job-details', [StarController::class, 'JobDetails']);
