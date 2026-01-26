<?php

namespace App\Services;

use App\Models\Blog_post;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class BlogService
{
    public function store(array $data): Blog_post
    {
        try {
            if (
                isset($data['preview_image']) &&
                $data['preview_image'] instanceof \Illuminate\Http\UploadedFile &&
                $data['preview_image']->isValid()
            ) {
                $data['preview_image'] = $data['preview_image']
                    ->store('blog');
            }

            return Blog_post::create($data);
        } catch (Throwable $e) {
            Log::error('Error creating blog post', [
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function update(Blog_post $blogPost, array $data): Blog_post
    {
        try {
            if (
                isset($data['preview_image']) &&
                $data['preview_image'] instanceof \Illuminate\Http\UploadedFile &&
                $data['preview_image']->isValid()
            ) {
                if ($blogPost->preview_image) {
                    Storage::delete($blogPost->preview_image);
                }

                $data['preview_image'] = $data['preview_image']
                    ->store('blog');
            }

            $blogPost->update($data);

            return $blogPost;
        } catch (Throwable $e) {
            Log::error('Error updating blog post', [
                'blog_post_id' => $blogPost->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function delete(Blog_post $blogPost): void
    {
        try {
            if ($blogPost->preview_image) {
                Storage::delete($blogPost->preview_image);
            }

            $blogPost->delete();
        } catch (Throwable $e) {
            Log::error('Error deleting blog post', [
                'blog_post_id' => $blogPost->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function findOrFail(int $id): Blog_post
    {
        return Blog_post::findOrFail($id);
    }
}
