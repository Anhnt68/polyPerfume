@extends('layouts.client')
@section('content')
    <style>
        .row {0;
            padding-left: 50px;
            margin: 50px 
        }
    </style>
    <div class="row">
        @foreach ($data as $product)
            <div class="product-item large category1 col-4">
                <div class="product-item-inside">
                    <div class="product-item-info">
                        <!-- Product Photo -->
                        <div class="product-item-photo">
                            <!-- Product Label -->
                            {{-- <div class="product-item-label label-new"><span>New</span></div> --}}
                            <!-- /Product Label -->
                            <div class="product-item-gallery">
                                <!-- product main photo -->
                                <div class="product-item-gallery-main">
                                    <a href="#"><img class="product-image-photo" src="{{ $product->image }}"
                                            alt=""></a>
                                    <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i
                                            class="icon icon-eye"></i><span>Quick View</span></a>
                                </div>
                                <!-- /product main photo  -->
                            </div>
                            <!-- Product Actions -->
                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                    class="icon icon-heart"></i><span>Add to Wishlist</span> </a>
                            <div class="product-item-actions">
                                <div class="share-button toBottom">
                                    {{-- <span class="toggle"></span> --}}
                                    <ul class="social-list">
                                        <li>
                                            <a href="#" class="icon icon-google google"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-fancy fancy"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Product Actions -->
                        </div>
                        <!-- /Product Photo -->
                        <!-- Product Details -->
                        <div class="product-item-details">
                            <div class="product-item-name"> <a title="Longline  asymmetric midi skirt"
                                    href="{{ route('product.detail', $product->id) }}"
                                    class="product-item-link">{{ $product->name }}</a>
                            </div>
                            <div class="product-item-description">Neque porro quisquam est, qui
                                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed
                                quia nonkdni numquam eius modi tempora incidunt ut labore</div>
                            <div class="price-box"> <span class="price-container"> <span class="price-wrapper">
                                        <span class="price">{{ $product->stocks[0]->price }}đ</span></span>
                                </span>
                            </div>
                            <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i
                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                            <button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add
                                    to Cart</span> </button>
                        </div>
                        <!-- /Product Details -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
