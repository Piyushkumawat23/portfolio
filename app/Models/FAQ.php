<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $table = 'faqs'; // Ensure this matches your actual table name
    protected $fillable = ['name', 'email', 'message'];
}
