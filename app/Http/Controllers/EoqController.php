<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Procurement;

class EOQController extends Controller
{
    public function calculateEOQ($item_id)
    {
        $item = Item::find($item_id);

        if ($item) {
            $demand_rate = $item->demand_rate;
            $holding_cost = $item->holding_cost;
            $ordering_cost = $item->ordering_cost;

            $eoq = sqrt((2 * $demand_rate * $ordering_cost) / $holding_cost);

            return $eoq;
        } else {
            return "Item dengan ID $item_id tidak ditemukan.";
        }
    }

    public function calculateROP($procurement_id)
    {
        $procurement = Procurement::find($procurement_id);

        if ($procurement && $procurement->item) {
            $demand_rate = $procurement->item->demand_rate;
            $leadtime = $procurement->leadtime;

            $rop = $demand_rate * $leadtime;

            return $rop;
        } else {
            return "Procurement dengan ID $procurement_id tidak ditemukan atau tidak terkait dengan item.";
        }
    }



    public function index()
    {
        $items = Item::all();
        $procurements = Procurement::all();
        $ropResults = [];
        $eoqResults = [];

        foreach ($items as $item) {
            $eoq = $this->calculateEOQ($item->id);
            $eoqResults[$item->name] = $eoq;
        }

        foreach ($procurements as $procurement) {
            if ($procurement->item) {
                $demand_rate = $procurement->item->demand_rate;
                $leadtime = $procurement->leadtime;

                $rop = $demand_rate * $leadtime;
                $ropResults[$procurement->id] = $rop;
            } else {
                $ropResults[$procurement->id] = "Item tidak ditemukan.";
            }
        }

        return view('eoq.index', compact('items', 'procurements', 'ropResults', 'eoqResults'));
    }
}
