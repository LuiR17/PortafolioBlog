<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UpdateCurriculumRequest;
use App\Models\Curriculum;
use App\Services\CurriculumService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            $curriculum = $this->curriculumService->getActive();
            
            if (!$curriculum || !$curriculum->file_path) {
                return redirect()->back()
                    ->with('error', 'No curriculum file available for download.');
            }
            
            $filePath = storage_path('app/public/' . $curriculum->file_path);
            
            if (!file_exists($filePath)) {
                return redirect()->back()
                    ->with('error', 'Curriculum file not found.');
            }
            
            return response()->download($filePath, $curriculum->file_name);
            
        } catch (\Exception $e) {
            Log::error('Error downloading curriculum: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Failed to download curriculum. Please try again.');
        }
    }
}
