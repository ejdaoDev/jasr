<?php

namespace App\Models\Blogs;

use App\Models\BaseModel;

class BlogsImages extends BaseModel {

    protected $table = 'blogsimages';
    protected $fillable = [
        "route",
        "created_by"
    ];

}
