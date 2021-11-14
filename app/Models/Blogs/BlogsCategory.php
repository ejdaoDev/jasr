<?php

namespace App\Models\Blogs;

use App\Models\BaseModel;

class BlogsCategory extends BaseModel {

    protected $table = 'blogscategories';
    protected $fillable = [
        "name"
    ];

}