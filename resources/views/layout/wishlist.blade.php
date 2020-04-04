<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!--== Head Area Start ==-->
@section('head')
Wishlist
@endsection
@include('partials.head')
<!--== Head Area Start ==-->

<body>
<!--== Header Area Start ==-->
@include('partials.header')
<!--== Header Area End ==-->

<!--== Search Box Area Start ==-->
@include('partials.search')
<!--== Search Box Area End ==-->

<!--== Page Title Area Start ==-->
@section('title')
Wishlist
@endsection
@include('partials.title')
<!--== Page Title Area End ==-->

<!--== Page Content Wrapper Start ==-->
<div id="page-content-wrapper" class="p-9">
    <div class="container">
        <!-- Wishlist Page Content Start -->
        <div class="row">
            <div class="col-lg-12">
                <!-- Wishlist Table Area -->
                <div class="cart-table table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="pro-thumbnail">Thumbnail</th>
                            <th class="pro-title">Product</th>
                            <th class="pro-price">Price</th>
                            <th class="pro-quantity">Stock Status</th>
                            <th class="pro-subtotal">Add to Cart</th>
                            <th class="pro-remove">Remove</th>
                        </tr>
                        </thead>
                        <tbody>

                            @foreach ($item as $items)
                                <tr>
                                    <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{$items->image}}" alt="Product"/></a></td>
                                    <td class="pro-title"><a href="#">{{$items->title}}</a></td>
                                    <td class="pro-price"><span>${{items->price}}</span></td>
                                    <td class="pro-quantity"><span class="text-success">In Stock</span></td>
                                    <td class="pro-subtotal"><a href="{{route('cart.add',['sku' => $items->id])}}" class="btn-add-to-cart">Add to Cart</a></td>
                                    <td class="pro-remove"><a href="{{route('wishlist.delete',['sku' => $items->sku])}}"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Wishlist Page Content End -->
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
@include('partials.js-scripts')
</body>

</html>
