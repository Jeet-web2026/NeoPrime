<?php

namespace App\Http\Controllers;

use App\Models\LandingContent;
use App\Models\Vendor;

class HomeController extends Controller
{
    public function index()
    {
        $FetchLandingContent = LandingContent::where('id', 7)->first();
        return view('index', compact('FetchLandingContent'));
    }
}
