<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Header Area Start ==-->
@section('head')
Products
@endsection
@include('partials.head')
<!--== Header Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
@include('partials.search')
<!--== Search Box Area End ==-->

<!--== Page Title Area Start ==-->
@section('title')
Products
@endsection
@include('partials.title')
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="ruby-container">
        <div class="row">
            <!-- Single Product Page Content Start -->
            <div class="col-lg-12">
                <div class="single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail Start -->
                        <div class="col-lg-5">
                            <img class="img-fluid" src="{{asset($actual->image)}}" alt="Product"/>
                        </div>
                        <!-- Product Thumbnail End -->

                        <!-- Product Details Start -->
                        <div class="col-lg-7 mt-5 mt-lg-0">
                            <div class="product-details">
                                <h2>{{$actual->title}}</h2>

                                <span class="price">₦{{$actual->price}}</span>

                                <div class="product-info-stock-sku">
                                    <span class="product-stock-status">In Stock</span>
                                    <span class="product-sku-status ml-5"><strong>{{$actual->sku}}</strong></span>
                                </div>

                                <p class="products-desc">{{$actual->description}}</p>

                                <div class="product-quantity mt-5 d-flex align-items-center">
                                    <div class="quantity-field">
                                        <label for="qty">Qty</label>
                                        <input type="number" id="qty" min="1" max="100" value="1"/>
                                    </div>

                                    <a href="single-product.html" class="btn btn-add-to-cart">Add to cart</a>
                                </div>

                                <div class="product-btn-group d-none d-sm-block">
                                    <a href="single-product.html" class="btn btn-add-to-cart btn-whislist">+ Add to
                                        Wishlist</a>
                                    <a href="single-product.html" class="btn btn-add-to-cart btn-whislist">+Buy now</a>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details End -->
                    </div>
                </div>
            </div>
            <!-- Single Product Page Content End -->
        </div>
    </div>
</div>
<!--== Page Content Wrapper End ==-->

<!-- Footer Area Start -->
@include('partials.footer')
<!-- Footer Area End -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
@include('partials.js-script')
</body>

</html>
