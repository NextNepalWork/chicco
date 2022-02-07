<!-- //header style One-->
<?php
$categories = App\Models\Admin\Category::inRandomOrder()
    ->with('detail')
    ->whereHas('my_products')
    ->with('my_products')
    ->with('subcategory')
    ->whereHas('subcategory')
    ->take(12)
    ->get();
?>

<style>
    #top-cart-product-template .top-cart-product-id .item-thumb .image img {
        max-height: 80px;
        min-height: 80px;
        object-fit: contain;
        object-position: center;
        width: 100%;

    }

    /* .dropdown-menu .shopping-cart-items {
        overflow-y: scroll;
        height: 350px;
        width: 320px;
    } */

    .dropdown-menu .shopping-cart-items li {

        border-bottom: 1px solid #dddddd;

    }

</style>
<section id="navigation-wrapper" class="navigation-wrap fixed-top">
    <div class="container" style="max-width:1290px">
        <div class="row">
            <div class="main-header-wrapper col-xl-12 col-lg-12 col-md-6 col-6 m-auto">
                <div class="main-header row py-2">
                    <div class="col-xl-4 col-md-4 col-2 m-auto">
                        <div class=" list">
                            <ul class="navbar-nav mr-auto d-flex flex-row">
                                <li class="nav-item active px-2">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#searchmodal">
                                        <span class="mr-1"><i class="fa fa-search"
                                                aria-hidden="true"></i></span>
                                        <label class="mb-0">Search</label></a>
                                </li>
                                <li class="nav-item px-2 ">
                                    <a class="nav-link" href="{{ url('/shop') }}"> <span
                                            class="mr-1"><i class="fas fa-store" aria-hidden="true"></i>
                                        </span>
                                        Shops</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-8 m-auto">
                        <a href="{{ url('/') }}">
                            <div class="logo text-center">
                                <img src="{{ isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}" alt="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-4 m-auto d-md-block d-none">
                        <div class="notice">
                            {{-- <a class="nav-link m-0">BOPPY HUG&NEST - SAFETY NOTICE</a> --}}
                                <div class="notice d-flex  justify-content-center align-items-center">
                                    <ul class="pro-header-right-options d-flex pl-0 mb-0">
                                        <li>
                                            <a href="{{ url('/wishlist') }}" class="nav-link btn" data-toggle="tooltip"
                                                data-placement="bottom" title="Wishlist">
                                                <i class="far fa-heart" aria-hidden="true"></i>
                                                <sup class="badge-secondary wishlist-count rounded"></sup>
                                                {{-- <span class="badge badge-secondary wishlist-count"></span> --}}
                                            </a>
                                        </li>
                                        <li class="show">
                                            <div class="btn nav-link" type="button" id="headerOneCartButton" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <div class="cart-left">
                                                    <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                                                    {{-- <span class="badge badge-secondary total-menu-cart-product-count"></span> --}}
                                                    <sup class="badge-secondary total-menu-cart-product-count rounded"></sup>
                                                </div>
                
                
                                            </div>
                
                                            <template id="top-cart-product-template">
                                        <li class="top-cart-product-id d-flex justify-content-between align-items-center mb-2 pb-2"
                                            style="border-bottom:1px solid #dddddd;">
                                            <div class="item-thumb w-25">
                
                                                <div class="image mr-2">
                                                    <img class="img-fluid top-cart-product-image" src="" alt="Product Image"
                                                        style="width:100%;max-height:60px;min-height:60px;object-fit:contain;">
                                                </div>
                                            </div>
                                            <div class="item-detail d-flex w-75 flex-column">
                                                <h3 class="top-cart-product-name"></h3>
                                                <div
                                                    class="item-s top-cart-product-qty-amount d-flex justify-content-between align-items-center mb-1">
                                                </div>
                                            </div>
                                            {{-- <div class="remove-item">
                
                                            </div> --}}
                                        </li>
                                        </template>
                                        <template id="top-cart-product-total-template">
                                       <div class="cart-popup-wrap-total">
                                        <div class="text-center py-2">
                                            <span class="item-summary">{{ trans('lables.header-total') }}&nbsp;:&nbsp;<span
                                                    class="top-cart-product-total"></span>
                                            </span>
                                        </div>
                                        <div>
                                            <a class="btn btn-link btn-block text-dark"
                                                href="{{ url('/cart') }}"><span class="mr-2"><i class="fas fa-shopping-bag" aria-hidden="true"></i></span>{{ trans('lables.header-view-cart') }}</a>
                                            <a class="btn btn-secondary btn-block swipe-to-top py-2"
                                                href="{{ url('/checkout') }}">{{ trans('lables.header-checkout') }}</a>
                                        </div>
                                       </div>
                                        </template>
                                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="headerOneCartButton"
                                            style="position: absolute; transform: translate3d(30px, 39px, 0px); top: 0px; left: 0px; will-change: transform;"
                                            x-placement="bottom-end">
                                            <ul class="shopping-cart-items top-cart-product-show p-3">
                                                
                                            </ul>
                                            <div class="top-cart-product-show1">

                                            </div>
                                        </div>
                                        </li>
                                    </ul>
                                    <div class="login-wrapper auth-login">
                                        <a class="nav-link dropdown-toggle" href="#" id="loginDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="welcomeUsername"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="loginDropdown">
                                            <a class="dropdown-item userDashboard" href="{{ url('/profile') }}"
                                                title="Dashboard">Dashboard</a>
                                            <a class="dropdown-item" href="{{ url('/wishlist') }}"
                                                title="{{ trans('lables.header-wishlist') }}">{{ trans('lables.header-wishlist') }}</a>
                                            {{-- <a class="dropdown-item" href="{{ url('/compare') }}"
                                                title="{{ trans('lables.header-compare') }}">{{ trans('lables.header-compare') }}</a> --}}
                                            <a class="dropdown-item" href="{{ url('/orders') }}"
                                                title="{{ trans('lables.header-order') }}">{{ trans('lables.header-order') }}</a>
                                            <a class="dropdown-item log_out" href="javascript:void(0)"
                                                title="{{ trans('lables.header-logout') }}">{{ trans('lables.header-logout') }}</a>
                                        </div>
                                    </div>
                                    <div class="login-wrapper without-auth-login">
                                        <a class="nav-link" href="{{ url('/login') }}">
                                            {{ trans('lables.header-login-register') }}
                                        </a>
                
                                    </div>
                                    {{-- Cart Here --}}
                                </div>
                          
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-nav-wrapper col-12">
                <nav class="navbar navbar-expand-lg navbar-light py-0">
                    <button type="button" class="btn navbar-btn border-0" data-toggle="modal"
                        data-target="#sidebarmodal">

                        <div></div>
                        <div></div>
                        <div></div>
                    </button>

                    <div class="collapse navbar-collapse" id="togglernavbar">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle1 font-weight-bold d-block" href="javascript:void(0);"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Products
                                    <span class="ml-1 icon">
                                        <i class="fa fa-chevron-down toggleico" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="mynav dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container d-block">
                                        <div class="row">
                                            @if (isset($categories))
                                                
                                            @foreach ($categories as $key => $category)
                                                <div class="col-xl-3 col-lg-3 col-6">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link head font-weight-bold"
                                                                href="/shop?category={{ $category->id }}">{{ $category->detail[0]->category_name }}</a>
                                                        </li>
                                                        @if (!$category->subcategory->isEmpty())
                                                            @foreach ($category->subcategory as $sub => $value)
                                                                <li class="nav-item p-0">
                                                                    <a class="nav-link" href="/shop?category={{ $value->id }}"> {{ $value->detail[0]->category_name }}</a>
                                                                </li>
                                                            @endforeach
                                                        @endif


                                                    </ul>

                                                </div>
                                            @endforeach
                                            @else
                                                
                                            @endif

                                        </div>
                                    </div>
                                    <!--  /.container  -->
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ url('/research-center') }}">Chicco Research Center</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ url('/about-us') }}">Who we are</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</section>

<!--Sidebar Modal -->
<div class="modal left fade" id="sidebarmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header p-0">
                <div class="modal-header text-center m-auto border-0">
                    <h5 class="modal-title" id="modal1">
                        <img src="{{ asset('frontend/image/logo/logo.png') }}" alt="logo" class="img-fluid">
                    </h5>
                </div>
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pt-0 pb-0">
                <div class="row">
                    <div class="col-12">
                        <nav id="column_left">
                            <ul class="nav nav-list">
                                <li class="main-list">
                                    <a class="accordion-heading" data-toggle="collapse" data-target="#submenu1">
                                        <span class="nav-header-primary nav-link dropdown-toggle d-block p-0">Products
                                            <span class="ml-1 icon">
                                                <i class="fa fa-chevron-down toggleico" aria-hidden="true"></i>

                                            </span>
                                            <span class="pull-right"><b class="caret"></b></span></span>
                                    </a>
                                    <ul class="collapse pl-0" id="submenu1">
                                        @if (isset($categories))
                                            @foreach ($categories as $vey => $category)
                                                <li>
                                                    <a class="accordion-heading dropdown-toggle" data-toggle="collapse"
                                                        data-target="#submenu11"
                                                        aria-expanded="true">{{ $category->detail[0]->category_name }}

                                                        <span class="pull-right"><b
                                                                class="caret"></b></span></a>
                                                    <ul class="collapse pl-0" id="submenu11">

                                                        @foreach ($category->my_products->take(3) as $value)
                                                            <li><a href="/shop?category={{ $value->id }}"
                                                                    title="Title">{{ $value->detail[0]->title }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            @endforeach
                                        @endif


                                    </ul>
                                </li>
                                <li class="main-list">
                                    <a class="accordion-heading" href="{{ url('/research-center') }}">
                                        <span class="nav-header-primary nav-link d-block p-0">Chicco Research Center
                                            <span class="pull-right"><b class="caret"></b></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="main-list">
                                    <a class="accordion-heading" href="{{ url('/about-us') }}">
                                        <span class="nav-header-primary nav-link  d-block p-0">Who we are
                                            <span class="pull-right"><b class="caret"></b></span>
                                        </span>
                                    </a>

                                    <!-- 
                                    <ul class="nav nav-list collapse" id="submenu3">
                                        <li>
                                            <a class="accordion-heading dropdown-toggle2" data-toggle="collapse"
                                                data-target="#submenu3">Sub Menu Link
                                                <span class="ml-1 icon">
                                                    <i class="fa fa-chevron-down toggleico2" aria-hidden="true"></i>

                                                </span>
                                                <span class="pull-right"><b class="caret"></b></span></a>
                                            <ul class="nav nav-list collapse" id="submenu2">
                                                <li><a href="#" title="Title">Sub Sub Menu Link</a></li>
                                                <li><a href="#" title="Title">Sub Sub Menu Link</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="main-list">
                                    <a class="accordion-heading" href="{{ url('/shop') }}">
                                        <span class="nav-header-primary nav-link  d-block p-0">
                                            <span class="mr-2"><i class="fa fa-map-marker"
                                                    aria-hidden="true"></i></span>

                                            Shop
                                            <!-- <span class="ml-1 icon">
                                                <i class="fa fa-chevron-down toggleico" aria-hidden="true"></i>

                                            </span> -->
                                            <span class="pull-right"><b class="caret"></b></span>
                                        </span>
                                    </a>


                                    <!-- <ul class="nav nav-list collapse" id="submenu4">
                                        <li>
                                            <a class="accordion-heading" data-toggle="collapse"
                                                data-target="#submenu42">Sub Menu Link
                                                <span class="ml-1 icon">
                                                    <i class="fa fa-chevron-down toggleico2" aria-hidden="true"></i>

                                                </span>
                                                <span class="pull-right"><b class="caret"></b></span>
                                            </a>
                                            <ul class="nav nav-list collapse" id="submenu41">
                                                <li><a href="#" title="Title">Sub Sub Menu Link</a></li>
                                                <li><a href="#" title="Title">Sub Sub Menu Link</a></li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>

                            </ul>

                        </nav>

                    </div>



                </div>
            </div>

        </div><!-- modal-content -->
    </div>
</div>
<!--Sidebar modal -->
