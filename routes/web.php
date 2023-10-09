<?php

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

Auth::routes();

//routes to products
//products crud operations

use App\Http\Controllers\productController;

Route::get('/',[productController::class, 'allProducts'] );

//all products
Route::get('/iti/products',[productController::class, 'allProducts'] )->name('products.show');

//create new product
Route::get('/iti/create',[productController::class, 'create'] )->name('product.create');

//store new product
Route::post('/iti/products',[productController::class, 'store'] )->name('product.store');


//show details
Route::get('/iti/products/{id}',[productController::class, 'showDetails'] )->name('product.showDetails');

//delete product
Route::get('/iti/delete/{id}',[productController::class, 'destroy'] )->name('product.destroy');


//update
Route::get('/iti/update/{id}',[productController::class, 'update'] )->name('product.update');

//save update
Route::post('/iti/update/{id}',[productController::class, 'saveUpdate'] )->name('product.saveUpdate');

Route::get('/iti/contact',[productController::class, 'contactUs'] );

// //about
Route::get('/iti/about',[productController::class, 'aboutUs'] );

/**********************/

//category crud operation lab 3
use App\Http\Controllers\categoryController;

Route::get('iti/categories' , [categoryController::class , 'index'])->name('category.index');

//create
Route::get('iti/categories/create' , [categoryController::class , 'create'])->name('category.create');

//store
Route::post('iti/categories/store' , [categoryController::class , 'store'])->name('category.store');

//edit
Route::get('iti/categories/edit/{id}' , [categoryController::class , 'edit'])->name('category.edit');

//delete
Route::get('iti/categories/delete/{id}' , [categoryController::class , 'destroy'])->withTrashed()->name('category.destroy');

//show
Route::get('iti/categories/show/{id}' , [categoryController::class , 'show'])->name('category.show');

//update
Route::post('iti/categories/update/{id}' , [categoryController::class , 'update'])->name('category.update');


// Route::resource('categories', categoryController::class);
// Route::get('iti/categories' ,[categoryController::class , 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/iti/categories/archive', [categoryController::class, 'archive'])->name('archive');
