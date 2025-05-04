<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminVerifyRequest;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function AdminLogin()
    {
        return view('admin.admin-login');
    }

    public function AdminVerify(AdminVerifyRequest $request)
    {
        $getData = $request->validated();
    }
}
