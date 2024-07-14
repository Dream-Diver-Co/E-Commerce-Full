<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menpent extends Model
{
    use HasFactory;

    protected $table = 'menpents'; 
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'old_price', 'subtitle', 'description', 'information', 'image'];
}
