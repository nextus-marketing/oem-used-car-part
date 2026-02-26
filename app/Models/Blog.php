<?php

namespace App\Models;

use App\Models\Category;
use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends BaseModel
{
    protected $fillable = [
        'category_id', 'title', 'photo', 'publish_date', 'author', 'description',
        'meta_keyword', 'meta_description', 'view_count', 'status', 'sub_title', 'home_featured',
        'like_count', 'dislike_count', 'total_view_counts', 'slug','meta_title',
    ];

    protected $table = 'blogs';

    protected $appends = ['photo_link', 'format_date'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function getPhotoLinkAttribute()
    {
        return $this->photo ? asset(Storage::url($this->photo)) : null;
    }

    public function getFormatDateAttribute()
    {
        return [
            'created_at' => formatDate($this->created_at, 'F d Y'),
            'publish_date' => formatDate($this->publish_date, 'F d Y')
        ];
    }
    public function blog_visitors(){
        return $this->hasMany(BlogVisitor::class);
    }
    // In App\Models\Blog.php
    public function visitors()
    {
        return $this->hasMany(BlogVisitor::class, 'blog_id');
    }

    


}
