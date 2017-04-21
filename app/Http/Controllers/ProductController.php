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
        return view('renders.products.index', compact('productTypes','products'));
    }

    public function productByType(Request $request, $productTypeId)
    {
        $productTypes = ProductTypes::all();
        $products = Products::where('product_type_id', $productTypeId)->get();
        return view('renders.products.index', compact('productTypes','products'));
    }

    public function productDetails(Request $request, $productId)
    {
        $productTypes = ProductTypes::all();
        $selectedProduct = Products::where('id', $productId)->with('productImage')->first();
        return view('renders.products.product_details', compact('productTypes', 'selectedProduct'));
    }
}
