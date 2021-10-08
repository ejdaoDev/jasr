<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class ProductImages extends BaseModel {

    protected $table = 'products_images';
    protected $fillable = [
        "product_id",
        "route",
    ];

}
