<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'quantity',
        'unit_price',
        'total_price',
        'date',
    ];


    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}