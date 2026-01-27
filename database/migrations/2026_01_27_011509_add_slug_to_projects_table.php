<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->nullable()->after('name');
            $table->index('slug');
        });

        // Generate slugs for existing projects
        \DB::table('projects')->whereNull('slug')->get()->each(function ($project) {
            $slug = \Illuminate\Support\Str::slug($project->name);
            $originalSlug = $slug;
            $counter = 1;
            
            // Ensure uniqueness
            while (\DB::table('projects')->where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }
            
            \DB::table('projects')->where('id', $project->id)->update(['slug' => $slug]);
        });

        // Now make the column non-nullable and unique
        Schema::table('projects', function (Blueprint $table) {
            $table->string('slug')->nullable(false)->change();
            $table->unique('slug');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropIndex(['slug']);
            $table->dropColumn('slug');
        });
    }
};
