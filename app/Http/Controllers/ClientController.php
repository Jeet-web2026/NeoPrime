<?php

namespace App\Http\Controllers;

use App\Models\ClientAuth;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.dashboard');
    }

    
    public function store(Request $request)
    {
        //
    }

    public function show(ClientAuth $clientAuth)
    {
        //
    }

    public function update(Request $request, ClientAuth $clientAuth)
    {
        //
    }

    public function destroy(ClientAuth $clientAuth)
    {
        //
    }
}
