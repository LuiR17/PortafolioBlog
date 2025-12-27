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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('client_name')->nullable()->default('Secreto');
            $table->string('preview_image')->nullable();
            $table->string('development_time')->nullable();
            $table->string('role')->nullable();
            $table->string('platform')->nullable();
            $table->string('short_description');
            $table->text('full_description')->nullable();
            $table->text('problem_solved')->nullable();
            $table->longText('content')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('repository_url')->nullable();
            $table->enum('status', ['draft', 'published'])->default('draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
