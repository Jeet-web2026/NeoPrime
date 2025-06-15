<?php

namespace App\Http\Controllers;

use App\Models\OurServices;
use Illuminate\Support\Facades\Cache;

class ServicesController extends Controller
{
    public function AllServices()
    {
        $datas = Cache::remember('all_services', 60, function () {
            return OurServices::all();
        });
        return view('services.view-all-services', compact('datas'));
    }

    public function ViewServices($id)
    {
        $cacheKey = "view_service_{$id}";

        $data = Cache::remember($cacheKey, 60, function () use ($id) {
            return OurServices::with('descriptionaditional')->findOrFail($id);
        });

        return view('services.view-service', compact('data'));
    }
}
