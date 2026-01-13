<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreProjectRequest;
use App\Http\Requests\Admin\UpdateProjectRequest;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderByDesc('id')->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request, ProjectService $projectService): RedirectResponse
    {
        try {
            // 1️⃣ Datos ya validados
            $data = $request->validated();

            // 2️⃣ Crear proyecto vía service
            $projectService->store($data);

            // 3️⃣ Redirección correcta
            return redirect()
                ->route('admin.projects.index')
                ->with('success', 'Proyecto creado correctamente');

        } catch (\Throwable $e) {

            // Log real del error (MUY IMPORTANTE)
            logger()->error('Error creating project', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Ocurrió un error al crear el proyecto');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project, ProjectService $projectService): RedirectResponse
    {
        try {
            $data = $request->validated();
            $projectService->update($project, $data);

            return redirect()
                ->route('admin.projects.index')
                ->with('success', 'Proyecto actualizado correctamente');
        } catch (\Throwable $e) {
            logger()->error('Error updating project', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'Ocurrió un error al actualizar el proyecto');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project, ProjectService $projectService): RedirectResponse
    {
        try {
            $projectService->delete($project);

            return redirect()
                ->route('admin.projects.index')
                ->with('success', 'Proyecto eliminado correctamente');
        } catch (\Throwable $e) {
            logger()->error('Error deleting project', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return back()
                ->with('error', 'Ocurrió un error al eliminar el proyecto');
        }
    }
}
