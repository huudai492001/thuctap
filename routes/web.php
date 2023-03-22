<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/', [BaseControler::class, 'index'])->name('index');
//DashBoard Admin
Route::get('admin/home', [AdminController::class, 'dashboard'])->name('home');

//Product Controller
Route::prefix('product')->group(function (){
    Route::get('index', [ProductController::class, 'index'])->name('product.index');
    Route::get('create', [ProductController::class, 'create'])->name('product.create');
    Route::post('store', [ProductController::class, 'store'])->name('product.store');
});


//Category Controller
Route::prefix('category')->group(function (){
    Route::get('index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('create',[CategoryController::class, 'create'])->name('category.create');
    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
});
Route::post('category/store',[CategoryController::class, 'store'])->name('category.store');
Route::post('category/update/{id}',[CategoryController::class, 'update'])->name('category.update');




