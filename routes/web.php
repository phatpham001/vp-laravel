<?php
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MenuController;
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
    return view('home');    
})->name('home');

//Client route

Route::prefix('categories')->group(function () {
    //lay tat ca danh muc
    Route::get('/', [CategoryController::class,'index'])->name('category.list');
    //lay thong tin cua 1 danh muc
    Route::get('/edit/{id}', [CategoryController::class,'getCategory'])->name('category.edit');
    Route::post('/edit/{id}', [CategoryController::class,'updateCategory']);
    Route::get('add', [CategoryController::class,'addCategory'])->name('category.add');
    Route::post('add', [CategoryController::class,'handleAddCategory']);
    //xoa
    Route::delete('delete/{id}', [CategoryController::class,'deleteCategory'])->name('category.delete');
});

//Admin route
Route::middleware('auth.admin')->prefix('admin')->group(function () {
    Route::get('/',[DashboardController::class,'index'])->name('auth.admin.dashboard');
    Route::resource('products', 'Admin\ProductsController')->middleware('auth.admin.product');
    Route::prefix('menu')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('auth.menu.index');
    });
});

