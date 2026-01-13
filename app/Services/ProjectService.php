<?php

namespace App\Services;

use App\Models\Project;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProjectService
{
    public function store(array $data): Project
    {
        try {
            if (
                isset($data['preview_image']) &&
                $data['preview_image'] instanceof \Illuminate\Http\UploadedFile &&
                $data['preview_image']->isValid()
            ) {
                $data['preview_image'] = $data['preview_image']
                    ->store('projects', 's3');
            }

            return Project::create($data);
        } catch (Throwable $e) {
            Log::error('Error creating project', [
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function update(Project $project, array $data): Project
    {
        try {
            if (
                isset($data['preview_image']) &&
                $data['preview_image'] instanceof \Illuminate\Http\UploadedFile &&
                $data['preview_image']->isValid()
            ) {
                if ($project->preview_image) {
                    Storage::disk('s3')->delete($project->preview_image);
                }

                $data['preview_image'] = $data['preview_image']
                    ->store('projects', 's3');
            }

            $project->update($data);

            return $project;
        } catch (Throwable $e) {
            Log::error('Error updating project', [
                'project_id' => $project->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function delete(Project $project): void
    {
        try {
            if ($project->preview_image) {
                Storage::disk('s3')->delete($project->preview_image);
            }

            $project->delete();
        } catch (Throwable $e) {
            Log::error('Error deleting project', [
                'project_id' => $project->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }
}
