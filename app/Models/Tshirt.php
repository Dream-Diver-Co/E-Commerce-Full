<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tshirt extends Model
{
    use HasFactory;

    protected $table = 'tshirts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'subtitle', 'description', 'information', 'image'];
}
