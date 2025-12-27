<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphedByMany;


class Tag extends Model
{
    protected $fillable = [
        'name',
        'slug'
    ];

    public function projects()
    {
        return $this->morphedByMany(Project::class, 'taggable');
    }

    public function blogPosts()
    {
        return $this->morphedByMany(Blog_post::class, 'taggable');
    }
}
