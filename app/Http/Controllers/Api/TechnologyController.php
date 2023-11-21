<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'result' => Technology::all()
        ]);
    }

    public function show($id)
    {
        $technology = Technology::with('posts')->where('id', $id)->first();
        if ($technology) {
            return response()->json([
                'response' => true,
                'technology' => $technology
            ]);
        } else {
            return response()->json([
                'response' => false,
                'technology' => 'Page not found'
            ]);
        }
    }
}
