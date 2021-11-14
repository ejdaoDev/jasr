<?php

namespace App\Models\Blogs;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blogs\BlogsCategory;

class Blog extends Model{

    protected $table = 'blogs';
    protected $fillable = [
        "title",
        "content",
        "description",
        "image",
        "blogscategory_id",
        "user_id",
        "tag1",
        "tag2",
        "tag3",
        "tag4",
        "created_at",
        "updated_at"
    ];
    
    public function blogscategory()
    {
        return $this->hasOne(BlogsCategory::class, 'id', 'blogscategory_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function blogscomments()
    {
        return $this->hasMany(BlogsComment::class, 'blog_id', 'id' );
    }

}