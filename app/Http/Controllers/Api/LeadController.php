<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewLeadEmailMd;
use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required | string | max:50',
            'email' => 'required | email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }

        $lead = Lead::create($request->all());

        Mail::to('admin@mailtrap.io')->send(new NewLeadEmailMd($lead));

        // Mail::to($lead->email)->send(new NewLeadEmail($lead)); confirmation email todo

        return response()->json([
            'success' => true,
            'message' => 'Message Sent',
        ]);
    }
}
