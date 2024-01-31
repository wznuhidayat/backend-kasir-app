<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catergories extends Model
{
    use HasFactory;
    protected $table = 'catergories';
    protected $fillable = ['code','name'];
} 
