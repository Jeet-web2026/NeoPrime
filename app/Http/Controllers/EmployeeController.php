<?php

namespace App\Http\Controllers;

use App\Models\AddEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EmployeeController extends Controller
{
    public function index()
    {
        $page = request()->get('page', 1);
        $experts = Cache::remember("experts_{$page}", 60, function () use ($page) {
            return AddEmployee::orderBy('position', 'desc')->orderBy('total_years_of_working', 'desc')->paginate(6, ['*'], 'page', $page);
        });
        return view('employees.all-employees', compact('experts'));
    }
}
