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
                                        <strong>FASHION</strong>
                                    </div>
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
                @foreach ($model as $cate)
                    <div class="col-3">
                        <img src="{{ $cate->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title" style="text-transform: none">{{ $cate->cate_name }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="block">

        <div class="container">
            <h1>SẢN PHẨM</h1>
            {{-- <div class="products-grid-wrapper isotope-wrapper"> products-grid isotope four-in-row product-variant-4 --}}
            <div class="row" style="margin-bottom: 24px">
                <!-- Product Item -->
                <!-- /Product Item -->
                <!-- Product Item -->
                @foreach ($data as $product)
                    <div class=" col-3">
                        <img src="{{ $product->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title" style="text-transform: none"><a style="color: #000000"
                                    href="{{ route('product.detail', $product->id) }}"
                                    class="product-item-link">{{ $product->name }}</a></h2>
                            <h3 class="card-text" style="color: red"><span
                                    class="price">{{ number_format($product->stocks[0]->price, 0, '', ',') }}đ</span></h3>
                            <div class="product-item-rating"> <i class="icon icon-star-fill"></i><i
                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i><i
                                    class="icon icon-star-fill"></i><i class="icon icon-star-fill"></i></div>
                        </div>
                    </div>
                @endforeach
                <!-- /Product Item -->
                <!-- Product Item -->
                <!-- /Product Item -->
            </div>
            {{-- </div> --}}
        </div>
    </div>
    <div class="block banners-with-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <a href="#" class="banner-wrap">
                        <div class="banner style-17 autosize-text image-hover-scale" data-fontratio="4.6">
                            <img src="{{ asset('assets/client/images/banners/banner_nuochoa.jpg') }}" alt="Banner">
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
                            <img src="{{ asset('assets/client/images/banners/banner-1-theperfumevn.jpg') }}"
                                alt="Banner">
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
                            <img src="{{ asset('assets/client/images/banners/banner-nuoc-hoa.png') }}" alt="Banner">
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
    </div>
    <div class="block fullwidth full-nopad" style="margin-top: 50px">
        <div class="container">
            <div id="instafeed" class="instagramm-feed-full"></div>
            <div class="instagramm-title">Instagram Feed</div>
        </div>
    </div>
@endsection
