<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductTypes;

class HomeController extends Controller
{
    //
    public function getIndex()
    {
        $productTypes = ProductTypes::all();
        return view('renders.home.index', compact('productTypes'));
    }
}
