<?php

namespace App\Http\Controllers;

use App\Models\CareerVaccancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CareerController extends Controller
{
    public function careerVacancy()
    {
        $page = request()->get('page', 1);

        $openings = Cache::remember("career_openings_page_{$page}", 60, function () use ($page) {
            return CareerVaccancy::paginate(8, ['*'], 'page', $page);
        });

        return view('career.latest-vacancy', compact('openings'));
    }

    public function JobView($id)
    {
        $cacheKey = "view_service_{$id}";

        $data = Cache::remember($cacheKey, 60, function () use ($id) {
            return CareerVaccancy::findOrFail($id);
        });
        return view('career.latest-vacancy-job-details', compact('data'));
    }
}
