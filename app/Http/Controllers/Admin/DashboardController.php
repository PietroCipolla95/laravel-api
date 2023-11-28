<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $projects_counter = Project::count();
        $technologies_counter = Technology::count();
        $types_counter = Type::count();

        return view('admin.dashboard', compact('projects_counter', 'technologies_counter', 'types_counter'));
    }
}
