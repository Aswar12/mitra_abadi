<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Stock;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stocks = Stock::paginate(10);
        return view('stock.index', compact('stocks'));
    }

    public function create()
    {

        $items = Item::all();
        return view('stock.create', compact('items'));
        // Menampilkan form pembuatan pengadaan
    }

    public function store(Request $request)
    {
        // $items = Item::find($request->input('id'));

        // Validasi input
        $request->validate([
            'item_id' => 'required',
            'quantity' => 'required'
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);
        $data = $request->all();
        // Simpan pengadaan baru
        Stock::create(
            [
                'item_id' => $request->item_id,
                'quantity' => $request->quantity,

            ]
        );

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect()->route('stock.index')
            ->with('success', 'Pengadaan berhasil ditambahkan');
        // Proses menyimpan pengadaan baru
    }

    public function show($id)
    {
        $stock = Stock::findOrFail($id);
        return view('stock.show', compact('stock'));
    }

    public function edit(Stock $stock)
    {
        $items = Item::all();
        return view('stock.edit', compact('stock', 'items'));
    }

    public function update(Request $request, Stock $stock)
    {

        $data = $request->all();
        $stock->update($data);
        return redirect()->route('stock.index');
    }
    public function destroy(Stock $stock)
    {
        $stock->delete();
        return redirect('/stock')->with('success', 'Stock berhasil dihapus');
    }
    
}