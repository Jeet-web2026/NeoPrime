<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
