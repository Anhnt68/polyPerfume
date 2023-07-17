<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CapacityController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

// Route::get('/admin', function () {
//     return view('layouts.admin');
// });
// Route::get('/admin/add', function () {
//     return view('layouts.admin.categories.add');
// });
// Route::get('/admin/index', function () {
//     return view('layouts.admin.categories.index');
// });


Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    //Sản phẩm
    Route::prefix('category')->name('category.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('home');
        Route::get('/add', [CategoryController::class, 'create'])->name('add');
        Route::post('/add', [CategoryController::class, 'store'])->name('post-add');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CategoryController::class, 'update'])->name('post-edit');
        Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('delete');
    });
    Route::prefix('capacity')->name('capacity.')->group(function () {
        Route::get('/', [CapacityController::class, 'index'])->name('home');
        Route::get('/add', [CapacityController::class, 'create'])->name('add');
        Route::post('/add', [CapacityController::class, 'store'])->name('post-add');
        Route::get('/edit/{id}', [CapacityController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [CapacityController::class, 'update'])->name('post-edit');
        Route::delete('/delete/{id}', [CapacityController::class, 'destroy'])->name('delete');
    });
    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('home');
        Route::get('/add', [UserController::class, 'create'])->name('add');
        Route::post('/add', [UserController::class, 'store'])->name('post-add');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [UserController::class, 'update'])->name('post-edit');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    });
});

// Route::resource('Category', CategoryController::class);
