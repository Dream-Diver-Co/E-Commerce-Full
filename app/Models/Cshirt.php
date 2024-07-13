<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cshirt extends Model
{
    use HasFactory;

    protected $table = 'cshirts';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'subtitle', 'description', 'information', 'image'];
}
