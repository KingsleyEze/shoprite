<?php

namespace App\Http\Controllers;

use app\Http\AppConstants\ProductType;
use App\Images;
use App\Products;
use App\ProductTypes;
use Illuminate\Http\Request;
//use Intervention\Image\Image;
use Image;

class MasterController extends Controller
{
    //Dashboard
    public function getIndex()
    {
        return view('renders.master.index');
    }

    //Product Manager

    public function productList(){

        $products = Products::with('productType')->get();

        return view('renders.master.products.product_list',
                    compact('products'));
    }

    public function createProduct(){
        $productTypes = ProductTypes::all();
        return view ('renders.master.products.create_product',
                    compact('productTypes'));
    }

    public function saveProduct(Request $request){

        $product = Products::createProduct($request);

        if($request->hasFile('image')):

            $image = $request->file('image');
            Images::createProductImage($image, $product);
        endif;

        return redirect('/master/products')
            ->with('message', 'Product has been created successfully!');
    }
}
