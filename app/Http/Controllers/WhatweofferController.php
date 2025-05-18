<?php

namespace App\Http\Controllers;

use App\Models\LandingWhatWeoffer;
use Illuminate\Http\Request;

class WhatweofferController extends Controller
{
    public function OfferedFullDetails($id)
    {
        $details = LandingWhatWeoffer::find($id);

        if (!$details) {
            return view('we-offers.weofferedproductdetails')->with('NotFound', "Oops! No product found.");
        }
        $description = explode(' ', strip_tags($details->service_description));
        $firstPart = implode(' ', array_slice($description, 0, 150));
        $secondPart = implode(' ', array_slice($description, 150));
        return view('we-offers.weofferedproductdetails', compact('details', 'firstPart', 'secondPart'));
    }
}
