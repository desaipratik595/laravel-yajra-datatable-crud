<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'index'])->name('users.index');

// Route for displaying the edit form
Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

// Route for updating user data
Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

// Route for deleting a user
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

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
    return view('welcome');
});
