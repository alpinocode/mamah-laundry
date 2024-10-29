<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminOrder extends Controller
{
    public function showOrder(): View
    {
        $orders = Order::with(['user', 'service'])->get();

        return view('admin.adminOrder', compact('orders'));
    }
    public function editSchedule(Request $request, Order $order)
    {
      
        // Validasi input status
        $validated = $request->validate([
            "status" => "required|in:pending,batal,success"
        ]);
    
        // Update status order
        $order->update([
            'status' => $validated['status']
        ]);
    
        return redirect()->back()->with('success', "Status order berhasil diubah.");
    }
}
