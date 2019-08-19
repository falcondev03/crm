<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "code_product",
        "name",
        "description",
        "provider",
        "quantity",
        "price",
        "expiration"
    ];
}
