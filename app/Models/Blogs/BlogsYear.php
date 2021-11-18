<?php

namespace App\Models\Blogs;

use App\Models\BaseModel;

class BlogsYear extends BaseModel {

    protected $table = 'blogsyears';
    protected $fillable = [
        "year"
    ];

}
