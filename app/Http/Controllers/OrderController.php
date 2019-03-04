<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function guestOrder()
    {
        return view('user.detailorder');
    }
}
