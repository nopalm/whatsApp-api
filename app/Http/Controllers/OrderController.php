<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

use App\Notifications\OrderProcessed;

class OrderController extends Controller
{
    public function store(Request $request)
    {
    $order = Order::create([
        'name' => 'order 1',
        'amount' => 1
    ]);
    $request->user()->notify(new OrderProcessed($order));
    return redirect()->route('home')->with('status', 'Order Placed!');
    }
}
