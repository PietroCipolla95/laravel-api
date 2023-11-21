<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'result' => Type::all()
        ]);
    }

    public function show($id)
    {
        $type = Type::with('posts')->where('id', $id)->first();
        if ($type) {
            return response()->json([
                'response' => true,
                'type' => $type
            ]);
        } else {
            return response()->json([
                'response' => false,
                'type' => 'Page not found'
            ]);
        }
    }
}
