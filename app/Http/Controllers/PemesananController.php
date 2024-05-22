<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PemesananController extends Controller
{
    public function index(){
        return view('pemesanan');
    }

    public function store(Request $request){
        $orders = Order::create($request->all());

        return view('pembayaran');
    }
}
