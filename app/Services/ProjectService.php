<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectService
{
    
    public function store(array $data): Project
    {
        
        if (isset($data['preview_image'])) {
            $data['preview_image'] = $data['preview_image']
                ->store('projects', 's3');
        }

        return Project::create($data);
    }

    public function update(Project $project, array $data): Project
    {
        if (isset($data['preview_image'])) {
        if ($project->preview_image) {
            Storage::disk('s3')->delete($project->preview_image);
        }

            $data['preview_image'] = $data['preview_image']
                ->store('projects', 's3');
        }

        $project->update($data);

        return $project;
    }

    public function delete(Project $project): void
    {
        if ($project->preview_image) {
            Storage::disk('s3')->delete($project->preview_image);
        }
        $project->delete();
    }}
