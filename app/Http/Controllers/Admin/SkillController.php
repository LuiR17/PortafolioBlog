<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreSkillRequest;
use App\Http\Requests\Admin\UpdateSkillRequest;
use App\Models\Skill;
use App\Services\Admin\SkillService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    protected $skillService;

    public function __construct(SkillService $skillService)
    {
        $this->skillService = $skillService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::orderBy('order')->orderBy('name')->get();
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSkillRequest $request)
    {
        try {
            $skill = $this->skillService->store($request->validated());
            
            return redirect()
                ->route('admin.skills.index')
                ->with('success', 'Skill created successfully!');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Error creating skill: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('admin.skills.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSkillRequest $request, Skill $skill)
    {
        try {
            $this->skillService->update($skill, $request->validated());
            
            return redirect()
                ->route('admin.skills.index')
                ->with('success', 'Skill updated successfully!');
        } catch (\Exception $e) {
            return back()
                ->withInput()
                ->with('error', 'Error updating skill: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        try {
            $this->skillService->delete($skill);
            
            return redirect()
                ->route('admin.skills.index')
                ->with('success', 'Skill deleted successfully!');
        } catch (\Exception $e) {
            return back()
                ->with('error', 'Error deleting skill: ' . $e->getMessage());
        }
    }
}
