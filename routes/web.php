<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/departments', [WelcomeController::class, 'allDepartments']);
Route::get('/doctors', [DoctorController::class, 'allDoctors']);

// Route::get('/departments', function () {
//     return view('departments');
// });
// Route::get('/doctors', function () {
//     return view('doctors');
// });
Route::get('/login', function () {
    return view('login');
});
