<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
    Home
@endsection
@include('partials.head')
<!--== Head Area End ==-->

<body>

<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
@include('partials.search')
<!--== Search Box Area End ==-->

<!--== Banner // Slider Area Start ==-->
<section id="banner-area">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-12">
                <div id="banner-carousel" class="owl-carousel">
                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap slide-item-1">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>Rubby Store</h4>
                            <h2>Ring Solitaire Princess</h2>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            <a href="{{route('shop.layout')}}" class="btn-long-arrow">Shop Now</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->

                    <!-- Banner Single Carousel Start -->
                    <div class="single-carousel-wrap slide-item-2">
                        <div class="banner-caption text-center text-lg-left">
                            <h4>New Collection 2020</h4>
                            <h2>Beautiful Earrings</h2>
                            <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            <a href="{{route('shop.layout')}}" class="btn-long-arrow">Shop Now</a>
                        </div>
                    </div>
                    <!-- Banner Single Carousel End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Banner Slider End ==-->

<!--== About Us Area Start ==-->
<section id="aboutUs-area" class="about__2 pt-9">
    <div class="ruby-container">
        <div class="row">
            <div class="col-lg-5">
                <!-- About Image Area Start -->
                <div class="about-image-wrap">
                    <a href="about.html"><img src="assets/img/about-img-2.jpg" alt="About Us" class="img-fluid"/></a>
                </div>
                <!-- About Image Area End -->
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0">
                <!-- About Text Area Start -->
                <div class="about-content-wrap">
                    <h2>New Arrivals</h2>
                    <h3>Simple Jewelry</h3>
                    <h4 class="price"><sup>₦</sup>169,000</h4>
                    <div class="about-text">
                        <p>Claritas ested etiame processus dynamicus, qui sequitur mutationemeded consuetudium lectorum.
                            Mirum
                            esteded notareed quam littera gothica, quam nunc putamus parum claram, anteposuerit
                            litterarum
                            formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc
                            nobis videntur parum clari, fiant sollemnes in futurum.</p>

                        <p>Typi noni habented claritatem insitamed ested usused legentis in iis qui facit eorum
                            claritatem. Invese with a piece from our gorgeous ready-to-wear collection, featuring
                            beautifully crafted coats, dresses,.</p>

                        <a href="{{route('shop.layout')}}" class="btn btn-long-arrow">Shop Now</a>
                    </div>
                </div>
                <!-- About Text Area End -->
            </div>
        </div>
    </div>
</section>
<!--== About Us Area End ==-->

<!--== New Collection Area Start ==-->
<section id="new-collection-area" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>New Collection Products</h2>
                    <p>Best products on sale.</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="new-collection-tabs">

                    <!-- Tab Menu Area Start -->
                    <ul class="nav tab-menu-wrap" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="feature-products-tab" data-toggle="tab" href="#feature-products"
                               role="tab" aria-controls="feature-products-tab" aria-selected="true">Feature Products</a>
                        </li>
                        <li class="nav-item">
                            <a id="new-products-tab" data-toggle="tab" href="#new-products" role="tab"
                               aria-controls="new-products" aria-selected="false">New Products</a>
                        </li>
                        <li class="nav-item">
                            <a id="onsale-tab" data-toggle="tab" href="#onsale" role="tab" aria-controls="onsale"
                               aria-selected="false">Onsale</a>
                        </li>
                    </ul>
                    <!-- Tab Menu Area End -->

                    <!-- Tab Content Area Start -->
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="feature-products" role="tabpanel" aria-labelledby="feature-products-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    @foreach ($featured as $feature)
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{route('product.layout',['sku' => $feature->sku])}}">
                                            <img src="{{asset($feature->image)}}" alt="Products" class="img-fluid"></a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{route('product.layout',['sku' => $feature->sku])}}">{{$feature->title}}</a></h2>
                                            <span class="price">₦{{$feature->price}}</span>
                                            <a href="{{route('cart.add',['id' => $feature->id])}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">{{$feature->label}}</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#{{$feature->sku}}">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View">
                                                    <i class="fa fa-compress"></i>
                                                </span>
                                            </button>
                                            <a href="{{route('wishlist.add',['id' => $feature->sku])}}" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                               <i class="fa fa-heart-o"></i>
                                            </a>
                                        </div>
                                    </div>

                                    @endforeach
                                    <!-- Single Product Item -->

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="new-products" role="tabpanel" aria-labelledby="new-products-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    @foreach($new as $new_prod)
                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{route('shop.layout',['sku' => $new_prod->sku])}}">
                                            <img src="{{asset($new_prod->image)}}" alt="Products" class="img-fluid">
                                            </a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{route('shop.layout',['sku' => $new_prod->sku])}}">{{$new_prod->title}}</a></h2>
                                            <span class="price">₦{{$new_prod->price}}</span>
                                            <a href="{{route('shop.layout',['sku' => $new_prod->sku])}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge">{{$new_prod->label}}</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#{{$new_prod->sku}}">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                                        class="fa fa-compress"></i></span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="onsale" role="tabpanel" aria-labelledby="onsale-tab">
                            <div class="products-wrapper">
                                <div class="products-carousel owl-carousel">
                                    <!-- Single Product Item -->
                                    @foreach($sale as $sales)

                                    <div class="single-product-item text-center">
                                        <figure class="product-thumb">
                                            <a href="{{route('product.layout',['sku' => $sales->sku])}}">
                                                <img src="{{asset($sales->image)}}" alt="Products" class="img-fluid">
                                            </a>
                                        </figure>

                                        <div class="product-details">
                                            <h2><a href="{{route('product.layout',['sku' => $sales->sku])}}">{{$sales->title}}</a></h2>
                                            <span class="price">₦{{$sales->price}}</span>
                                            <a href="{{route('product.layout',['sku' => $sales->sku])}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                            <span class="product-bedge sale">{{$sales->label}}</span>
                                        </div>

                                        <div class="product-meta">
                                            <button type="button" data-toggle="modal" data-target="#{{$sales->sku}}">
                                                <span data-toggle="tooltip" data-placement="left" title="Quick View">
                                                    <i class="fa fa-compress"></i>
                                                </span>
                                            </button>
                                            <a href="wishlist.html" data-toggle="tooltip" data-placement="left"
                                               title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single Product Item -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Tab Content Area End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--== New Collection Area End ==-->


<!--== New Products Area Start ==-->
<section id="new-products-area" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>New Products</h2>
                    <p>Trending stunning Unique</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="products-wrapper">
                    <div class="new-products-carousel owl-carousel">

                        <!-- Single Product Item -->
                        @foreach ($new_product_display as $display)
                        <div class="single-product-item text-center">
                            <figure class="product-thumb">
                                <a href="single-product.html">
                                    <img src="{{asset($display->image)}}" alt="Products" class="img-fluid">
                                </a>
                            </figure>

                            <div class="product-details">
                                <h2><a href="{{route('product.layout', ['sku', $display->sku])}}">{{$display->title}}</a></h2>
                                <span class="price">₦{{$display->price}}</span>
                                <a href="{{route('product.layout', ['sku', $display->sku])}}" class="btn btn-add-to-cart">+ Add to Cart</a>
                                <span class="product-bedge sale">New</span>
                            </div>

                            <div class="product-meta">
                                <button type="button" data-toggle="modal" data-target="#{{$display->sku}}">
                                    <span data-toggle="tooltip" data-placement="left" title="Quick View"><i
                                            class="fa fa-compress"></i></span>
                                </button>
                                <a href="wishlist.html" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                    <i class="fa fa-heart-o"></i>
                                </a>
                            </div>
                        </div>
                        @endforeach
                        <!-- Single Product Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== New Products Area End ==-->

<!--== Testimonial Area Start ==-->
<section id="testimonial-area">
    <div class="ruby-container">
        <div class="testimonial-wrapper">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2>What People Say</h2>
                        <p>Testimonials</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-7 m-auto text-center">
                    <div class="testimonial-content-wrap">
                        <div id="testimonialCarousel" class="owl-carousel">
                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">Luis Manrata</h3>
                                <span class="client-email">you@email.here</span>
                            </div>

                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">John Dibba</h3>
                                <span class="client-email">you@email.here</span>
                            </div>

                            <div class="single-testimonial-item">
                                <p>These guys have been absolutely outstanding. When I needed them they came through in
                                    a big way! I know that if you buy this theme, you'll get the one thing we all look
                                    for when we buy on Themeforest, and that's real support for the craziest of
                                    requests!</p>

                                <h3 class="client-name">Alex Tuntuni</h3>
                                <span class="client-email">you@email.here</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Testimonial Area End ==-->

<!--== Newsletter Area Start ==-->
<section id="newsletter-area" class="p-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h2>Join The Newsletter</h2>
                    <p>Sign Up for Our Newsletter</p>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="newsletter-form-wrap">
                    <form id="subscribe-form" action="{{route('index.inputs')}}" method="POST">
                        @csrf
                        <input id="subscribe" type="email" name="subscribe" placeholder="Enter your Email  Here" required/>
                        <button type="submit" name="submit_mail" class="btn-long-arrow">Subscribe</button>
                    </form>
                </div>
            </div>


        @if (count($errors) > 0)
        <div class="alert alert-warning alert-dismissible fade show">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        </div>
    </div>
</section>
<!--== Newsletter Area End ==-->

<!-- Footer Area Start -->
@include('partials.footer')
<!-- Footer Area End -->


<!-- Start All Modal Content -->

    @php
        $featured = DB::table('products')->where('sku', $feature->sku)->get();
        $new = DB::table('products')->where('sku', $new_prod->sku)->get();
        $sale = DB::table('products')->where('sku', $sales->sku)->get();
        $new_product_display = DB::table('products')->where('sku', $display->sku)->get();
    @endphp

<!--== Product Quick View Modal Area Wrap ==-->
@include('partials.modal')
<!--== Product Quick View Modal Area End ==-->

<!-- End All Modal Content -->

<!-- Scroll to Top Start -->
<a href="#" class="scrolltotop"><i class="fa fa-angle-up"></i></a>
<!-- Scroll to Top End -->


<!--=======================Javascript============================-->
@include('partials.js-script')
</body>

</html>
