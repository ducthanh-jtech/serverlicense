<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'customer',
        'product',
        'product_id',
        'key',
        'duration',
    ];
}
