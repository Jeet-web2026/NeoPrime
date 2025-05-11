<?php

namespace App\Http\Controllers;

use App\Models\CallbackRequest;
use App\Models\LandingContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return view('admin.dashboard');
    }

    public function GetLandingcontent()
    {
        $FetchLandingContent = LandingContent::where('id', 7)->first();
        return response()->json([
            'status' => 200,
            'data' => $FetchLandingContent
        ]);
    }

    public function AddLandingContent(Request $request)
    {
        $getData = $request->validate([
            'landing-main-heading' => 'nullable|string',
            'landing-meta-content' => 'nullable',
            'landing-meta-description' => 'nullable',
            'landing-main-background' => 'nullable|url',
        ], [
            'landing-main-heading.string' => 'Main heading must be a string',
            'landing-main-background.url' => 'Main background must be a valid URL',
        ]);

        $matchData = [
            'main_heading' => $getData['landing-main-heading'],
            'meta_content' => $getData['landing-meta-content'],
            'meta_description' => $getData['landing-meta-description'],
            'landing_background' => $getData['landing-main-background'],
        ];

        $success = LandingContent::where('id', 7)->update($matchData);

        if ($success) {
            return response()->json([
                'status' => 200,
                'message' => 'Landing content updated successfully'
            ]);
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'Failed to update landing content'
            ]);
        }
    }

    public function Callbackrequests()
    {
        $FetchRequests = CallbackRequest::orderBy('id', 'desc')->get();
        return response()->json([
            'status' => 200,
            'data' => $FetchRequests
        ]);
    }

    public function WeOfferAdd(Request $request) 
    {
        $getData = $request->validate([
            'service-name' => 'required|string',
            'service-related-image' => 'required|url',
        ],[
            'service-name.required' => 'Service name is required',
            'service-name.string' => 'Service name must be a string',
            'service-related-image.required' => 'Service image is required',
            'service-related-image.url' => 'Service image must be a valid URL',
        ]);
    }
}
