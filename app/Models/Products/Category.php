<?php

namespace App\Models\Products;

use App\Models\BaseModel;

class Category extends BaseModel {

    protected $table = 'categories';
    protected $fillable = [
        'company_id',
        "name",
        "icon",
    ];

}
