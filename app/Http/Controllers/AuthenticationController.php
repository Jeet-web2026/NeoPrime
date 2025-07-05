<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
use App\Http\Requests\ClientRegisterRequest;
use App\Models\ClientRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
        return redirect()->route('admin-login')->with('success', 'Logged out successfully');
    }

    public function ClientsLogin()
    {
        return view('client.client-login');
    }

    public function ClientVerify(ClientRegisterRequest $request)
    {
        $request->validated();

        $matchData = [
            'email' => $request['client-email'],
            'name' => $request['client-name'],
            'address' => $request['client-address'],
            'address_second' => $request['client-address-second'],
            'country' => $request['client-country'],
            'state' => $request['client-state'],
            'city' => $request['client-city'],
            'pincode' => $request['client-zip'],
        ];

        ClientRegister::create($matchData);

        return back()->with('success', 'Registered Successfully!');
    }

    public function Clientloginview()
    {
        return view('client.client-verify');
    }

    public function ClientVerifylogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        $client = ClientRegister::where('email', $request->email)->first();
        if (empty($client->password)) {
            $client->password = Hash::make($request->password);
            $client->save();
        }

        if (Auth::guard('client')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('client-dashboard')->with('success', 'Logged in successfully!');
        } else {
            return back()->withErrors(['error' => 'Invalid credentials.']);
        }
    }
}
