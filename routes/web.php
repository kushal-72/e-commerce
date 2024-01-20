<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

});
    Route::resource('roles', App\Http\Controllers\RoleController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('products',App\Http\Controllers\Admin\ProductController::class);
    Route::resource('permissions', App\Http\Controllers\PermissionController::class);


// Route::resource('user', 'UserController');

require __DIR__.'/auth.php';
