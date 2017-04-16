@extends('layouts.global')
@section('title')
    Products
@endsection
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                @include('fragments.sidebar')
            </div>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Features Items</h2>

                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/images/products/{{ $product->productImage->file_name }}" alt=""/>
                                        <h2>&#8358; {{$product->price}}</h2>
                                        <p>{{$product->name}}</p>
                                        <a href="product/details/{{ $product->id }}" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-shopping-cart"></i>View</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>&#8358; {{$product->price}}</h2>
                                            <p>{{$product->name}}</p>
                                            <a href="/product/details/{{ $product->id }}" class="btn btn-default add-to-cart"><i
                                                        class="fa fa-shopping-cart"></i>View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div><!--features_items-->
                <br class="clearfix"/>
                <div class="row">

                    <div class="col-sm-4">
                        <ul class="pagination">
                            <li class="active"><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection