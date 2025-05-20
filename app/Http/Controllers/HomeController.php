<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Blogs;
use App\Models\CallbackRequest;
use App\Models\LandingContent;
use App\Models\LandingWhatWeoffer;
use App\Models\Latestvideos;
use App\Models\OurServices;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $FetchLandingContent = LandingContent::where('id', 7)->first();
        $FetchWhatweoffer = LandingWhatWeoffer::all();
        $FetchAboutUsContent = AboutUs::where('id', 3)->first();
        $description = explode(' ', strip_tags($FetchAboutUsContent->about_description));
        $Part = implode(' ', array_slice($description, 0, 30));
        $FetchPopularServices = OurServices::all();
        $FetchLatestVideoContent = Latestvideos::where('id', 1)->first();
        $FetchBlog = Blogs::all();
        $FetchBlog->map(function ($blog) {
            $words = explode(' ', strip_tags($blog->blog_description));
            $blog->short_description = implode(' ', array_slice($words, 0, 8));
            return $blog;
        });
        return view('index', compact('FetchLandingContent', 'FetchWhatweoffer', 'FetchAboutUsContent', 'Part', 'FetchPopularServices', 'FetchLatestVideoContent', 'FetchBlog'));
    }

    public function callbackRequest(Request $request)
    {
        $getData = $request->validate([
            'connection-name' => 'required|string|min:3|max:50',
            'connection-email' => 'required|email|max:50',
            'connection-project-type' => 'required|string',
            'g-recaptcha-response' => 'required',
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
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        ]);

        $matchData = [
            'name' => $getData['connection-name'],
            'email' => $getData['connection-email'],
            'project_type' => $getData['connection-project-type'],
        ];

        $success = CallbackRequest::create($matchData);
        if ($success) {
            return response()->json([
                'status' => 'success',
                'message' => 'Callback request submitted successfully.',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to submit callback request. Please try again later.',
            ]);
        }
    }
}
