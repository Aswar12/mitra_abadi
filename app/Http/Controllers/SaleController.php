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
        Sale::create($data);

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect()->route('sales.index')
            ->with('success', 'Pengadaan berhasil ditambahkan');

        // Proses menyimpan pengadaan baru
    }
}

