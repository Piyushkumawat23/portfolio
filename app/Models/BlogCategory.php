<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    // BlogCategory.php
public function blogs() {
    return $this->hasMany(Blog::class, 'category_id');
}
}
