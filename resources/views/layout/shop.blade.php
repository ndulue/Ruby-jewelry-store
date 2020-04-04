<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
Shop
@endsection
@include('partials.head')
<!--== End Head Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
@include('partials.search')
<!--== Search Box Area End ==-->

<!--== Page Title Area Start ==-->
@section('title')
Shop
@endsection
@include('partials.title')
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <div class="row">
            <!-- Shop Page Content Start -->
            <div class="col-lg-9">
                <div class="shop-page-content-wrap">
                    <div class="products-settings-option d-block d-md-flex">
                        <div class="product-cong-left d-flex align-items-center">
                            <ul class="product-view d-flex align-items-center">
                                <li class="current column-gird"><i class="fa fa-bars fa-rotate-90"></i></li>
                                <li class="box-gird"><i class="fa fa-th"></i></li>
                                <li class="list"><i class="fa fa-list-ul"></i></li>
                            </ul>
                            <span class="show-items">Items {{$prod->firstItem()}} - {{$prod->lastItem()}} of {{$prod->total()}}<br></span>
                        </div>
                    </div>

                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                @foreach ($prod as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{route('product.layout', ['sku' => $product->sku])}}">
                                                <img src="{{$product->image}}" alt="{{$product->title}}" class="img-fluid">
                                            </a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{route('product.layout', ['sku', $product->sku])}}">{{$product->title}}</a></h2>
                                            <span class="price">₦{{$product->price}}</span>
                                            <p class="products-desc">{{$product->description}}</p>
                                            <a href="{{route('cart.add',['id' => $product->id])}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{route(wishlist.add,['sku' => $product->sku])}}" class="btn btn-add-to-cart btn-whislist">+
                                                Wishlist</a>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#quickView">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View">
                                                <i class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="#" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist">
                                               <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                        <span class="product-bedge">New</span>
                                    </div>
                                    <!-- Single Product Item -->
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="products-settings-option d-block d-md-flex">
                        {{$prod->links()}}
                     </div>
                    <!--

                        <nav class="page-pagination">
                            <ul class="pagination">
                                <li><a href="#" aria-label="Previous">&laquo;</a></li>
                                <li><a href="#"></a></li>
                                <li><a href="#" aria-label="Next">&raquo;</a></li>
                            </ul>
                        </nav>

                     -->

                </div>
            </div>
            <!-- Shop Page Content End -->

            <!-- Sidebar Area Start -->
            <div class="col-lg-3 mt-5 mt-lg-0">
                <div id="sidebar-area-wrap">
                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">Shop By</h2>
                        <div class="sidebar-body">
                            <div class="shopping-option">
                                <h3>Shopping Options</h3>

                                <div class="shopping-option-item">
                                    <h4>MANUFACTURER</h4>
                                    <ul class="sidebar-list">
                                        <li><a href="{{route('shopManufacturer.layout', ['manufacturerer' => 'Dolce'])}}">Dolce ({{$dolce}})</a></li>
                                        <li><a href="{{route('shopManufacturer.layout', ['manufacturerer' => 'Gabbana'])}}">Gabbana ({{$gabbana}})</a></li>
                                        <li><a href="{{route('shopManufacturer.layout', ['manufacturerer' => 'Nike'])}}">Nike ({{$nike}})</a></li>
                                        <li><a href="{{route('shopManufacturer.layout', ['manufacturerer' => 'Gucci'])}}">Gucci ({{$gucci}})</a></li>
                                        <li><a href="{{route('shopManufacturer.layout', ['manufacturerer' => 'Versace'])}}">Versace ({{$versace}})</a></li>
                                        <li><a href="#">Other (0)</a></li>
                                    </ul>
                                </div>

                                <div class="shopping-option-item">
                                    <h4>Price</h4>
                                    <ul class="sidebar-list">
                                        <li><a href="{{route('shopPrice.layout', ['min' => '0', 'max' => '10000'])}}">0 - ₦10000 ({{$tenk}})</a></li>
                                        <li><a href="{{route('shopPrice.layout', ['min' => '10000', 'max' => '25000'])}}">₦10000 - ₦25000 ({{$twofivek}})</a></li>
                                        <li><a href="{{route('shopPrice.layout', ['min' => '25000', 'max' => '50000'])}}">₦25000 - ₦50000 ({{$fiftyk}})</a></li>
                                        <li><a href="{{route('shopPrice.layout', ['min' => '50000', 'max' => '75000'])}}">₦50000 - ₦75000 ({{$sevenfivek}})</a></li>
                                        <li><a href="{{route('shopPrice.layout', ['min' => '75000', 'max' => '100000'])}}">₦75000 - ₦100000 ({{$hundk}})</a></li>
                                        <li><a href="{{route('shopPrice.layout', ['min' => '100000', 'max' => '1000000'])}}">above ₦100000 ({{$abovehund}})</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Sidebar Item End -->

                    @if (Auth::check)
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">My Wish List</h2>
                        <div class="sidebar-body">
                            <div class="small-product-list">

                                @foreach ($WishProd as $item)
                                    <div class="single-product-item">
                                        <figure class="product-thumb">
                                            <a href="#">
                                                <img class="mr-2 img-fluid" src="{{$item->image}}" alt="Products"/>
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                        <h2><a href="single-product.html">{{$item->title}}</a></h2>
                                            <span class="price">₦{{$item->price}}</span>

                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                    @endif

                    <!-- Single Sidebar Item Start -->
                    <div class="single-sidebar-wrap">
                        <h2 class="sidebar-title">MOSTVIEWED PRODUCTS</h2>
                        <div class="sidebar-body">
                            <div class="small-product-list">
                                @foreach($views as $view)

                                <div class="single-product-item">
                                    <figure class="product-thumb">
                                        <a href="{{route('product.layout', ['sku' => $view->sku])}}">
                                            <img class="mr-2 img-fluid" src="{{$view->image}}" alt="Products"/>
                                        </a>
                                    </figure>
                                    <div class="product-details">
                                        <h2><a href="{{route('product.layout', ['sku' => $view->sku])}}">{{$view->title}}</a></h2>
                                        <span class="price">₦{{$view->price}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar Area End -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
@include('partials.footer')
<!-- Footer Area End -->

<!-- Start All Modal Content -->
<!--== Product Quick View Modal Area Wrap ==-->

<!--== Product Quick View Modal Area End ==-->
<!-- End All Modal Content -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
@include('partials.js-script')
</body>

</html>
