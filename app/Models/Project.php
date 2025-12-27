<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Project extends Model
{
    protected $fillable = [
        'name',
        'client_name',
        'preview_image',
        'development_time',
        'role',
        'platform',
        'short_description',
        'full_description',
        'problem_solved',
        'content',
        'demo_url',
        'repository_url',
        'status',
    ];

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

}
