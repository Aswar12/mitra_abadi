<?php

namespace App\Http\Controllers;

use App\Models\Item;



use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        // pengambilan data dari database menggunakan paginate
        $items = Item::paginate(10);
        return view('items.index', compact('items'));

        // return view('items.index', compact('items'));
    }
    // Menampilkan formulir tambah item
    public function create()
    {
        $items = Item::all();
        return view('items.create', compact('items'));
    }

    // Menyimpan item baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required|numeric',
            'demand_rate' => 'required|numeric',
            'ordering_cost' => 'required|numeric',
            'holding_cost' => 'required|numeric',
        ]);

        // Simpan item baru
        Item::create($request->all());



        return redirect('/items')->with('success', 'Item berhasil ditambahkan');
    }

    // Menampilkan detail item
    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    // Menampilkan formulir edit item
    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    // Mengupdate item
    public function update(Request $request, Item $item)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'unit_price' => 'required|numeric',
            'demand_rate' => 'required|numeric',
            'ordering_cost' => 'required|numeric',
            'holding_cost' => 'required|numeric',

        ]);

        // Update item
        $item->update($request->all());

        return redirect('/items')->with('success', 'Item berhasil diperbarui');
    }

    // Menghapus item
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/items')->with('success', 'Item berhasil dihapus');
    }
}
