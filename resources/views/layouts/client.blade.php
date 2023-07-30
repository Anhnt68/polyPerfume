<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from frontend.big-skins.com/seiko/html/index-bg-white.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Jul 2023 13:38:42 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seikō HTML 5 eCommerce Responsive Theme</title>
    <meta name="author" content="SEIKO">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Vendor -->
    <link href="{{ asset('assets/client/js/vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/js/vendor/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/js/vendor/swiper/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/js/vendor/magnificpopup/dist/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/js/vendor/nouislider/nouislider.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/js/vendor/darktooltip/dist/darktooltip.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/animate.css') }}" rel="stylesheet">

    <!-- Custom -->
    <link href="{{ asset('assets/client/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/megamenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/css/tools.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/client/fonts/icomoon-reg/style.css') }}" rel="stylesheet">


    <!-- Icon Font -->
    {{-- <link href="fonts/icomoon-reg/style.css" rel="stylesheet"> --}}

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:100,100i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-88345127-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>

<body class="boxed bg-white">
    <div id="wrapper">
        <!-- Page -->
        <div class="page-wrapper">
            <!-- Header -->
            @include('client.blocks.header')
            <!-- /Header -->
            <!-- Sidebar -->
            <div class="sidebar-wrapper">
                <div class="sidebar-top"><a href="#" class="slidepanel-toggle"><i
                            class="icon icon-left-arrow-circular"></i></a></div>
                <ul class="sidebar-nav">
                    <li> <a href="index-2.html">HOME</a> </li>
                    <li> <a href="gallery.html">GALLERY</a> </li>
                    <li> <a href="blog.html">BLOG</a> </li>
                    <li> <a href="category-fixed-sidebar.html">SHOP</a> </li>
                    <li> <a href="faq.html">FAQ</a> </li>
                    <li> <a href="contact.html">CONTACT</a> </li>
                </ul>
                <div class="sidebar-bot">
                    <div class="share-button toTop">
                        <span class="toggle"></span>
                        <ul class="social-list">
                            <li><a href="#" class="icon icon-google google"></a></li>
                            <li><a href="#" class="icon icon-fancy fancy"></a></li>
                            <li><a href="#" class="icon icon-pinterest pinterest"></a></li>
                            <li><a href="#" class="icon icon-twitter-logo twitter"></a></li>
                            <li><a href="#" class="icon icon-facebook-logo facebook"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->
            <!-- Page Content -->
            <main class="page-main">
                @yield('content')
            </main>
            <!-- /Page Content -->
            <!-- Footer -->
            @include('client.blocks.footer')
            <!-- /Footer -->
        </div>
        <!-- /Page -->
    </div>
    <!-- ProductStack -->

    </div>
    <!-- /Modal Quick View -->

    <!-- jQuery Scripts  -->
    <script src="{{ asset('assets/client/js/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/parallax/parallax.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/magnificpopup/dist/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/ez-plus/jquery.ez-plus.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/tocca/tocca.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/bootstrap-tabcollapse/bootstrap-tabcollapse.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/scrollLock/jquery-scrollLock.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/darktooltip/dist/jquery.darktooltip.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/vendor/instafeed/instafeed.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/megamenu.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/tools.min.js') }}"></script>
    <script src="{{ asset('assets/client/js/app.js') }}"></script>

</body>

</html>
