<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Item;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::paginate(10);
        return view('sale.index', compact('sales'));
    }
    public function create()
    {

        $items = Item::all();
        return view('sale.create', compact('items'));
        // Menampilkan form pembuatan pengadaan
    }

    public function store(Request $request)
    {
        // $items = Item::find($request->input('id'));

        // Validasi input
        $request->validate([
            'item_id' => 'required',
            'quantity_sold' => 'required',
            'selling_price' => 'required',
            'sale_date' => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);
        $data = $request->all();
        // Simpan pengadaan baru
        Sale::create(
              [
                'item_id' => $request->item_id,
                'quantity_sold' => $request->quantity_sold,
                'selling_price' => $request->selling_price,
                'sale_date' => $request->sale_date,

            ]
        );

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect()->route('sale.index')
            ->with('success', 'Pengadaan berhasil ditambahkan');
        // Proses menyimpan pengadaan baru
    }

    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        return view('sale.show', compact('sale'));
    }

    public function edit(Sale $sale)
    {
        $items = Item::all();
        return view('sale.edit', compact('sale', 'items'));
    }

    public function update(Request $request, Sale $sale)
    {

        $data = $request->all();
        $sale->update($data);
        return redirect()->route('sale.index');
    }
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect('/sale')->with('success', 'Sale berhasil dihapus');
    }
    

}
