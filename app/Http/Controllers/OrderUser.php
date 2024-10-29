<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OrderUser extends Controller
{
    public function orderView(): View
    {
        return view('order');
    }

    public function createOrder(Request $request) {
        $services = $request->validate([
            'nama_paket'=> 'required',
            "service_name" => 'required|in:Setrika,Setrika&Cuci,Karpet Kecil, Karpet Sedang, Karpet Besar',
            'description' => 'nullable',
            'tanggal_reservasi' => 'required|date',
        ]);

        $request->user()->service()->create($services);;
        return redirect(route('order'));
    }
}
