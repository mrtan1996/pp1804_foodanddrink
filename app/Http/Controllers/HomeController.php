<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listProduct = Product::paginate(6);
        
        return view('user.home', compact('listProduct'));
    }
}
