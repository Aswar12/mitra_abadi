<?php

namespace App\Http\Controllers;

use App\Models\Item;

class EOQController extends Controller
{
    public function calculateEOQ($demand, $holding_cost, $ordering_cost)
    {
        $eoq = sqrt((2 * $demand * $ordering_cost) / $holding_cost);

        return $eoq;
    }
    public function index()
    {
        $pakedia = Item::first()->id;
        $item = Item::find($pakedia); // Ganti $item_id dengan ID item yang ingin dihitung EOQ-nya
        $demand_rate = $item->demand_rate;
        $holding_cost = $item->holding_cost;
        $ordering_cost = $item->ordering_cost;
        $eoq = $this->calculateEOQ($demand_rate, $holding_cost, $ordering_cost);

        return view('eoq.index', compact('eoq'));
    }

}