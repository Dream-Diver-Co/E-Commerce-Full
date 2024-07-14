<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fshirt extends Model
{
    use HasFactory;

    protected $table = 'fshirts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'subtitle', 'description', 'information', 'image'];
}
