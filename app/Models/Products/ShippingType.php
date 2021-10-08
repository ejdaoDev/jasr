<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class ShippingType extends BaseModel {

    protected $table = 'shippingtypes';
    protected $fillable = [
        "name",
    ];
}
