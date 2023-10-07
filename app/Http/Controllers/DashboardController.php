<?php
namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Procurement;
use App\Models\Sale;

class DashboardController extends Controller
{
    // public function index()
    // {
    //     $items = Item::all();
    //     $procurements = Procurement::all();
    //     $sales = Sale::all();

    //     return view('dashboard.index', compact('items', 'procurements', 'sales'));
    // }
    // public function index()
    // {
    //     $items = Item::all();

    //     $itemNames = $items->pluck('name');
    //     $itemPrices = $items->pluck('unit_price');

    //     return view('dashboard.index', compact('itemNames', 'itemPrices'));
    // }
    public function index()
        {
            $items = Item::all();
            $procurements = Procurement::all();
            $sales = Sale::all();

            $itemNames = $items->pluck('name');
            $itemPrices = $items->pluck('unit_price');

            
            $procurementValues = $procurements->pluck('order_quantity'); // Ganti 'value' dengan nama kolom yang sesuai

            return view('dashboard.index', compact('itemNames', 'itemPrices', 'procurementValues'));
        }
}