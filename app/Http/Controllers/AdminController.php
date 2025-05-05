<?php

namespace App\Http\Controllers;

use App\Models\LandingContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    public function AddLandingContent(Request $request)
    {
        $getData = $request->validate([
            'landing-main-heading' => 'required|string',
            'landing-meta-content' => 'required',
            'landing-meta-description' => 'required'
        ], [
            'landing-main-heading.required' => 'Main heading is required',
            'landing-meta-content.required' => 'Meta content is required',
            'landing-meta-description.required' => 'Meta description is required'
        ]);

        $matchData = [
            'main_heading' => $getData['landing-main-heading'],
            'meta_content' => $getData['landing-meta-content'],
            'meta_description' => $getData['landing-meta-description']
        ];

        $success = LandingContent::create($matchData);

        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Landing content added successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to add landing content'
            ]);
        }
    }
}
