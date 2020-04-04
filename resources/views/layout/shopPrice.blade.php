<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
Shop > Price
@endsection
@include('partials.head')
<!--== End Head Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

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
                            <span class="show-items">Items {{$prices->firstItem()}} - {{$prices->lastItem()}} of {{$prices->total()}}<br></span>
                        </div>
                    </div>

                    <div class="shop-page-products-wrap">
                        <div class="products-wrapper">
                            <div class="row">
                                @foreach ($prices as $price)
                                <div class="col-lg-4 col-sm-6">
                                    <!-- Single Product Item -->
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{route('product.layout', ['sku', $price->sku])}}">
                                                <img src="{{$price->image}}" alt="{{$price->title}}" class="img-fluid">
                                            </a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{route('product.layout', ['sku', $price->sku])}}">{{$price->title}}</a></h2>
                                            <span class="price">₦{{$price->price}}</span>
                                            <p class="products-desc">{{$price->description}}</p>
                                            <a href="{{route('cart.add',['id' => $price->id])}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <a href="{{route(wishlist.add,['sku' => $price->sku])}}" class="btn btn-add-to-cart btn-whislist">+
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

                    {{$prices->links()}}


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
