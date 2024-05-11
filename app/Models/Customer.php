<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_name',
        'group_id',
        'mobile',
        'email',
        'gst_number',
        'billing_address',
        'shipping_address',
        'status'];


    use HasFactory;
}
