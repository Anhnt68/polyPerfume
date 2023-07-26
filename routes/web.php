<?php

use App\Http\Controllers\CapacityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
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

Route::get('/', [StockController::class, 'home']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::prefix('admin')->name('admin.')->group(function () {
    // Route::get('/', function () {
    //     return view('admin.home');
    // })->name('home');
    Route::get('/', [HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';

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
    Route::prefix('stocks')->name('stocks.')->group(function () {
        Route::get('/', [StockController::class, 'index'])->name('home');
        Route::get('/add', [StockController::class, 'create'])->name('add');
        Route::post('/add', [StockController::class, 'store'])->name('post-add');
        Route::get('/edit/{id}', [StockController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [StockController::class, 'update'])->name('post-edit');
        Route::delete('/delete/{id}', [StockController::class, 'destroy'])->name('delete');
    });
    Route::prefix('product')->name('product.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('home');
        Route::get('/add', [ProductController::class, 'create'])->name('add');
        Route::post('/add', [ProductController::class, 'store'])->name('post-add');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [ProductController::class, 'update'])->name('post-edit');
        Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
    });
});
