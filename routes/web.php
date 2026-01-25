<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\AdminProjectImageController;
use App\Http\Controllers\Admin\AdminBlogImageController;
use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\PublicController;


// ------------------
// RUTAS PÚBLICAS
// ------------------

Route::get('/', [PublicController::class, 'home'])->name('public.home');

// Blog
Route::get('/blog', [PublicController::class, 'blogIndex'])->name('public.blog.index');
Route::get('/blog/{slug}', [PublicController::class, 'blogShow'])->name('public.blog.show');

// Proyectos
Route::get('/projects', [PublicController::class, 'projectsIndex'])->name('public.projects.index');
Route::get('/projects/{slug}', [PublicController::class, 'projectShow'])->name('public.projects.show');

// Contacto
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// ------------------
// RUTAS ADMIN
// ------------------

Route::middleware(['auth'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('dashboard');

        // Blog
        Route::resource('blog', AdminBlogController::class)
            ->except(['show']);

        // Projects
        Route::resource('projects', AdminProjectController::class)
            ->except(['show']);

        Route::post('projects/upload-image',[AdminProjectImageController::class, 'store']
        )->name('projects.upload-image');

        Route::post('blogs/upload-image',[AdminBlogImageController::class, 'store']
        )->name('blogs.upload-image');

        // Skills
        Route::resource('skills', SkillController::class);

        // Education
        Route::resource('education', EducationController::class);

        // Curriculum
        Route::get('curriculum/download', [CurriculumController::class, 'download'])->name('curriculum.download');
        Route::get('curriculum', [CurriculumController::class, 'edit'])->name('curriculum.edit');
        Route::patch('curriculum', [CurriculumController::class, 'update'])->name('curriculum.update');
        Route::delete('curriculum', [CurriculumController::class, 'destroy'])->name('curriculum.destroy');

        // Profile
        Route::get('profile', [ProfileController::class, 'index'])
            ->name('profile.index');

        Route::patch('profile', [ProfileController::class, 'update'])
            ->name('profile.update');
    });



require __DIR__ . '/auth.php';
