<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Models\User;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    $admins = User::all()->where('role_id', 1);
    return view('dashboard', compact('admins'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified']);

Route::delete('/user/delete/{id}', [UserController::class, 'destroy']);
Route::get('/user/show/{id}', [UserController::class, 'show']);
Route::get('/all/user', [UserController::class, 'user']);
Route::put('/user/update/{id}', [UserController::class, 'update']);


Route::resource('role', RoleController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
