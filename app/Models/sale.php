<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_id',
        'quantity_sold',
        'selling_price',
        'sale_date'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}