<?php
namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Procurement;
use App\Models\Sale;

class DashboardController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $procurements = Procurement::all();
        $sales = Sale::all();

        return view('dashboard.index', compact('items', 'procurements', 'sales'));
    }
}