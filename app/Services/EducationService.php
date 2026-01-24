<?php

namespace App\Services;

use App\Models\Education;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class EducationService
{
    public function store(array $data): Education
    {
        try {
            if (
                isset($data['institution_logo']) &&
                $data['institution_logo'] instanceof \Illuminate\Http\UploadedFile &&
                $data['institution_logo']->isValid()
            ) {
                $data['institution_logo'] = $data['institution_logo']
                    ->store('education');
            }

            return Education::create($data);
        } catch (Throwable $e) {
            Log::error('Error creating education', [
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function update(Education $education, array $data): Education
    {
        try {
            if (
                isset($data['institution_logo']) &&
                $data['institution_logo'] instanceof \Illuminate\Http\UploadedFile &&
                $data['institution_logo']->isValid()
            ) {
                if ($education->institution_logo) {
                    Storage::delete($education->institution_logo);
                }

                $data['institution_logo'] = $data['institution_logo']
                    ->store('education');
            }

            $education->update($data);

            return $education;
        } catch (Throwable $e) {
            Log::error('Error updating education', [
                'education_id' => $education->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function delete(Education $education): void
    {
        try {
            if ($education->institution_logo) {
                Storage::delete($education->institution_logo);
            }

            $education->delete();
        } catch (Throwable $e) {
            Log::error('Error deleting education', [
                'education_id' => $education->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }

    public function findOrFail(int $id): Education
    {
        return Education::findOrFail($id);
    }
}
