<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Services;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminOrderCreate extends Controller
{
    public function showOrderCreate(): View
    {
        $users = User::all();
        $orderedServices = Order::pluck('service_id')->toArray();
        $services = Services::whereNotIn('id', $orderedServices)->get(); 
        return view('admin.adminOrderCreate', compact('services', "users"));


    }

    public function orderCreate(Request $request)
    {
        $valided =$request->validate([
            // 'tanggalMasuk' => 'required|date',
            'status' => 'required|in:pending,batal,success',
            'order_transaksi' => 'required|decimal:2,10',
            // 'tanggalKeluar' => 'required|date',
            'user_id' => 'required',
            'service_id' => 'required'    
        ]);

    
        $order = new Order();
        $order->user_id = $request->user_id;
        $order->service_id = $request->service_id;
        $order->tanggalMasuk = now();
        $order->status = $request->status;
        $order->order_transaksi = $request->order_transaksi;
        $order->tanggalKeluar = $request->tanggalKeluar;

        $order->save();

        
    


        return redirect(route('admin.order'));
    }
}
