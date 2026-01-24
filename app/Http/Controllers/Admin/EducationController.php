<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreEducationRequest;
use App\Http\Requests\Admin\UpdateEducationRequest;
use App\Models\Education;
use App\Services\EducationService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class EducationController extends Controller
{
    protected EducationService $educationService;

    public function __construct(EducationService $educationService)
    {
        $this->educationService = $educationService;
    }

    public function index()
    {
        $educations = Education::orderBy('start_year', 'desc')->get();
        return view('admin.education.index', compact('educations'));
    }

    public function create()
    {
        return view('admin.education.create');
    }

    public function store(StoreEducationRequest $request)
    {
        try {
            $this->educationService->store($request->validated());
            Session::flash('success', 'Education created successfully!');
            return Redirect::route('admin.education.index');
        } catch (\Exception $e) {
            Session::flash('error', 'Error creating education: ' . $e->getMessage());
            return Redirect::back()->withInput();
        }
    }

    public function show(Education $education)
    {
        return view('admin.education.show', compact('education'));
    }

    public function edit(Education $education)
    {
        return view('admin.education.edit', compact('education'));
    }

    public function update(UpdateEducationRequest $request, Education $education)
    {
        try {
            $this->educationService->update($education, $request->validated());
            Session::flash('success', 'Education updated successfully!');
            return Redirect::route('admin.education.index');
        } catch (\Exception $e) {
            Session::flash('error', 'Error updating education: ' . $e->getMessage());
            return Redirect::back()->withInput();
        }
    }

    public function destroy(Education $education)
    {
        try {
            $this->educationService->delete($education);
            Session::flash('success', 'Education deleted successfully!');
            return Redirect::route('admin.education.index');
        } catch (\Exception $e) {
            Session::flash('error', 'Error deleting education: ' . $e->getMessage());
            return Redirect::back();
        }
    }
}
