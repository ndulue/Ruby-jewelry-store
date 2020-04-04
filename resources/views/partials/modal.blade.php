<div class="modal fade" id="featured" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="quick-view-content single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail End -->
                        @foreach ($featured as $feature)
                            <!-- Product Details Start -->
                            <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                                <div class="product-details">
                                    <h2><a href="single-product.html">{{$feature->title}}</a></h2>

                                    <span class="price">{{$feature->price}}</span>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <span class="product-sku-status ml-5"><strong>{{$feature->sku}}</strong></span>
                                    </div>

                                    <p class="products-desc">{{$feature->description}}</p>

                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100" value="1"/>
                                        </div>

                                        <a href="cart.layout" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="new_prod" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="quick-view-content single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail End -->
                        @foreach($new as $new_prod)
                            <!-- Product Details Start -->
                            <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                                <div class="product-details">
                                    <h2><a href="single-product.html">{{$new_prod->title}}</a></h2>

                                    <span class="price">{{$new_prod->price}}</span>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <span class="product-sku-status ml-5"><strong>{{$new_prod->title}}</strong></span>
                                    </div>

                                    <p class="products-desc">{{$new_prod->description}}</p>

                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100" value="1"/>
                                        </div>

                                        <a href="cart.layout" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="sales" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="assets/img/cancel.png" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="quick-view-content single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail End -->
                        @foreach($sale as $sales)
                            <!-- Product Details Start -->
                            <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                                <div class="product-details">
                                    <h2><a href="single-product.html">{{$sales->title}}</a></h2>

                                    <span class="price">{{$sales->price}}</span>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <span class="product-sku-status ml-5"><strong>{{$sales->price}}</strong></span>
                                    </div>

                                    <p class="products-desc">{{$sales->description}}.</p>

                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100" value="1"/>
                                        </div>

                                        <a href="cart.layout" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="display" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="{{asset($display->image)}}" alt="Close" class="img-fluid"/></span>
            </button>
            <div class="modal-body">
                <div class="quick-view-content single-product-page-content">
                    <div class="row">
                        <!-- Product Thumbnail End -->
                        @foreach ($new_product_display as $display)
                            <!-- Product Details Start -->
                            <div class="col-lg-7 col-md-6 mt-5 mt-md-0">
                                <div class="product-details">
                                    <h2><a href="single-product.html">{{$display->title}}</a></h2>

                                    <span class="price">{{$display->price}}</span>

                                    <div class="product-info-stock-sku">
                                        <span class="product-stock-status">In Stock</span>
                                        <span class="product-sku-status ml-5"><strong>{{$display->sku}}</strong></span>
                                    </div>

                                    <p class="products-desc">{{$display->description}}</p>

                                    <div class="product-quantity d-flex align-items-center">
                                        <div class="quantity-field">
                                            <label for="qty">Qty</label>
                                            <input type="number" id="qty" min="1" max="100" value="1"/>
                                        </div>

                                        <a href="cart.layout" class="btn btn-add-to-cart">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Details End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
