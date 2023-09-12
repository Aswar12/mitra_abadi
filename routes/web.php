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

    Route::get('/stock', [StockController::class, 'index'])->name('stock.index');
});
