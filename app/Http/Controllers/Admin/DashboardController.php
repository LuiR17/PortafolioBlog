<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog_post;
use App\Models\Project;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Curriculum;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Get statistics
        $totalProjects = Project::count();
        $publishedPosts = Blog_post::publicPublished()->count();
        $totalEducation = Education::count();
        $totalSkills = Skill::count();

        // Get recent content for activity table
        $recentProjects = Project::latest()
            ->take(3)
            ->get(['id', 'name', 'updated_at', 'status']);

        $recentPosts = Blog_post::latest()
            ->take(3)
            ->get(['id', 'title', 'updated_at', 'status']);

        // Combine and sort by updated_at
        $recentContent = $recentProjects->map(function ($project) {
            return [
                'id' => $project->id,
                'title' => $project->name,
                'type' => 'Project',
                'updated_at' => $project->updated_at,
                'status' => $project->status,
            ];
        })->merge($recentPosts->map(function ($post) {
            return [
                'id' => $post->id,
                'title' => $post->title,
                'type' => 'Blog',
                'updated_at' => $post->updated_at,
                'status' => $post->status,
            ];
        }))->sortByDesc('updated_at')->take(5);

        return view('admin.dashboard', compact(
            'totalProjects',
            'publishedPosts', 
            'totalEducation',
            'totalSkills',
            'recentContent'
        ));
    }
}
