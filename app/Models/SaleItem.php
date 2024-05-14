<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleItem extends Model
{
    use HasFactory;
    protected $table = 'sale_items';
    protected $primaryKey = 'id';
    protected $fillable = ['sale_id', 'item_id', 'quantity','unit_price','total_price'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($saleItem) {
            // Calculate the total_price before saving
            $totalPrice = $saleItem->quantity * $saleItem->unit_price;
            $saleItem->total_price = $totalPrice;
        });
    }
}
