<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProjectController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

*/

//Route::get('/', [ProjectController::class,'getData']);

Route::get('/', [ProjectController::class,'getAllDepartments']);

Route::post('/showappointments', [ProjectController::class,'showAppointments'])->name('showappointments')->middleware('auth');

Route::post('/confirmbooking', [ProjectController::class,'confirmBooking'])->name('confirmbooking')->middleware('auth');

Route::get('/mybookings', [ProjectController::class,'myBookings'])->name('mybookings')->middleware('auth');

Route::post('/cancelbooking',[ProjectController::class,'cancelBooking'])->name('cancelbooking')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
