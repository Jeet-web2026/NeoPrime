<?php

namespace App\Http\Controllers;

use App\Models\OurServices;

class ServicesController extends Controller
{
    public function AllServices()
    {
        $datas = OurServices::all();
        return view('services.view-all-services', compact('datas'));
    }

    public function ViewServices($id)
    {
        $data = OurServices::with('descriptionaditional')->findOrFail($id);
        return view('services.view-service', compact('data'));
    }
}
