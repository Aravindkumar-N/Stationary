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

    public function store()
    {
        return $this->belongsTo(Store::class, 'item_id');
    }


    // public function calculateTotalPrice()
    // {
    //     $store = $this->store;
    //     if ($store && $store->taxDetail) {
    //         $taxPercentage = $store->taxDetail->tax_percentage;
    //         $totalPrice = $this->quantity * $this->unit_price;
    //         $taxAmount = ($totalPrice * $taxPercentage) / 100;
    //         $this->total_price = $totalPrice + $taxAmount;
    //     } else {
    //         $this->total_price = $this->quantity * $this->unit_price;
    //     }
    // }


     protected static function boot()
     {
        parent::boot();

           static::saving(function ($saleItem) {
             // Calculate the total_price before saving
              $totalPrice = $saleItem->quantity * $saleItem->unit_price;
              $saleItem->total_price = $totalPrice;

    //         $stores= $saleItem->stores; // Assuming a relationship between SaleItem and Item, and Item and Product
    //         // $store = $product->store; // Assuming a relationship between Product and Store
        
    //         // Fetch the associated tax rate from the tax_details table
    //         $tax_percentage = $stores->TaxDetail->tax_percentage; // Assuming a relationship between Store and TaxDetail, and TaxDetail and TaxDetails
        
    //         // Calculate the subtotal
    //         $subtotal = $saleItem->quantity * $saleItem->unit_price;
        
    //         // Calculate the total price with tax
    //         $totalPriceWithTax = ($subtotal *$tax_percentage) / 100;
        
    //         // $saleItem->total_price = $totalPriceWithTax;
       });
        
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class,'sale_it');
        // return view('stores.index', compact('stores'));
    }
}
