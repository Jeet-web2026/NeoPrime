<?php

namespace App\Http\Controllers;

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
            ''
        ];
    }
}
