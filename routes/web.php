<?php

use App\Http\Controllers\EntryController;
use App\Http\Controllers\RecruitmentController;
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

Route::get('/', [RecruitmentController::class, 'index'])
    ->name('root');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::get('recruitments/dashboard', [RecruitmentController::class, 'dashboard'])
    ->middleware('auth')
    ->name('recruitments.dashboard');

Route::resource('recruitments', RecruitmentController::class)
    ->middleware('auth');

Route::resource('recruitments.entries', EntryController::class)
    ->only(['store', 'destroy'])
    ->middleware('auth');

Route::get('entries/dashboard', [EntryController::class, 'dashboard'])
    ->middleware('auth')
    ->name('entries.dashboard');