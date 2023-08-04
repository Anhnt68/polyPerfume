@extends('layouts.client')

@section('content')
    <div class="block fullwidth full-nopad bottom-space">
        <div class="container">
            <!-- Main Slider -->
            <div class="mainSlider" data-thumb="true" data-thumb-width="230" data-thumb-height="100">
                <div class="sliderLoader">Loading...</div>
                <!-- Slider main container -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide" data-thumb="images/slider/slide-02-thumb.png" data-href="http://google.com"
                            data-target="_blank">
                            <!-- _blank or _self ( _self is default )-->
                            <div class="wrapper">
                                <figure><img src="{{ asset('assets/client/images/slider/slide-02.jpg') }}" alt="">
                                </figure>
                                <div class="text2-1 animate" data-animate="flipInY" data-delay="0">
                                    Seikō
                                </div>
                                <div class="text2-2 animate" data-animate="bounceIn" data-delay="500">
                                    Season sale </div>
                                <div class="text2-3 animate" data-animate="bounceIn" data-delay="1000">
                                    popular brands </div>
                                <div class="text2-4 animate" data-animate="rubberBand" data-delay="1500">
                                    70% </div>
                                <div class="text2-5 animate" data-animate="hinge" data-delay="2000">
                                    OFF
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-thumb="images/slider/slide-01-thumb.png">
                            <div class="wrapper">
                                <figure><img src="{{ asset('assets/client/images/slider/slide-01.jpg') }}" alt="">
                                </figure>
                                <div class="caption animate" data-animate="fadeIn">
                                    <div class="text1 animate" data-animate="flipInY" data-delay="0">
                                        Seikō
                                    </div>
                                    <div class="text2 animate" data-animate="bounceInLeft" data-delay="500">
                                        <strong>New</strong> collection
                                    </div>
                                    <div class="text3 animate" data-animate="bounceInLeft" data-delay="1500"> WOMEN'S
                                        <strong>FASHION</strong> </div>
                                    <div class="animate" data-animate="fadeIn" data-delay="2000">
                                        <!-- coolbutton -->
                                        <a href="#" class="cool-btn"
                                            style="-webkit-clip-path: url(#coolButton); clip-path: url(#coolButton);">
                                            <span>MORE</span> </a>
                                        <svg class="clip-svg">
                                            <defs>
                                                <clipPath id="coolButton" clipPathUnits="objectBoundingBox">
                                                    <polygon points="0 .18, .99 .15, .91 .85, .07 .8" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <!-- // coolbutton -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-thumb="images/slider/slide-03-thumb.png">
                            <div class="wrapper">
                                <figure><img src="{{ asset('assets/client/images/slider/slide-03.jpg') }}" alt="">
                                </figure>
                                <div class="text3-1 animate" data-animate="bounceInDown" data-delay="0">
                                    Street </div>
                                <div class="text3-2 animate" data-animate="bounceInDown" data-delay="500">
                                    Fashion </div>
                                <div class="text3-3 animate" data-animate="bounceInDown" data-delay="1000">
                                    And </div>
                                <div class="text3-4 animate" data-animate="bounceIn" data-delay="1500">
                                    Urban </div>
                                <div class="text3-5 animate" data-animate="bounceIn" data-delay="2000">
                                    Subcultures </div>
                                <a href="#" class="text3-6 animate" data-animate="rubberBand" data-delay="2500"> SHOP
                                    NOW </a>
                            </div>
                        </div>
                        <div class="swiper-slide" data-thumb="images/slider/slide-04-thumb.png">
                            <div class="wrapper">
                                <figure><img src="{{ asset('assets/client/images/slider/slide-04.jpg') }}" alt="">
                                </figure>
                                <div class="text4-1 animate" data-animate="bounceInLeft" data-delay="0">
                                    Summer</div>
                                <div class="text4-2 animate" data-animate="bounceInDown" data-delay="500">
                                    very soon</div>
                                <div class="text4-3 animate" data-animate="bounceInUp" data-delay="1000">
                                    Things to buy a swimsuit at a discount</div>
                                <a href="#" class="text4-4 animate" data-animate="bounceInLeft" data-delay="1500">SHOP
                                    NOW</a>
                            </div>
                        </div>
                    </div>
                    <!-- pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- pagination thumbs -->
                    <div class="swiper-pagination-thumbs">
                        <div class="thumbs-wrapper">
                            <div class="thumbs"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Main Slider -->
        </div>
    </div>
    <div class="block">
        <div class="container">
            <!-- Wellcome text -->
            <div class="text-center bottom-space">
                <h1 class="size-lg no-padding">WELCOME TO <span class="logo-font custom-color">PolyPerfume</span>
                    STORE</h1>
                <div class="line-divider"></div>
                <p class="custom-color-alt">Lorem ipsum dolor sit amet, ex eam mundi populo accusamus,
                    aliquam quaestio petentium te cum.
                    <br> Vim ei oblique tacimates, usu cu iudico graeco. Graeci eripuit inimicus vel eu, eu
                    mel unum laoreet splendide, cu integre apeirian has.
                </p>
            </div>
            <!-- /Wellcome text -->
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="box style2 bgcolor1 text-center">
                        <div class="box-icon"><i class="icon icon-truck"></i></div>
                        <h3 class="box-title">FREE SHIPPING</h3>
                        <div class="box-text">Free shipping on all orders over $199</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box style2 bgcolor2 text-center">
                        <div class="box-icon"><i class="icon icon-dollar"></i></div>
                        <h3 class="box-title">MONEY BACK</h3>
                        <div class="box-text">100% money back guarantee</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="box style2 bgcolor3 text-center">
                        <div class="box-icon"><i class="icon icon-help"></i></div>
                        <h3 class="box-title">ONLINE SUPPORT</h3>
                        <div class="box-text">Service support fast 24/7</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <h1>Danh mục</h1>
            <div class="row">
                @foreach ($model as $cate )
                <div class="col-3">
                    <img src="{{$cate->image}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h2 class="card-title">{{$cate->cate_name}}</h2>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="block">
        
        <div class="container">
            <h1>SẢN PHẨM</h1>
            <ul class="filters filters-product style2">
                {{-- <li><a href="#" class="filter-label">All<span class="count"></span></a></li>
                <li><a href="#" class="filter-label active" data-filter=".category1">New<span
                            class="count"></span></a></li>
                <li><a href="#" class="filter-label" data-filter=".category2">Sale<span class="count"></span></a>
                </li> --}}
            </ul>
            {{-- <div class="products-grid-wrapper isotope-wrapper"> products-grid isotope four-in-row product-variant-4 --}}
                <div class="row">
                    <!-- Product Item -->
                    <!-- /Product Item -->
                    <!-- Product Item -->
                    @foreach($data as $product)
                    <div class=" col-3" >
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h2 class="card-title" ><a style="color: #000000"
                            href="{{ route('product.detail', $product->id) }}"
                            class="product-item-link">{{ $product->name }}</a></h2>
                          <h3 class="card-text" style="color: red"  ><span class="price">{{ $product->stocks[0]->price }}đ</span></h3>
                          <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                            class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i
                            class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                            <button class="btn add-to-cart" data-product="789123"> <i class="icon icon-cart"></i><span>Add
                                to Cart</span> </button>
                        </div>
                    </div>
                    {{-- <div class="product-item large category1 col-4">
                        <div class="product-item-inside">
                            <div class="product-item-info">
                                <!-- Product Photo -->
                                <div class="product-item-photo">
                                    <!-- Product Label -->
                                    {{-- <div class="product-item-label label-new"><span>New</span></div> --}}
                                    <!-- /Product Label -->
                                    {{-- <div class="product-item-gallery">
                                        <!-- product main photo -->
                                        <div class="product-item-gallery-main">
                                            <a href="#"><img class="product-image-photo" src="{{ $product->image }}"
                                                    alt=""></a>
                                            <a href="quick-view.html" title="Quick View" class="quick-view-link quick-view-btn"> <i
                                                    class="icon icon-eye"></i><span>Quick View</span></a>
                                        </div>
                                        <!-- /product main photo  -->
                                    </div> --}}
                                    <!-- Product Actions -->
                                    {{-- <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                            class="icon icon-heart"></i><span>Add to Wishlist</span> </a>
                                    <div class="product-item-actions">
                                        <div class="share-button toBottom">
                                            {{-- <span class="toggle"></span> --}}
                                            {{-- <ul class="social-list">
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
                                </div> --}}
                                <!-- /Product Photo -->
                                <!-- Product Details -->
                                {{-- <div class="product-item-details">
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
                                </div> --}}
                                <!-- /Product Details -->
                            {{-- </div>
                        </div>
                    </div> --}}
                    @endforeach
                    <!-- /Product Item -->
                    <!-- Product Item -->
                    <!-- /Product Item -->
                </div>
            {{-- </div> --}}
        </div>
    </div>
    {{-- <div class="block banners-with-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <a href="#" class="banner-wrap">
                        <div class="banner style-17 autosize-text image-hover-scale" data-fontratio="4.6">
                            <img src="{{asset('assets/client/images/banners/banner_nuochoa.jpg')}}" alt="Banner">
                            <div class="banner-caption vertb horl">
                                <div class="vert-wrapper">
                                    <div class="vert">
                                        <div class="text-1">Fashion collection</div>
                                        <div class="text-2 text-hoverslide" data-hcolor="#ffffff">
                                            <span><span class="text">Underwear</span><span
                                                    class="hoverbg"></span></span>
                                        </div>
                                        <div class="text-3">To take a trivial example, which of us ever
                                            undtakes
                                            <br> laborious physical exercise
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#bannerLink" class="banner-wrap">
                        <div class="banner style-18 autosize-text image-hover-scale" data-fontratio="4.6">
                            <img src="{{asset('assets/client/images/banners/banner-1-theperfumevn.jpg')}}" alt="Banner">
                            <div class="banner-caption vertl horl">
                                <div class="vert-wrapper">
                                    <div class="vert">
                                        <div class="text-1">BIG STATMENT</div>
                                        <div class="text-2">AWESOME BRA</div>
                                        <div class="banner-btn text-hoverslide" data-hcolor="#fff">
                                            <span><span class="text">SPECIAL OFFERS</span><span
                                                    class="hoverbg"></span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-5">
                    <a href="#bannerLink" class="banner-wrap">
                        <div class="banner style-19 autosize-text image-hover-scale" data-fontratio="4.6">
                            <img src="{{asset('assets/client/images/banners/banner-nuoc-hoa.png')}}" alt="Banner">
                            <div class="banner-caption vertb horl">
                                <div class="vert-wrapper">
                                    <div class="vert">
                                        <div class="text-1">FASHION NIGHT</div>
                                        <div class="text-2">HAS ARRIVED</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="block bottom-space">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Blog Carousel -->
                    <div class="title">
                        <h2>From Blog</h2>
                        <div class="carousel-arrows"></div>
                    </div>
                    <!-- Blog Carousel Item -->
                    <div class="blog-carousel">
                        <div class="blog-item">
                            <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                    src="{{asset('assets/images/blog/blog-1.jpg')}}" alt="From Blog"> </a>
                            <div class="blog-item-info">
                                <a href="blog.html" class="blog-item-title">Inventore consectetur
                                    ullam</a>
                                <div class="blog-item-teaser">Repellat aspernatur esse minus. Molestiae
                                    ipsum earum, aspernatur fugit veniam ducimus doloremque repellat
                                    suscipit. Cumque!</div>
                                <div class="blog-item-links"> <span class="pull-left"> <span><a href="#"
                                                class="readmore">Read more</a></span>
                                    </span> <span class="pull-right"> <span>Post by <a href="#">Admin</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog Carousel Item -->
                        <!-- Blog Carousel Item -->
                        <div class="blog-item">
                            <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                    src="images/blog/blog-2.jpg" alt="From Blog"> </a>
                            <div class="blog-item-info">
                                <a href="blog.html" class="blog-item-title">Aperiam, vero facilis</a>
                                <div class="blog-item-teaser">Commodo delectus consequuntur consectetur
                                    culpa ea doloremque repellat laoreet semper tincidunt lorem Euismod
                                    euismod Suspendisse </div>
                                <div class="blog-item-links"> <span class="pull-left"> <span><a href="#"
                                                class="readmore">Read more</a></span>
                                    </span> <span class="pull-right"> <span>Post by <a href="#">Admin</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog Carousel Item -->
                        <!-- Blog Carousel Item -->
                        <div class="blog-item">
                            <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                    src="images/blog/blog-3.jpg" alt="From Blog"> </a>
                            <div class="blog-item-info">
                                <a href="blog.html" class="blog-item-title">Repellat aspernatur</a>
                                <div class="blog-item-teaser">Omnis, nihil hic ratione culpa atque ipsum
                                    repellat quaerat impedit, ipsam odio delectus consequuntur consectetur
                                    culpa ea doloremque repellat</div>
                                <div class="blog-item-links"> <span class="pull-left"> <span><a href="#"
                                                class="readmore">Read more</a></span>
                                    </span> <span class="pull-right"> <span>Post by <a href="#">Admin</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog Carousel Item -->
                        <!-- Blog Carousel Item -->
                        <div class="blog-item">
                            <a href="blog.html" class="blog-item-photo"> <img class="product-image-photo"
                                    src="images/blog/blog-4.jpg" alt="From Blog"> </a>
                            <div class="blog-item-info">
                                <a href="blog.html" class="blog-item-title">Commodo laoreet
                                    tincidunt</a>
                                <div class="blog-item-teaser">Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Animi provident earum minus delectus voluptatum
                                    asperiores consectetur culpa ea doloremque</div>
                                <div class="blog-item-links"> <span class="pull-left"> <span><a href="#"
                                                class="readmore">Read more</a></span>
                                    </span> <span class="pull-right"><span>Post by <a href="#">Admin</a></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- /Blog Carousel Item -->
                    </div>
                    <!-- /Blog Carousel -->
                </div>
                <div class="col-md-6">
                    <!-- Deal Carousel -->
                    <div class="title">
                        <h2 class="custom-color">Deal of the day</h2>
                        <div class="toggle-arrow"></div>
                        <div class="carousel-arrows"></div>
                    </div>
                    <div class="collapsed-content">
                        <div class="deal-carousel-2 products-grid product-variant-5">
                            <!-- Product Item -->
                            <div class="product-item large">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- product main photo -->
                                            <div class="product-item-gallery-main">
                                                <a href="#"><img class="product-image-photo"
                                                        src="images/products/product-19.jpg" alt=""></a>
                                                <a href="quick-view.html" title="Quick View"
                                                    class="quick-view-link quick-view-btn"> <i
                                                        class="icon icon-eye"></i><span>Quick
                                                        View</span></a>
                                            </div>
                                            <!-- /product main photo  -->
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>New</span>
                                            </div>
                                            <!-- /Product Label -->
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="wishlist active"> <i
                                                    class="icon icon-heart"></i><span>Add to
                                                    Wishlist</span>
                                            </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
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
                                                            <a href="#"
                                                                class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <!-- product carousel -->
                                            <div class="product-item-gallery-previews-wrapper">
                                                <div class="product-item-gallery-previews">
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-19.jpg"
                                                                data-image="images/products/product-19.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-19-1.jpg"
                                                                data-image="images/products/product-19-1.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-19-2.jpg"
                                                                data-image="images/products/product-19-2.jpg"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="images/products/product-19-3.jpg"
                                                                data-image="images/products/product-19-3.jpg"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="carousel-arrows"></div>
                                            </div>
                                            <!-- /product carousel -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"> <a title="Cover up tunic" href="product.html"
                                                    class="product-item-link">Cover
                                                    up
                                                    tunic</a></div>
                                            <div class="product-item-description">Neque porro quisquam
                                                est,
                                                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                velit, sed quia nonkdni numquam eius modi tempora incidunt
                                                ut labore</div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                        class="price-wrapper"> <span class="price">$110.00</span></span>
                                                </span>
                                            </div>
                                            <ul class="color-swatch hidden-xs">
                                                <li class="active">
                                                    <a data-image="images/products/product-19.jpg" href="#"><img
                                                            src="images/colorswatch/color-yellow.png" alt="Yellow"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-19-c1.jpg" href="#"><img
                                                            src="images/colorswatch/color-blue.png" alt="Blue"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-19-c2.jpg" href="#"><img
                                                            src="images/colorswatch/color-red.png" alt="Red"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-19-c3.jpg" href="#"><img
                                                            src="images/colorswatch/color-grey.png" alt="Grey"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-19-c4.jpg" href="#"><img
                                                            src="images/colorswatch/color-green.png" alt="Green"></a>
                                                </li>
                                                <li>
                                                    <a data-image="images/products/product-19-c5.jpg" href="#"><img
                                                            src="images/colorswatch/color-violet.png" alt="Violet"></a>
                                                </li>
                                            </ul>
                                            <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"> <i
                                                    class="icon icon-cart"></i><span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item large">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>New</span>
                                            </div>
                                            <!-- /Product Label -->
                                            <div class="product-item-gallery">
                                                <!-- product main photo -->
                                                <div class="product-item-gallery-main">
                                                    <a href="#"><img class="product-image-photo"
                                                            src="images/products/product-13.jpg" alt=""></a>
                                                    <a href="quick-view.html" title="Quick View"
                                                        class="quick-view-link quick-view-btn"> <i
                                                            class="icon icon-eye"></i><span>Quick
                                                            View</span></a>
                                                </div>
                                                <!-- /product main photo  -->
                                            </div>
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>Add to
                                                    Wishlist</span>
                                            </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
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
                                                            <a href="#"
                                                                class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"> <a title="Style Dome Men's Solid Red Color"
                                                    href="product.html" class="product-item-link">Style
                                                    Dome
                                                    Men's Solid Red Color</a> </div>
                                            <div class="product-item-description">Neque porro quisquam
                                                est,
                                                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                velit, sed quia nonkdni numquam eius modi tempora incidunt
                                                ut labore</div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                        class="price-wrapper"><span class="price">$359.00</span> </span>
                                                </span>
                                            </div>
                                            <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"> <i
                                                    class="icon icon-cart"></i><span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                            <!-- Product Item -->
                            <div class="product-item previews-3 large">
                                <div class="product-item-inside">
                                    <div class="product-item-info">
                                        <!-- Product Photo -->
                                        <div class="product-item-photo">
                                            <!-- Product Label -->
                                            <div class="product-item-label label-new"><span>New</span>
                                            </div>
                                            <div class="product-item-label label-sale"><span>-20%</span>
                                            </div>
                                            <!-- /Product Label -->
                                            <!-- product main photo -->
                                            <div class="product-item-gallery-main">
                                                <a href="#"><img class="product-image-photo"
                                                        src="{{asset('assets/client/images/products/product-11.jpg')}}" alt=""></a>
                                                <a href="quick-view.html" title="Quick View"
                                                    class="quick-view-link quick-view-btn"> <i
                                                        class="icon icon-eye"></i><span>Quick
                                                        View</span></a>
                                            </div>
                                            <!-- /product main photo  -->
                                            <!-- Product Actions -->
                                            <a href="#" title="Add to Wishlist" class="no_wishlist"> <i
                                                    class="icon icon-heart"></i><span>Add to
                                                    Wishlist</span>
                                            </a>
                                            <div class="product-item-actions">
                                                <div class="share-button toBottom">
                                                    <span class="toggle"></span>
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
                                                            <a href="#"
                                                                class="icon icon-twitter-logo twitter"></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="icon icon-facebook-logo facebook"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- /Product Actions -->
                                            <!-- product carousel -->
                                            <div class="product-item-gallery-previews-wrapper">
                                                <div class="product-item-gallery-previews">
                                                    <div class="item">
                                                        <a href="#"><img src="{{asset('assets/client/images/products/product-11.jpg')}}"
                                                                data-image="{{asset('assets/client/images/products/product-11.jpg')}}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="{{asset('assets/client/images/products/product-11.jpg')}}"
                                                                data-image="{{asset('assets/client/images/products/product-11.jpg')}}"
                                                                alt=""></a>
                                                    </div>
                                                    <div class="item">
                                                        <a href="#"><img src="{{asset('assets/client/images/products/product-11.jpg')}}"
                                                                data-image="{{asset('assets/client/images/products/product-11.jpg')}}"
                                                                alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="carousel-arrows"></div>
                                            </div>
                                            <!-- /product carousel -->
                                        </div>
                                        <!-- /Product Photo -->
                                        <!-- Product Details -->
                                        <div class="product-item-details">
                                            <div class="product-item-name"> <a title="Boyfriend Shorts Denim"
                                                    href="product.html" class="product-item-link">Boyfriend Shorts
                                                    Denim</a>
                                            </div>
                                            <div class="product-item-description">Neque porro quisquam
                                                est,
                                                qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                                                velit, sed quia nonkdni numquam eius modi tempora incidunt
                                                ut labore</div>
                                            <div class="price-box"> <span class="price-container"> <span
                                                        class="price-wrapper"> <span class="old-price">$190.00</span>
                                                        <span class="special-price">$149.00</span> </span>
                                                </span>
                                            </div>
                                            <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i
                                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i>
                                            </div>
                                            <button class="btn add-to-cart" data-product="789123"> <i
                                                    class="icon icon-cart"></i><span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <!-- /Product Details -->
                                    </div>
                                </div>
                            </div>
                            <!-- /Product Item -->
                        </div>
                    </div>
                    <!-- /Deal Carousel -->
                </div>
            </div>
        </div>
    </div> --}}
    <div class="block fullwidth full-nopad" style="margin-top: 50px">
        <div class="container">
            <div id="instafeed" class="instagramm-feed-full"></div>
            <div class="instagramm-title">Instagram Feed</div>
        </div>
    </div>
@endsection
