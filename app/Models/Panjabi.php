<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panjabi extends Model
{
    use HasFactory;
    protected $table = 'panjabis';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'subtitle', 'description', 'information', 'image'];
}
