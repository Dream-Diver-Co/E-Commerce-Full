<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polo extends Model
{
    use HasFactory;

    protected $table = 'polo';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price','old-price', 'subtitle', 'description', 'information', 'image'];
}
