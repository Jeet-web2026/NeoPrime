<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
use App\Models\AdminVerify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.admin-login');
    }

    public function AdminVerify(AdminVerifyRequest $request)
    {
        $request->validated();

        $matchData = [
            'admin_email' => $request->input('admin-email'),
            'password' => $request->input('admin-password'),
        ];

        if (Auth::guard('admin')->attempt($matchData)) {
            return redirect()->route('admin-dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('home')->with('success', 'Logged out successfully');
    }
}
