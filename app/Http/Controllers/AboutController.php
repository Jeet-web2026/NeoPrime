<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutUs()
    {
        return view('about.about-us');
    }

    public function Whoweare()
    {
        return view('about.who-we-are');
    }

    public function VissionMission()
    {
        return view('about.vision-mission');
    }
}
