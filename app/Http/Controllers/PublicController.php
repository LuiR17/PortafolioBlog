<?php

namespace App\Http\Controllers;

use App\Models\Blog_post;
use App\Models\Project;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home()
    {
        // Get featured projects (latest 2 published)
        $featuredProjects = Project::published()
            ->latest()
            ->take(2)
            ->get();

        // Get latest blog posts (latest 3 published)
        $latestPosts = Blog_post::publicPublished()
            ->latest('published_at')
            ->take(3)
            ->get();

        // Get education (latest 3)
        $education = Education::latest()
            ->take(3)
            ->get();

        // Get skills grouped by category
        $skills = Skill::orderBy('order')->get()->groupBy('category');

        // Get curriculum for download button
        $curriculum = Curriculum::active()->first();

        return view('public.home', compact(
            'featuredProjects',
            'latestPosts', 
            'education',
            'skills',
            'curriculum'
        ));
    }

    public function blogIndex()
    {
        $posts = Blog_post::publicPublished()
            ->latest('published_at')
            ->paginate(9);

        return view('public.blog.index', compact('posts'));
    }

    public function blogShow($slug)
    {
        $post = Blog_post::publicPublished()
            ->where('slug', $slug)
            ->firstOrFail();

        // Get related posts
        $relatedPosts = Blog_post::publicPublished()
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        return view('public.blog.show', compact('post', 'relatedPosts'));
    }

    public function projectsIndex()
    {
        $projects = Project::published()
            ->latest()
            ->paginate(9);

        return view('public.projects.index', compact('projects'));
    }

    public function projectShow($slug)
    {
        // For now, assume projects are identified by name/slug
        $project = Project::published()
            ->where('name', 'LIKE', '%' . str_replace('-', ' ', $slug) . '%')
            ->firstOrFail();

        // Get related projects
        $relatedProjects = Project::published()
            ->where('id', '!=', $project->id)
            ->latest()
            ->take(3)
            ->get();

        return view('public.projects.show', compact('project', 'relatedProjects'));
    }
}
