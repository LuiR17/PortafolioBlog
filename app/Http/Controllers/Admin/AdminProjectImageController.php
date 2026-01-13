<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AdminProjectImageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'image', 'max:2048'],
        ]);

        $path = $request->file('image')
            ->store('projects/content', 'public');

        return response()->json([
            'url' => asset('storage/' . $path),
        ]);
    }