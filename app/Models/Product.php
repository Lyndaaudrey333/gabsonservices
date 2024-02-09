<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_id',
        'category_id',
        'product_name',
        'quantity',
        'status',
        'created_by',
        'updated_by',
        'unit_id',
    ];
}
