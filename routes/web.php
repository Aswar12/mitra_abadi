<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProcurementController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StockController;
use App\Models\Procurement;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('layouts.home');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/items', [ItemController::class, 'index'])->name('items.index');
    // Menampilkan formulir tambah item
    Route::get('/items-create', [ItemController::class, 'create'])->name('items.create');

    // Menyimpan item baru
    Route::post('/items-store', [ItemController::class, 'store'])->name('items.store');

    // Menampilkan detail item
    Route::get('/items/{item}', [ItemController::class, 'show']);

    // Menampilkan formulir edit item
    Route::get('/items-edit-{item}', [ItemController::class, 'edit'])->name('items.edit');

    // Mengupdate item
    Route::put('/items-{item}', [ItemController::class, 'update'])->name('items.update');

    // Menghapus item
    Route::delete('/items/{item}', [ItemController::class, 'destroy']);

    Route::get('/procurements', [ProcurementController::class, 'index'])->name('procurements.index');
    Route::get('/procurements-create', [ProcurementController::class, 'create'])->name('procurements.create');
    Route::get('/procurements-edit-{procurement}', [ProcurementController::class, 'edit'])->name('procurements.edit');
    Route::put('/procurements-update-{procurement}', [ProcurementController::class, 'update'])->name('procurements.update');
    Route::get('/procurements/{id}', [ProcurementController::class, 'show'])->name('procurements.show');
    Route::post('/procurements-store', [ProcurementController::class, 'store'])->name('procurements.store');

    // Dan lain-lain

    Route::get('/sale', [SaleController::class, 'index'])->name('sale.index');
    Route::get('/sales-create', [SaleController::class, 'create'])->name('sales.create');
    Route::get('/sales-edit-{procurement}', [SaleController::class, 'edit'])->name('sales.edit');
    Route::put('/sales-update-{procurement}', [SaleController::class, 'update'])->name('sales.update');
    Route::get('/sales/{id}', [SaleController::class, 'show'])->name('sales.show');
    Route::post('/sales-store', [SaleController::class, 'store'])->name('procurements.store');


    Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
    Route::get('/stocks-create', [StockController::class, 'create'])->name('stocks.create');

    // Menyimpan item baru
    Route::post('/stocks-store', [StockController::class, 'store'])->name('stocks.store');

    // Menampilkan detail item
    Route::get('/stocks/{stock}', [StockController::class, 'show']);

    // Menampilkan formulir edit stock
    Route::get('/stocks-edit-{stock}', [StockController::class, 'edit'])->name('stocks.edit');

    // Mengupdate stock
    Route::put('/stocks-{stock}', [StockController::class, 'update'])->name('stocks.update');

    // Menghapus stock
    Route::delete('/stocks/{stock}', [StockController::class, 'destroy']);
});