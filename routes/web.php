<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PerformanceViewController;
use App\Http\Controllers\VenueViewController;
use App\Http\Controllers\TicketViewController;

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

Route::get('/', [IndexController::class, 'index']);
Route::get('/performance_view',[PerformanceViewController::class,'performance']);
Route::get('/venues_view',[VenueViewController::class,'venues']);
Route::get('/tickets_view',[TicketViewController::class,'tickets']);


//Route::get('/performance', [PerformanceViewController::class,'search'])->name('performance.search');

