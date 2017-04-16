<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function getIndex()
    {
        return view('renders.carts.index');
    }

    public function checkout()
    {
        return view('renders.carts.checkout');
    }
}
