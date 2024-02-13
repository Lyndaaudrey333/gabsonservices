<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_name',
        'supplier_phone',
        'supplier_email',
        'supplier_address',
        'status',
        'created_by',
        'updated_by'
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }
}
