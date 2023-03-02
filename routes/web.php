<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
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



// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/', 'HomeController@index');
// Route::get('/tin-tuc', 'HomeController@getNews');

// Route::prefix('admin')->group(function () {
//     Route::get('home/{id?}/{slug?}', function ($id=null,$slug=null) {
//         $content ='Phuong thuc get path/home tham so:';
//         $content.= ' slug='.$slug.'<br/>'; 
//         $content.= ' id='.$id; 
//         return $content;
//     })->name('admin.tintuc');
//     Route::get('show-form', function () {
//         return view('show-form');
//     })->name('admin.show-form');
// Route::prefix('products')->middleware('checkpermission')->group(function () {
//     Route::get('/', function () {
//         return 'Danh sach san pham';
//     })->name('admin.products');
//     Route::get('add', function () {
//         return 'them moi san pham';
//     })->name('admin.products.add');
//     Route::get('edit', function () {
//         return 'chinh sua san pham';
//     })->name('admin.products.edit');


// });


// });

