<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    protected $table = 'stores';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'quantity','description','CategoryId'];

    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
