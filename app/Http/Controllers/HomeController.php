<?php

namespace App\Http\Controllers;

use App\Models\LandingContent;
use App\Models\Vendor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $FetchLandingContent = LandingContent::where('id', 7)->first();
        return view('index', compact('FetchLandingContent'));
    }

    public function callbackRequest(Request $request)
    {
        $getData = $request->validate([
            'connection-name' => 'required|string|min:3|max:50',
            'connection-email' => 'required|email|max:50',
            'connection-project-type' => 'required|string',
            'g-recaptcha' => 'required|captcha',
        ], [
            'connection-name.required' => 'Please enter your name.',
            'connection-name.string' => 'Name must be a string.',
            'connection-name.min' => 'Name must be at least 3 characters.',
            'connection-name.max' => 'Name must not exceed 50 characters.',
            'connection-email.required' => 'Please enter your email address.',
            'connection-email.email' => 'Please enter a valid email address.',
            'connection-email.max' => 'Email must not exceed 50 characters.',
            'connection-project-type.required' => 'Please select a project type.',
            'connection-project-type.string' => 'Project type must be a string.',
            'g-recaptcha.required' => 'Please verify that you are not a robot.',
            'g-recaptcha.captcha' => 'Captcha verification failed. Please try again.',
        ]);

        $matchData = [
            
        ];
    }
}
