<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function projects()
    {
        return response()->json([
            'projects' => Project::with('technologies', 'type')->paginate(5)
        ]);
    }
}
