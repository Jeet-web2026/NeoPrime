<?php

namespace App\Http\Controllers;

use App\Models\OurServices;

class ServicesController extends Controller
{
    public function ViewServices($id)
    {
        $data = OurServices::with('descriptionaditional')->findOrFail($id);
        return view('services.view-service', compact('data'));
    }
}
