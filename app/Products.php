<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //

    public static function createProduct($input){
        $product = new Products();
        $product->name = $input->get('name');
        $product->price = $input->get('price');
        $product->product_type_id = $input->get('type');
        $product->description = $input->get('description');
        $product->save();

        return $product;
    }

    public function productType(){

        return $this->belongsTo(ProductTypes::class,'product_type_id');
    }

    public function productImage(){
        return $this->hasOne(Images::class, 'product_id');
    }
}
