<style>
    a:hover {
        text-decoration: none;
    }
</style>
<header class="page-header fullboxed variant-9 sticky always">
    <!-- Header Top Row -->
    <div class="header-top-row">
        <div class="container">
            <div class="header-top-left">
                <div class="header-custom-text">
                    <ul class="social-list-simple small">
                        <li>
                            <a href="#" class="icon icon-google google"></a>
                        </li>
                        <li>
                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                        </li>
                    </ul>
                </div>
                <div class="header-custom-text">
                    <span><i class="icon icon-phone"></i> +7 849 55 4267</span>
                    <span class="hidden-xs"><i class="icon icon-location"></i> 8901 Marmora Road, 64 GR,
                        New
                        York</span>
                </div>
            </div>
            <div class="header-top-right">
                <!-- Header Links -->
                <div class="header-links">
                    <!-- Header Language -->
                    <div class="header-link header-select dropdown-link header-language">
                        <a href="#"><img src="images/flags/eng.png" alt /></a>
                        <ul class="dropdown-container">
                            <li class="active">
                                <a href="#"><img src="images/flags/eng.png" alt />English</a>
                            </li>
                            <li>
                                <a href="#"><img src="images/flags/fr.png" alt />French</a>
                            </li>
                            <li>
                                <a href="#"><img src="images/flags/den.png" alt />German</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /Header Language -->
                    <!-- Header Currency -->
                    <div class="header-link header-select dropdown-link header-currency">
                        <a href="#">USD</a>
                        <ul class="dropdown-container">
                            <li><a href="#"><span class="symbol">€</span>EUR</a></li>
                            <li class="active"><a href="#"><span class="symbol">$</span>USD</a>
                            </li>
                            <li><a href="#"><span class="symbol">£</span>GBP</a></li>
                        </ul>
                    </div>
                    <!-- /Header Currency -->
                </div>
                <!-- /Header Links -->
            </div>
        </div>
    </div>
    </div>
    <!-- /Header Top Row -->
    <div class="navbar">
        <div class="container">
            <!-- Menu Toggle -->
            <div class="menu-toggle"><a href="#" class="mobilemenu-toggle"><i class="icon icon-menu"></i></a>
            </div>
            <!-- /Menu Toggle -->
            <div class="header-right-links">
                <div class="collapsed-links-wrapper">
                    <div class="collapsed-links">
                        <!-- Header Links -->
                        <div class="header-links">
                            <!-- Header WishList -->
                            <div class="header-link">
                                <a href="{{ route('bill.bill') }}"><i class="icon icon-heart"></i><span
                                        class="badge">3</span><span class="link-text">Đơn hàng</span></a>
                            </div>
                            <!-- Header WishList -->
                            <!-- Header Account -->
                            <div class="header-link dropdown-link header-account">
                                @if (Auth::user())
                                    <li class="nav-item dropdown" style="list-style:none; margin-top:20px">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                            role="button" aria-expanded="false"
                                            style="margin-top: 20px; font-size: 20px; font-weight: bold">{{ Auth::user()->name }}</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                        <span>Log Out</span>
                                                    </x-dropdown-link>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @else
                                    <div class="header-link">
                                    </div>
                                    <a href="{{ route('loginUser') }}"><i class="icon icon-user"></i><span
                                            class="bad"></span><span class="link-text">Login</span></a>
                                @endif

                            </div>
                            <!-- /Header Account -->
                        </div>
                        <!-- /Header Links -->
                        <!-- Header Cart -->
                        <div class="header-link dropdown-link header-cart variant-1">
                            <a href="{{ route('view-cart') }}"> <i class="icon icon-cart"></i> <span
                                    class="badge">3</span><span class="link-text">Giỏ hàng</span></a>
                        </div>
                    </div>
                </div>
                <!-- Header Search -->

                <!-- /Header Search -->
            </div>
            <!-- Logo -->
            <div class="header-logo">
                <a href="{{ route('home') }}" title="Logo">
                    <h1 class="size-lg no-padding"><span class="logo-font custom-color">PolyPerfume</span></h1>
                </a>
            </div>
            <!-- /Logo -->
            <!-- Mobile Menu -->

            <!-- Mobile Menu -->
            <!-- Mega Menu -->
            <div class="header-link header-search header-search">

            </div>
            <div class="megamenu fadein blackout">
                <ul class="nav">
                    {{-- <li><a href="index-2.html" title=""><i class="icon icon-home"></i></a></li> --}}
                    <form action="{{ route('product.search') }}" style="margin-top: 18px " method="post">
                        @csrf
                        <input type="text" name="search" class=""placeholder="Search here ..."
                            style="height:40px; width: 200px; margin-right: 20px ; border-radius: 5px"><button
                            class="btn" style="height:40px">Tìm kiếm</button>
                    </form>
                </ul>

            </div>

            <!-- /Mega Menu -->
        </div>
    </div>
</header>
