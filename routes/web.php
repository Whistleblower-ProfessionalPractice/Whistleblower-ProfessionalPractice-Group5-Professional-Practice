<?php

use App\Models\Department;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $departments = Department::get();
    return view('welcome',compact('departments'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'complains'])->name('complains');
Route::post('/addComplain', [App\Http\Controllers\GuestController::class, 'addComplain'])->name('addComplain');
Route::post('/searchComplain', [App\Http\Controllers\HomeController::class, 'searchComplain'])->name('searchComplain');
