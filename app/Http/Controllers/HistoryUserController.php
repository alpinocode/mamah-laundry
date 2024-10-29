<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class HistoryUserController
{
    public function userHistroy(): View
   {
       $user = Auth::user();
       $orders = Order::where('user_id', $user->id)->get();
       $services = Services::all();
       return view('user.history', compact('orders', 'services'));   
   }
}
