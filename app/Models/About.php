<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $primaryKey = 'id';
    protected $fillable = ['description', 'behind', 'title', 'subtitle', 'image','service', 'mission'];
}
