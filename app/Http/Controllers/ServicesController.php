<?php

namespace App\Http\Controllers;

use App\Models\ServiceDescription;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function ViewServices($id)
    {
        $data = ServiceDescription::with('services')->where('id', $id)->first();
        return view('services.view-service', compact('data'));
    }
}
