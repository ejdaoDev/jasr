<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class ProductDetails extends BaseModel {

    protected $table = 'products_details';
    protected $fillable = [
        "product_id",
        "details",
    ];

}
