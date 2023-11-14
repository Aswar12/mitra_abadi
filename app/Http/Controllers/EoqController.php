<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Procurement;
use Illuminate\Http\Request;

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

    public function safetyStock($item_id)
    {
        // Ambil informasi dari database menggunakan Eloquent
        $demandInfo = Procurement::with('item')->select('item_id', 'leadtime')
            ->get(); // Mengambil semua data (sesuaikan dengan kebutuhan)

        // Menghitung sigma dan sigma_d
        if ($demandInfo->count() > 0) {
            // Menghitung sigma
            $meanDemandRate = $demandInfo->pluck('item.demand_rate')->avg();
            $varianceDemandRate = $demandInfo->pluck('item.demand_rate')->map(function ($demandRate) use ($meanDemandRate) {
                return pow($demandRate - $meanDemandRate, 2);
            })->sum() / $demandInfo->count();
            $sigma = sqrt($varianceDemandRate);

            // Menghitung sigma_d
            $meanLeadTime = $demandInfo->pluck('leadtime')->avg();
            $varianceLeadTime = $demandInfo->pluck('leadtime')->map(function ($leadTime) use ($meanLeadTime) {
                return pow($leadTime - $meanLeadTime, 2);
            })->sum() / $demandInfo->count();
            $sigma_d = sqrt($varianceLeadTime);

            // Konstanta Z untuk tingkat kepercayaan sekitar 95%
            $Z = 1.96;

            // Waktu pemesanan dalam hari
            $L = $demandInfo->pluck('leadtime')->avg();

            // Menghitung Safety Stock
            $safetyStock = ($Z * $sigma * $L) + ($Z * $sigma_d);

            // Output hasil
            return $safetyStock;
        } else {
            return "Tidak ada data ditemukan.";
        }
    }
    // public function index()
    // {
    //     $items = Item::paginate(10);
    //     $procurements = Procurement::paginate(10); 
    //     $ropResults = [];
    //     $eoqResults = [];

    //     foreach ($items as $item) {
    //         $eoq = $this->calculateEOQ($item->id);
    //         $eoqResults[$item->name] = $eoq;
    //     }

    //     foreach ($procurements as $procurement) {
    //         if ($procurement->item) {
    //             $demand_rate = $procurement->item->demand_rate;
    //             $leadtime = $procurement->leadtime;

    //             $rop = $demand_rate * $leadtime;
    //             $ropResults[$procurement->item->name] = $rop;
    //         } else {
    //             $ropResults[$procurement->id] = "Item tidak ditemukan.";
    //         }
    //     }

    //     return view('eoq.index', compact('items', 'procurements', 'ropResults', 'eoqResults'));
    // }

    public function index(Request $request)
    {
        $keyword = $request->input('keyword');
        $safetyStock = [];
        $items = Item::where('name', 'like', "%$keyword%")->paginate(10);
        $ropResults = [];
        $eoqResults = [];

        foreach ($items as $item) {
            $eoq = $this->calculateEOQ($item->id);
            $rop = $this->calculateROP($item->id);
            $safetyStock = $this->safetyStock($item->id);
            $safetyStockResult[$item->id] = $safetyStock;
            $eoqResults[$item->name] = $eoq;
            $ropResults[$item->id] = $rop;
        }

        return view('eoq.index', compact('items', 'ropResults', 'eoqResults', 'safetyStockResult'));
    }


    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $items = Item::where('name', 'LIKE', "%$keyword%")->paginate(10);

        $ropResults = [];
        $eoqResults = [];

        // ...

        return view('eoq.index', compact('items',  'ropResults', 'eoqResults'));
    }
}
