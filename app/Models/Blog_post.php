<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Blog_post extends Model
{
    protected $fillable = [
       'title',
       'slug',
       'preview_image',
       'status',
       'visibility',
       'excerpt',
       'content',
       'published_at', 
    ];

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }

    public function scopePublicPublished($query)
    {
        return $query
            ->where('status', 'published')
            ->where('visibility', 'public');
    }
}
