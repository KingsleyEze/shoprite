<?php

namespace App\Http\Controllers;

use App\Products;
use App\ProductTypes;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function getIndex()
    {
        $productTypes = ProductTypes::all();
        $products = Products::with('productImage')->get();
        //dd($products);
        return view('renders.products.index', compact('productTypes','products'));
    }

    public function productByType(Request $request, $productTypeId)
    {
        $productTypes = ProductTypes::all();
        $products = Products::where('product_type_id', $productTypeId)->get();
        return view('renders.products.index', compact('productTypes','products'));
    }

    public function productDetails()
    {
        return view('renders.products.product_details');
    }
}
