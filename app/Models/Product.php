<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_id', 'name', 'image', 'price', 'old_price',
        'sub_description', 'description', 'information'
    ];

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }
}


