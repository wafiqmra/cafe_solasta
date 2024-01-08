<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastries extends Model
{
    use HasFactory;
    protected $table = 'pastries';
    protected $primaryKey = 'id';
    protected $fillable = ['name_pastry', 'price'];
}
