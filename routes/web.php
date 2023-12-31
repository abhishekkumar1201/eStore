<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

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

/**Website Routes */
Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/shop', function () {
    return view('shop');
});

/**Admin Panel Routes */

Route::group(['prefix' => '/admin'], function () {
    Route::get('/login', function () {
        return view('admin.login');
    });
    Route::get('/forget-password', function () {
        return view('admin.forget-password');
    });
    Route::get('/', function () {
        return view('admin.dashboard');
    });
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/user-add', function () {
        return view('admin.user-add');
    });
    Route::get('/user-list', function () {
        return view('admin.user-list');
    });

    Route::group(['prefix' => '/category'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('category-list');
        Route::get('/create', [CategoryController::class, 'create'])->name('category-create');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
    });

    Route::group(['prefix' => '/sub-category'], function () {
        Route::get('/', [SubCategoryController::class, 'index'])->name('sub-category-list');
        Route::get('/create', [SubCategoryController::class, 'create'])->name('sub-category-create');
        Route::get('/edit/{id}', [SubCategoryController::class, 'edit'])->name('sub-category-edit');
    });

});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
