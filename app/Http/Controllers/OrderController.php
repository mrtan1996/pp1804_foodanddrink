<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;
use Auth;
use Cart;
use App\Model\City;
use App\Model\District;

class OrderController extends Controller
{
    public function guestOrder()
    {
        $city = City::all(['id','name']);
        $district = District::all(['id', 'name']);

        return view('user.detailorder', compact('city','district'));
    }

    public function createOrder(Request $request)
    {
        $total = Cart::getTotal();
        $data = $request->all();
        Order::create([
            'phone' => $data['member_tel'],
            'address' => $data['member_address'],
            'user_id' => Auth::user()->id,
            'total' => $total,   
        ]);

        return redirect('viewOrder');

    }

    public function viewOrder()
    {
        return view('user.history');
    }
}
