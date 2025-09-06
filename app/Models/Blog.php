<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'content',
        'featured_image',
        'category_id',
        'status',
        'read_time_minutes',
        'author',   // 👈 FIX: add this
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }

    public function images()
    {
        return $this->hasMany(BlogImage::class);
    }

    public function comments()
    {
        return $this->hasMany(BlogComment::class)->where('status', 'approved');
    }
}
