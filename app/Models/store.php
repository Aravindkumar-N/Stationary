<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class store extends Model
{
    use HasFactory;
    
    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'quantity','description','CategoryId'];

    
    public function category()
    {
        return $this->belongsTo(Category::class,'categoryId','catname');
        return view('stores.index', compact('stores'));
    }
}
