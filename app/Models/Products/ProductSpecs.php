<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class ProductSpecs extends BaseModel {

    protected $table = 'products_specs';
    protected $fillable = [
        "product_id",
        "spec",
    ];

}
