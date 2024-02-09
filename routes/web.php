<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UnitController;
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
    return view('backend.auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/dashboard/create', [AdminController::class,'create'])->name('users.create');
Route::get('dashboard/users',[AdminController::class,'users'])->name('users.index');
Route::get('dashboard/createcategory',[AdminController::class,'createcategory'])->name('categories.create');
Route::get('dashboard/categories',[AdminController::class,'categories'])->name('categories.index');
Route::get('dashboard/createproduct',[AdminController::class,'createproduct'])->name('products.create');
Route::get('dashboard/products',[AdminController::class,'products'])->name('products.index');
Route::get('dashboard/createsupplier',[AdminController::class,'createsupplier'])->name('suppliers.create');
Route::get('dashboard/suppliers',[AdminController::class,'suppliers'])->name('suppliers.index');
Route::get('dashboard/createcustomer',[AdminController::class,'createcustomer'])->name('customers.create');
Route::get('dashboard/customers',[AdminController::class,'customers'])->name('customers.index');
Route::get('dashboard/createunit',[AdminController::class,'createunit'])->name('units.create');
Route::get('dashboard/units',[AdminController::class,'units'])->name('units.index');



//UserController
Route::post('/dashboard/store', [UserController::class, 'store'])->name('users.store');
Route::get('/dashboard/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::post('/dashboard/update', [UserController::class, 'update'])->name('users.update');
Route::get('/dashboard/delete/{id}', [UserController::class, 'destroy'])->name('users.delete');
Route::get('/dashboard/show/{id} ', [UserController::class, 'show'])->name('users.show');


//Categorycontroller
Route::post('/dashboard/storecategory', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/dashboard/editcategory/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('/dashboard/updatecategory/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('/dashboard/deletecategory/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');


//Customercontroller
Route::post('/dashboard/storecustomer', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/dashboard/editcustomer/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/dashboard/updatecustomer/{id}', [CustomerController::class, 'update'])->name('customers.update');
Route::get('/dashboard/deletecustomer/{id}', [CustomerController::class, 'destroy'])->name('customers.delete');


//Productcontroller
Route::post('/dashboard/storeproduct', [ProductController::class, 'store'])->name('products.store');
Route::get('/dashboard/editproduct/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/dashboard/updateproduct/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/dashboard/deleteproduct/{id}', [ProductController::class, 'destroy'])->name('products.delete');


//Suppliercontroller
Route::post('/dashboard/storesupplier', [SupplierController::class, 'store'])->name('suppliers.store');
Route::get('/dashboard/editsupplier/{id}', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::post('/dashboard/updatesupplier/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
Route::get('/dashboard/deletesupplier/{id}', [SupplierController::class, 'destroy'])->name('suppliers.delete');


//Unitcontroller
Route::post('/dashboard/storeunit', [UnitController::class, 'store'])->name('units.store');
Route::get('/dashboard/editunit/{id}', [UnitController::class, 'edit'])->name('units.edit');
Route::post('/dashboard/updateunit/{id}', [UnitController::class, 'update'])->name('units.update');
Route::get('/dashboard/deleteunit/{id}', [UnitController::class, 'destroy'])->name('units.delete');

