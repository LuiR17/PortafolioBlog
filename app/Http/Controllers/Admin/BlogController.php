<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog_post;
use App\Http\Requests\Admin\StoreBlogRequest;
use App\Http\Requests\Admin\UpdateBlogRequest;
use App\Services\Admin\BlogService;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Blog_post::query();

        // Search by title
        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $blogPosts = $query->orderBy('created_at', 'desc')->paginate(15);

        return view('admin.blog.index', compact('blogPosts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request, BlogService $blogService)
    {
        $blogService->store($request->validated());

        return redirect()->route('admin.blog.index')->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogService $blogService, string $id)
    {
        $blogPost = $blogService->findOrFail($id);

        return view('admin.blog.edit', compact('blogPost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, BlogService $blogService, string $id)
    {
        $blogPost = $blogService->findOrFail($id);
        $blogService->update($blogPost, $request->validated());

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogService $blogService, string $id)
    {
        $blogPost = $blogService->findOrFail($id);
        $blogService->delete($blogPost);

        return redirect()->route('admin.blog.index')->with('success', 'Blog post deleted successfully!');
    }
}
