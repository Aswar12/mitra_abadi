<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'unit_price',
        'demand_rate',
        'ordering_cost',
        'holding_cost',
        'unit',
    ];


    public function procurements()
    {
        return $this->hasMany(Procurement::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
