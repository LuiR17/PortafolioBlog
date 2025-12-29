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
use App\Http\Controllers\Admin\CurriculumController;
use App\Http\Controllers\Admin\ProfileController;


// ------------------
// RUTAS PÚBLICAS
// ------------------

Route::get('/', [HomeController::class, 'index'])->name('home');

// Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// Proyectos
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

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

        // Skills
        Route::get('skills', [SkillController::class, 'index'])->name('skills.index');

        // Education
        Route::get('education', [EducationController::class, 'index'])->name('education.index');

        // Curriculum
        Route::get('curriculum', [CurriculumController::class, 'index'])->name('curriculum.index');

        // Profile
        Route::get('profile', [ProfileController::class, 'index'])
            ->name('profile.index');

        Route::patch('profile', [ProfileController::class, 'update'])
            ->name('profile.update');
    });



require __DIR__ . '/auth.php';
