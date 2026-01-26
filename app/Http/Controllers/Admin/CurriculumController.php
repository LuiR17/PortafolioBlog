<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateCurriculumRequest;
use App\Models\Curriculum;
use App\Services\CurriculumService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CurriculumController extends Controller
{
    protected $curriculumService;

    public function __construct(CurriculumService $curriculumService)
    {
        $this->curriculumService = $curriculumService;
    }
    /**
     * Show the form for editing the curriculum.
     */
    public function edit()
    {
        $curriculum = Curriculum::first() ?: new Curriculum([
            'file_path' => null,
            'file_name' => null,
            'file_size' => null,
            'mime_type' => null,
            'language' => 'en',
            'is_active' => true,
        ]);
        
        return view('admin.curriculum.edit', compact('curriculum'));
    }

    /**
     * Update the curriculum.
     */
    public function update(UpdateCurriculumRequest $request)
    {
        try {
            $curriculum = Curriculum::first();
            
            if (!$curriculum) {
                $curriculum = new Curriculum();
                $curriculum->language = 'en';
                $curriculum->is_active = true;
            }
            
            $data = $request->validated();
            
            // Handle file upload
            if ($request->hasFile('file_path')) {
                $data['file_path'] = $request->file('file_path');
            }
            
            $this->curriculumService->update($curriculum, $data);
            
            return redirect()->route('admin.curriculum.edit')
                ->with('success', 'Curriculum updated successfully!');
                
        } catch (\Exception $e) {
            Log::error('Error updating curriculum: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to update curriculum. Please try again.')
                ->withInput();
        }
    }

    /**
     * Remove the curriculum.
     */
    public function destroy()
    {
        try {
            $curriculum = $this->curriculumService->getActive();
            
            if (!$curriculum) {
                return redirect()->route('admin.curriculum.edit')
                    ->with('error', 'No curriculum found to delete.');
            }
            
            $this->curriculumService->delete($curriculum);
            
            return redirect()->route('admin.curriculum.edit')
                ->with('success', 'Curriculum deleted successfully!');
                
        } catch (\Exception $e) {
            Log::error('Error deleting curriculum: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to delete curriculum. Please try again.');
        }
    }

    /**
     * Download the curriculum file.
     */
    public function download()
    {
        try {
            $curriculum = Curriculum::active()->firstOrFail();
            
            if (!$curriculum->file_path) {
                abort(404, 'No curriculum file available for download.');
            }
            
            // Check if file exists in storage
            if (!Storage::exists($curriculum->file_path)) {
                abort(404, 'Curriculum file not found.');
            }
            
            // Download using Storage::download with forced filename
            return Storage::download($curriculum->file_path, 'CV-Luis-Romero.pdf');
            
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'No active curriculum found.');
        } catch (\Exception $e) {
            Log::error('Error downloading curriculum: ' . $e->getMessage());
            abort(500, 'Failed to download curriculum.');
        }
    }
}
