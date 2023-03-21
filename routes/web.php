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
Route::get('product/index', [ProductController::class, 'index'])->name('product.index');

//Category Controller
Route::prefix('category')->group(function (){
    Route::get('index', [CategoryController::class, 'index'])->name('category.index');
    Route::get('create',[CategoryController::class, 'create'])->name('category.create');


});
Route::post('category/store',[CategoryController::class, 'store'])->name('category.store');



