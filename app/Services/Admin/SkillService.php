<?php

namespace App\Services\Admin;

use App\Models\Skill;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class SkillService
{
    public function store(array $data): Skill
    {
        try {
            if (
                isset($data['icon']) &&
                $data['icon'] instanceof \Illuminate\Http\UploadedFile &&
                $data['icon']->isValid()
            ) {
                $data['icon'] = $data['icon']
                    ->store('skills');
            }

            return Skill::create($data);
        } catch (Throwable $e) {
            Log::error('Error creating skill', [
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function update(Skill $skill, array $data): Skill
    {
        try {
            if (
                isset($data['icon']) &&
                $data['icon'] instanceof \Illuminate\Http\UploadedFile &&
                $data['icon']->isValid()
            ) {
                if ($skill->icon) {
                    Storage::delete($skill->icon);
                }

                $data['icon'] = $data['icon']
                    ->store('skills');
            }

            $skill->update($data);

            return $skill;
        } catch (Throwable $e) {
            Log::error('Error updating skill', [
                'skill_id' => $skill->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function delete(Skill $skill): void
    {
        try {
            if ($skill->icon) {
                Storage::delete($skill->icon);
            }

            $skill->delete();
        } catch (Throwable $e) {
            Log::error('Error deleting skill', [
                'skill_id' => $skill->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function findOrFail(int $id): Skill
    {
        return Skill::findOrFail($id);
    }
}
