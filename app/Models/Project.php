<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'tagline',
        'description',
        'category',
        'category_slug',
        'image',
        'gallery',
        'tags',
        'metrics',
        'demo_url',
        'github_url',
        'featured',
        'order',
    ];

    protected $casts = [
        'gallery' => 'array',
        'tags' => 'array',
        'metrics' => 'array',
        'featured' => 'boolean',
    ];
}
