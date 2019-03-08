<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
