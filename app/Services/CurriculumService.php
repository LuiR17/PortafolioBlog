<?php

namespace App\Services;

use App\Models\Curriculum;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Exception;

class CurriculumService
{
    /**
     * Get the active curriculum
     */
    public function getActive(): ?Curriculum
    {
        return Curriculum::active()->first();
    }

    /**
     * Update curriculum with new file or metadata
     */
    public function update(Curriculum $curriculum, array $data): Curriculum
    {
        try {
            // Handle file upload if provided
            if (isset($data['file_path']) && $data['file_path'] instanceof UploadedFile) {
                // Delete old file if exists
                if ($curriculum->file_path) {
                    Storage::delete($curriculum->file_path);
                }

                // Upload new file
                $file = $data['file_path'];
                $fileName = $file->getClientOriginalName();
                $filePath = $file->store('curriculum');

                $data['file_name'] = $fileName;
                $data['file_size'] = $file->getSize();
                $data['mime_type'] = $file->getMimeType();
                $data['file_path'] = $filePath;
            }

            // Update or create curriculum
            if ($curriculum->exists) {
                $curriculum->update($data);
            } else {
                $data['is_active'] = $data['is_active'] ?? true;
                $curriculum = Curriculum::create($data);
            }

            return $curriculum;
        } catch (Exception $e) {
            \Log::error('Error updating curriculum: ' . $e->getMessage());
            throw new Exception('Failed to update curriculum. Please try again.');
        }
    }

    /**
     * Create new curriculum
     */
    public function store(array $data): Curriculum
    {
        try {
            // Handle file upload
            if (isset($data['file_path']) && $data['file_path'] instanceof UploadedFile) {
                $file = $data['file_path'];
                $fileName = $file->getClientOriginalName();
                $filePath = $file->store('curriculum');

                $data['file_name'] = $fileName;
                $data['file_size'] = $file->getSize();
                $data['mime_type'] = $file->getMimeType();
                $data['file_path'] = $filePath;
            }

            // Set default active status if not provided
            if (!isset($data['is_active'])) {
                $data['is_active'] = true;
            }

            return Curriculum::create($data);
        } catch (Exception $e) {
            \Log::error('Error creating curriculum: ' . $e->getMessage());
            throw new Exception('Failed to upload curriculum. Please try again.');
        }
    }

    /**
     * Delete curriculum and its file
     */
    public function delete(Curriculum $curriculum): void
    {
        try {
            // Delete file from storage
            if ($curriculum->file_path) {
                Storage::delete($curriculum->file_path);
            }

            // Delete curriculum record
            $curriculum->delete();
        } catch (Exception $e) {
            \Log::error('Error deleting curriculum: ' . $e->getMessage());
            throw new Exception('Failed to delete curriculum. Please try again.');
        }
    }

    /**
     * Find or create curriculum
     */
    public function findOrCreate(): Curriculum
    {
        $curriculum = $this->getActive();
        
        if (!$curriculum) {
            $curriculum = new Curriculum([
                'file_path' => null,
                'file_name' => null,
                'file_size' => null,
                'mime_type' => null,
                'language' => 'en',
                'is_active' => true,
            ]);
            $curriculum->save();
        }

        return $curriculum;
    }
}
