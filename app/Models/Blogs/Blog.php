<?php

namespace App\Models\Blogs;

use Illuminate\Database\Eloquent\Model;
use App\Models\Blogs\BlogsCategory;
use App\Models\Security\User;

class Blog extends Model{

    protected $table = 'blogs';
    protected $fillable = [
        "title",
        "url",
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
        "year",
        "updated_at",
        "visits",
        "published"
    ];
    
    public function blogscategory()
    {
        return $this->hasOne(BlogsCategory::class, 'id', 'blogscategory_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function blogscomments()
    {
        return $this->hasMany(BlogsComment::class, 'blog_id', 'id' );
    }

}