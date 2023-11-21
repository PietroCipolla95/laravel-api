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
            'success' => true,
            'projects' => Project::with('technologies', 'type')->orderByDesc('id')->paginate(6)
        ]);
    }

    public function singleProject($slug)
    {
        $single_project = Project::with('technologies', 'type')->where('slug', $slug)->first();

        if ($single_project) {
            return response()->json([
                'response' => true,
                'single_project' => $single_project,
            ]);
        } else {
            return response()->json([
                'response' => false,
                'single_project' => 'no project found',
            ]);
        }
    }
}
