
<div class="left-sidebar">
    <h2>Category</h2>
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->

        @foreach($productTypes as $productType)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="/products/{{ $productType->id }}">{{ $productType->name }}</a></h4>
            </div>
        </div>
        @endforeach

    </div><!--/category-products-->

    <div class="shipping text-center"><!--shipping-->
        <img src="/assets/images/home/shipping.jpg" alt=""/>
    </div><!--/shipping-->

</div>