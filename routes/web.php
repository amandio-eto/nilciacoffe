<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockHistoryController;
use App\Http\Controllers\TransactionController;

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
    return view('welcome');
});


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


















