<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'title', 
        'description',
        'client',
        'project_type',
        'strategy', 
        'image', 
        'link', 
        'overview', 
        'project_challenge', 
        'design_research', 
        'design_approach', 
        'the_solutions'
    ];

    public function images() {
        return $this->hasMany(ProjectImage::class, 'project_id');
    }
}
