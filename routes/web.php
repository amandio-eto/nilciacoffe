<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockHistoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::redirect('/','login',301);
#AuthController
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('dologin');

Route::group(['middleware'=> 'auth'], function(){

        Route::get('user',[UserController::class,'index'])->name('users.index');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('users.index');
        Route::post('/', [UserController::class, 'store'])->name('users.store');
        Route::put('/{user}', [UserController::class, 'update'])->name('users.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('users.destroy');

});


#Controller Profile
    Route::post('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.photo');
    Route::post('/profile/password', [ProfileController::class, 'changePassword'])->name('profile.password');
#End ProfilleController


#ControllerBrand
    Route::get('/brand/company', [BrandController::class, 'index'])->name('brand.index');
    Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
    Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
#EndBrandController




#EndAuthController
        Route::get('dashboard',[\App\Http\Controllers\DashboardController::class,'index'])->name('dashboard.index');
#SupplierController
    Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers.index');
    Route::post('/suppliers/store', [SupplierController::class, 'store'])->name('suppliers.store');
    Route::post('/suppliers/update/{id}', [SupplierController::class, 'update'])->name('suppliers.update');
    Route::get('/suppliers/delete/{id}', [SupplierController::class, 'destroy'])->name('suppliers.delete');
#End SuppliersController

#Categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::post('/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy'])->name('categories.delete');
#EndCategories

#ProductController
    Route::get('/products', [ProductController::class,'index'])->name('product.index');
    Route::post('/products/store', [ProductController::class,'store'])->name('product.store');
    Route::post('/products/update/{id}', [ProductController::class,'update'])->name('product.update');
    Route::get('/products/delete/{id}', [ProductController::class,'destroy'])->name('product.destroy');
#EndControlller

#ControllerStock
    Route::get('/stock', [StockHistoryController::class,'index'])->name('stock.index');
    Route::post('/stock/store', [StockHistoryController::class,'store'])->name('stock.store');
    Route::post('/stock/update/{id}', [StockHistoryController::class,'update'])->name('stock.update');
    Route::get('/stock/delete/{id}', [StockHistoryController::class,'destroy'])->name('stock.destroy');
#EndStockController

#Controller Transaction 

    Route::get('/transaction/pos', [TransactionController::class,'create'])->name('transaction.pos'); // POS page
    Route::post('/transaction/store', [TransactionController::class,'store'])->name('transaction.store'); // Checkout direct order
    Route::get('/transaction/print/{id}', [TransactionController::class,'print'])->name('transaction.print'); // Print 58mm receipt
    Route::get('/transactions', [TransactionController::class,'index'])->name('transactions.index'); // List all transactions
    Route::get('/transactions/{id}', [TransactionController::class,'show'])->name('transactions.show'); // Transaction detail
    Route::get('/transactions/report', [TransactionController::class, 'report'])->name('transactions.report');
    Route::get('/transactions/report/pdf', [TransactionController::class, 'reportPdf'])->name('transactions.report.pdf');
#EndContrller Transaction




});






    
#


















