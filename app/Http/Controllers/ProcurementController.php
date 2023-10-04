<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\Procurement;

class ProcurementController extends Controller
{
    public function index()
    {
        $procurements = Procurement::paginate(10);
        return view('procurements.index', compact('procurements'));
    }

    public function create()
    {

        $items = Item::all();
        return view('procurements.create', compact('items'));
        // Menampilkan form pembuatan pengadaan
    }

    public function store(Request $request)
    {
        // $items = Item::find($request->input('id'));

        // Validasi input
        $request->validate([
            'item_id' => 'required',
            'order_quantity' => 'required',
            'total_cost' => 'required',
            'procurement_date' => 'required',
            'leadtime' => 'required',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);
        $data = $request->all();
        // Simpan pengadaan baru
        Procurement::create(
            [
                'item_id' => $request->item_id,
                'order_quantity' => $request->order_quantity,
                'total_cost' => $request->total_cost,
                'procurement_date' => $request->procurement_date,
                'leadtime' => $request->leadtime,
            ]
        );

        // Redirect ke halaman yang sesuai setelah penyimpanan berhasil
        return redirect()->route('procurements.index')
            ->with('success', 'Pengadaan berhasil ditambahkan');

        // Proses menyimpan pengadaan baru
    }

    public function show($id)
    {
        $procurement = Procurement::findOrFail($id);
        return view('procurements.show', compact('procurement'));
    }

    public function edit(Procurement $procurement)
    {
        $items = Item::all();
        return view('procurements.edit', compact('procurement', 'items'));
    }

    public function update(Request $request, Procurement $procurement)
    {

        $data = $request->all();
        $procurement->update($data);
        return redirect()->route('procurements.index');
    }

    // Dan lain-lain
}