<?php

namespace App\Http\Controllers;

use App\Models\ClientAuth;
use App\Models\OrderPlace;
use App\Models\OurServices;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $services = OurServices::select('id', 'icon', 'name', 'description')
            ->get();
        $orderlists = OrderPlace::where('client_id', auth()->guard('client')->user()->id)
            ->get();
        return view('client.dashboard', compact('services', 'orderlists'));
    }

    public function productView($id)
    {
        $servicedata = OurServices::with('descriptionaditional')->findOrFail($id);
        $orderData = OrderPlace::all();
        return view('client.product-view', compact('servicedata', 'orderData'));
    }

    public function productOrder($id)
    {
        $client_id = auth()->guard('client')->user()->id;

        $result = OrderPlace::create([
            'client_id' => $client_id,
            'product_id' => $id,
        ]);

        if ($result) {
            return response()->json([
                'status' => 'success',
                'message' => 'Order placed successfully.',
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong.',
            ]);
        }
    }
}
