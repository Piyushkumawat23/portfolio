<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'blog_categories';

     public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }
}
