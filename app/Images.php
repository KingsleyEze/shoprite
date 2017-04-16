<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Image;

class Images extends Model
{
    //

    public static function createProductImage($image, $product){

        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('images/products/' . $filename);

        Image::make($image->getRealPath())->resize(200, 200)->save($path);

        $productImage = new Images();
        $productImage->product_id = $product->id;
        $productImage->file_name = $filename;
        $productImage->save();
    }
}
