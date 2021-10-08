<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class ProductFeatures extends BaseModel {

    protected $table = 'products_features';
    protected $fillable = [
        "product_id",
        "feature",
    ];

}
