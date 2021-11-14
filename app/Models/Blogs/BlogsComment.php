<?php

namespace App\Models\Blogs;

use App\Models\BaseModel;

class BlogsComment extends BaseModel {

    protected $table = 'blogscomments';
    protected $fillable = [
        "blog_id",
        "name",
        "comment",
        "created_at"
    ];

}
