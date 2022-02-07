<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>UrbarBazaar</title>
    <meta name="description" content="online shoping in nepal">
    <meta name="keywords" content="urbarbazaar. shopping">
    <meta name="author" content="">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="/gallary/202111102025icon.png">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/animate.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/style.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/responsive.css">
    <!--========================================= NEW LINK START  -->
    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://127.0.0.1:8000/frontend/css/slick.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <meta name="csrf-token" content="h8zTyyf9Eo9cPRI3prejUwFmeRre3scvWCZoEldR">
    <style>
        #top-cart-product-template .top-cart-product-id .item-thumb .image img {
            max-height: 80px;
            min-height: 80px;
            object-fit: contain;
            object-position: center;
            width: 100%;

        }

        .dropdown-menu .shopping-cart-items {
            overflow-y: scroll;
            height: 350px;
            width: 320px;
        }

        .dropdown-menu .shopping-cart-items li{

            border-bottom: 1px solid #dddddd;

        }
    </style>
</head>

<body class="animation-s1  ">



    <section id="page-wrapper">
        <!-- //header style One-->
        <section id="navigation-wrapper" class="navigation-wrap fixed-top">
            <div class="container">
                <div class="main-header row py-2">
                    <div class="col-4 m-auto">
                        <div class=" list">
                            <ul class="navbar-nav mr-auto d-flex flex-row">
                                <li class="nav-item active px-2">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#searchmodal">
                                        <span class="mr-1"><i class="fa fa-search"
                                                aria-hidden="true"></i></span>
                                        <label class="mb-0">Search</label></a>
                                </li>
                                <li class="nav-item px-2">
                                    <a class="nav-link" href="/shop"> <span class="mr-1"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i>
                                        </span>
                                        Shops</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-4 m-auto">
                        <div class="logo text-center">
                            <img src="/gallary/202110315505urbar.png" alt="UrbarBazaar" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-4 without-auth-login p-0">
                        <div class="notice d-flex  justify-content-center align-items-center">

                            <div class="login-wrapper">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Login / Register
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                            <ul class="pro-header-right-options d-flex pl-0 mb-0">
                                <li>
                                    <a href="http://127.0.0.1:8000/wishlist" class="btn"
                                        data-toggle="tooltip" data-placement="bottom" title="Wishlist">
                                        <i class="far fa-heart" aria-hidden="true"></i>
                                        <span class="badge badge-secondary wishlist-count">0</span>
                                    </a>
                                </li>
                                <li class="show">
                                    <div class="btn " type="button" id="headerOneCartButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <div class="cart-left">
                                            <i class="fas fa-shopping-bag" aria-hidden="true"></i>
                                            <span class="badge badge-secondary total-menu-cart-product-count">1</span>
                                        </div>


                                    </div>
                                    <template id="top-cart-product-template">
                                <li class="top-cart-product-id d-flex justify-content-center align-items-center mb-2">
                                    <div class="item-thumb">

                                        <div class="image mr-2">
                                            <img class="img-fluid top-cart-product-image" src="" alt="Product Image">
                                        </div>
                                    </div>
                                    <div class="item-detail">
                                        <h3 class="top-cart-product-name"></h3>
                                        <div
                                            class="item-s top-cart-product-qty-amount d-flex justify-content-between align-items-center mb-2">
                                        </div>
                                    </div>
                                </li>
                                </template>
                                <template id="top-cart-product-total-template">
                                    {{-- <div>
                                        <span class="item-summary ">Total&nbsp;:&nbsp;<span
                                                class="top-cart-product-total"></span>
                                        </span>
                                    </div>
                                    <div>
                                        <a class="btn btn-link btn-block text-dark"
                                            href="http://127.0.0.1:8000/cart">View Cart</a>
                                        <a class="btn btn-secondary btn-block  swipe-to-top"
                                            href="http://127.0.0.1:8000/checkout">Checkout</a>
                                    </div> --}}
                                </template>
                                <div class="dropdown-menu dropdown-menu-right p-0 show"
                                    aria-labelledby="headerOneCartButton"
                                    style="position: absolute; transform: translate3d(30px, 39px, 0px); top: 0px; left: 0px; will-change: transform;"
                                    x-placement="bottom-end">
                                    <ul class="shopping-cart-items top-cart-product-show p-3">
                                        <li class="top-cart-product-id d-flex justify-content-between align-items-center mb-2 pb-2"
                                            style="border-bottom:1px solid #dddddd;">
                                            <div class="item-thumb">

                                                <div class="image mr-2">
                                                    <img class="img-fluid top-cart-product-image"
                                                        src="/gallary/thumbnail202111154912purex.jpg"
                                                        alt="Purex Detergent"
                                                        style="width:100%;max-height:60px;min-height:60px;object-fit:contain;object-fit:center;">
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h6 class="top-cart-product-name">Purex Detergent</h6>
                                                <div
                                                    class="item-s top-cart-product-qty-amount d-flex justify-content-between align-items-center mb-1">
                                                    1 x Rs 84.48 <span class="ml-2"> <i class="fas fa-trash"
                                                            data-id="8" data-combination-id="null"
                                                            onclick="removeCartItem(this)"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="remove-item">

                                            </div>
                                        </li>
                                        <li class="top-cart-product-id d-flex justify-content-between align-items-center mb-2 pb-2"
                                            style="border-bottom:1px solid #dddddd;">
                                            <div class="item-thumb">

                                                <div class="image mr-2">
                                                    <img class="img-fluid top-cart-product-image"
                                                        src="/gallary/thumbnail202111154912purex.jpg"
                                                        alt="Purex Detergent"
                                                        style="width:100%;max-height:60px;min-height:60px;object-fit:contain;object-fit:center;">
                                                </div>
                                            </div>
                                            <div class="item-detail">
                                                <h6 class="top-cart-product-name">Purex Detergent</h6>
                                                <div
                                                    class="item-s top-cart-product-qty-amount d-flex justify-content-between align-items-center mb-1">
                                                    1 x Rs 84.48 <span class="ml-2"> <i class="fas fa-trash"
                                                            data-id="8" data-combination-id="null"
                                                            onclick="removeCartItem(this)"
                                                            aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                            <div class="remove-item">

                                            </div>
                                        </li>
                                        {{-- <li class="pb-2">
                                            <span class="item-summary ">Total&nbsp;:&nbsp;<span class="top-cart-product-total">Rs 84.48</span>
                                            </span>
                                        </li>
                                        <li>
                                            <a class="btn btn-link btn-block text-dark"
                                                href="http://127.0.0.1:8000/cart">View Cart</a>
                                            <a class="btn btn-secondary btn-block  swipe-to-top"
                                                href="http://127.0.0.1:8000/checkout">Checkout</a>
                                        </li> --}}
                                    </ul>
                                </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>

                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto pl-0">
                            <li class="nav-item dropdown px-3">
                                <a class="nav-link dropdown-toggle font-weight-bold d-block" href="javascript:void(0);"
                                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Products
                                    <span class="ml-1 icon ">
                                        <i class="fa fa-chevron-down toggleico" aria-hidden="true"></i>
                                    </span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="container d-block">

                                        <div class="row">
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=6">Tea/ Coffee</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/101/variable-product-1">Variable Product
                                                            1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/106/variable-product-6">Variable Product
                                                            6</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/109/variable-product-9">Variable Product
                                                            9</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=10">Agro Inputs</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/57/sku-s-000-57">Bottle
                                                            Spray</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/58/sku-s-000-58">Vermi-compost</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/59/sku-s-000-59">Cocopeat Kausikheti</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=2">Grocery</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/205/asas">test</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/206/0987654">test</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/207/2222222">test</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=9">Special Nepali Items</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/202/asdsad">Karkalo Ko
                                                            Maseura ( Nepali Sun Dried Vegetables)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/203/asa">Karkalo Ko
                                                            Maseura ( Nepali Sun Dried Vegetables)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/204/assa">Karkalo Ko
                                                            Maseura ( Nepali Sun Dried Vegetables)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=5">Dairy &amp; Meat</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/20/sku-s-000-20">Ghee</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/30/sku-s-000-30">DDC
                                                            kesar milk</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/43/sku-s-000-43">DDC
                                                            Fresh Milk</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=17">Grocery / Oil</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/41/sku-s-000-41">Dhara
                                                            Health Sunflower Oil 1 L</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/42/sku-s-000-42">Dhara
                                                            Pure Oil 1 L</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/90/sku-s-000-90">Samporna Sunflower Oil 1
                                                            L</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=1">Food Grains</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/2/sku-s-000-2">Kabuli
                                                            Chana ( Chick Peas)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/3/sku-s-000-3">Jumla
                                                            Simi Daal 1 Kg</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/16/sku-s-000-16">Thulo
                                                            Bodi ( Beans)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=16">Juice/Jam</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/48/sku-s-000-48">Century Pineapple Jaam</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/73/sku-s-000-73">Century Mixed Jam</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/94/sku-s-000-94">Marpha Apple Pure Organic
                                                            Juice</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=7">Fresh Fruits &amp; Vegetables</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/208/21wedsd">asd</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/209/asdasdasdasdas">asd</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=8">Handicraft Items</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/47/sku-s-000-47">Leather Key Ring Small</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/50/sku-s-000-50">Leather Laptop BAg</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/51/sku-s-000-51">Ladies Purse Small</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=4">FMCG</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link"
                                                            href="/product/12/sku-s-000-12">Shield Adult Diaper
                                                            Large</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/13/sku-s-000-13">Salt
                                                            (Aayo)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/14/sku-s-000-14">Wai
                                                            Wai Quick Noodles</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-3">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link head font-weight-bold"
                                                            href="/shop?category=18">Spices</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/22/sku-s-000-22">Pipla
                                                            ( Long pepper)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/23/sku-s-000-23">Sisnu
                                                            Powder ( Stinging Nettle Powder)</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="/product/24/sku-s-000-24">Jimmu
                                                            (Nepali Aromatic Garlic Leaf)</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                    <!--  /.container  -->
                                </div>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link font-weight-bold" href="#">Chicco Research Center</a>
                            </li>
                            <li class="nav-item px-3">
                                <a class="nav-link font-weight-bold" href="#">Who we are</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>





    </section>
    <!-- Modal -->
    <div class="modal fade w-100 p-0 position-fixed" id="searchmodal" tabindex="-1" role="dialog"
        aria-labelledby="searchmodal" aria-hidden="true">
        <div class="modal-dialog modal-xl position-relative" role="document">
            <div class="modal-content">
                <div class="modal-header text-center m-auto">
                    <h5 class="modal-title" id="modal1">
                        <img src="frontend/image/logo/logo.png" alt="logo" class="img-fluid">
                    </h5>

                </div>
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="modal-body text-center">
                    <form>
                        <input type="search" id="search-input" class="w-75">
                        <button id="search_button" class="d-none">Search</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <style>
        .variation_active {
            border: 1px solid;
        }

        .price-active {
            border: 1px solid;
        }

    </style>
    <section id="product-details-wrapper">
        <!-- Breadcrumb Section Starts -->
        <section id="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="m-0 p-0 d-flex align-items-center">
                            <li class="font-weight-bold">Home</li><span class="mx-2"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <li class="">Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details Slider With Thumbnails Starts -->
        <section id="product-detail-slider-wrapper" class="py-4 product-page">


            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

            <script>
                function toggleActiveClass(id) {
                    $(".currentSlider").find(".")
                }
            </script>
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-12">
                        <div class="row carousel-gallery-wrapper">
                            <div class="col-xl-3 col-lg-3 col-12">
                                <!-- Carousel Navigatiom -->
                                <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner allSlide">
                                        <div class="carousel-item active" data-slide-number="0">
                                            <div
                                                class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                                <div id="carousel-selector-0"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="0">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109050158product_1_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-1"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="1">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109050215product_2_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-2"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="2">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109050235product_3_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-3"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="3">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109052217product_4_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item " data-slide-number="1">
                                            <div
                                                class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                                <div id="carousel-selector-4"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="4">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109052232product_5_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-5"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="5">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109052248product_6_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-6"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="6">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109052304product_7_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-7"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="7">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109081240product_8_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item " data-slide-number="2">
                                            <div
                                                class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                                <div id="carousel-selector-8"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="8">
                                                    <img src="http://127.0.0.1:8000/gallary/large202109081253product_9_900x900.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div id="carousel-selector-9"
                                                    class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                    data-target="#carousel" data-slide-to="9">
                                                    <img src="http://127.0.0.1:8000/gallary/large202111154912purex.jpg"
                                                        class="img-fluid">
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                        data-slide="prev">
                                        <span class="icon-prv">
                                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                        data-slide="next">
                                        <span class="icon-nxt">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-12">
                                <!-- Carousel -->
                                <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                                    <div class="carousel-inner allImage">
                                        <div class="carousel-item active" data-slide-number="0" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109050158product_1_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109050158product_1_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="1" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109050215product_2_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109050215product_2_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="2" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109050235product_3_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109050235product_3_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="3" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109052217product_4_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109052217product_4_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="4" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109052232product_5_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109052232product_5_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="5" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109052248product_6_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109052248product_6_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="6" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109052304product_7_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109052304product_7_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="7" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109081240product_8_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109081240product_8_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="8" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202109081253product_9_900x900.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202109081253product_9_900x900.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item " data-slide-number="9" data-toggle="lightbox"
                                            data-gallery="gallery"
                                            data-remote="http://127.0.0.1:8000/gallary/large202111154912purex.jpg">
                                            <img src="http://127.0.0.1:8000/gallary/large202111154912purex.jpg"
                                                class="d-block w-100" alt="...">
                                        </div>


                                    </div>
                                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-12">
                        <div class="d-flex flex-column">
                            <h1 class="font-weight-bold pro-title mt-3">Purex Detergent</h1>
                            <p class="description">Purex Detergent</p>
                            <div class="share ml-auto">
                                <a><i class=" fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="pro-counter">
                            <div class="input-group item-quantity">

                                <input type="text" id="quantity-input" name="quantity" class="form-control"
                                    value="1">

                                <span class="input-group-btn">
                                    <button type="button" class="quantity-plus btn" data-type="plus" data-field="">
                                        <i class="fas fa-plus" aria-hidden="true"></i>
                                    </button>

                                    <button type="button" class="quantity-minus btn" data-type="minus" data-field="">
                                        <i class="fas fa-minus" aria-hidden="true"></i>
                                    </button>
                                </span>
                            </div>
                            <button type="button" class="btn btn-secondary btn-lg swipe-to-top add-to-cart"
                                onclick="addToCart(this)" data-id="8" data-type="simple">Add to
                                Cart</button>


                        </div>
                    </div>

                </div>
                <div class="row py-5">
                    <div class="col-12">
                        <h1 class="font-weight-bold text-center py-4">
                            Chicco SterilNatural
                        </h1>
                        <p>
                            The new line of sterilizers by Chicco fits the needs of mother and baby. It allows to choose
                            between different models
                            and configurations in order to sterilize effectively and easily.
                        </p>

                    </div>

                </div>
            </div>
            <div id="mytab-wrapper">
                <div class="tab-navigation">
                    <div class="container">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active font-weight-bold text-uppercase" id="a-tab" data-toggle="tab"
                                    href="#a" role="tab" aria-controls="a" aria-selected="true">Adjustable Size</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-uppercase" id="b-tab" data-toggle="tab"
                                    href="#b" role="tab" aria-controls="b" aria-selected="false">Effective
                                    Sterlisation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a-tab">
                            <!-- Slick Slider Starts -->
                            <section id="slider">
                                <div class="slider2 py-5">
                                    <div class="container">
                                        <div class="slick-w4">
                                            <div class="items d-flex align-items-center">
                                                <div class="image mr-4 w-50">
                                                    <img src="http://127.0.0.1:8000/frontend/image/product-details/1.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div class="content w-50">
                                                    <div class="head ">
                                                        <h3 class="font-weight-bold">Who we are</h3>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                        minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                        harum natus sint quas
                                                        veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                        Quasi minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus</p>
                                                    <a href="#" class="text-uppercase font-weight-bold">Find out
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="items d-flex align-items-center">
                                                <div class="image mr-4 w-50">
                                                    <img src="http://127.0.0.1:8000/frontend/image/product-details/2.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div class="content w-50">
                                                    <div class="head ">
                                                        <h3 class="font-weight-bold">Who we are</h3>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                        minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                        harum natus sint quas
                                                        veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                        Quasi minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus</p>
                                                    <a href="#" class="text-uppercase font-weight-bold">Find out
                                                        more</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Slick Slider Ends -->
                        </div>
                        <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b-tab">
                            <!-- Slick Slider Starts -->
                            <section id="slider2">
                                <div class="slider6 py-5">
                                    <div class="container">
                                        <div class="slick-w6">
                                            <div class="items d-flex align-items-center">
                                                <div class="image mr-4 w-50">
                                                    <img src="http://127.0.0.1:8000/frontend/image/product-details/1.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div class="content w-50">
                                                    <div class="head ">
                                                        <h3 class="font-weight-bold">Who we are</h3>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                        minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                        harum natus sint quas
                                                        veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                        Quasi minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus</p>
                                                    <a href="#" class="text-uppercase font-weight-bold">Find out
                                                        more</a>
                                                </div>
                                            </div>
                                            <div class="items d-flex align-items-center">
                                                <div class="image mr-4 w-50">
                                                    <img src="http://127.0.0.1:8000/frontend/image/product-details/2.jpg"
                                                        class="img-fluid">
                                                </div>
                                                <div class="content w-50">
                                                    <div class="head ">
                                                        <h3 class="font-weight-bold">Who we are</h3>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                        minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                        harum natus sint quas
                                                        veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                        Quasi minima
                                                        molestiae ad
                                                        tenetur eum accusamus, quos vero possimus</p>
                                                    <a href="#" class="text-uppercase font-weight-bold">Find out
                                                        more</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Slick Slider Ends -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- Product Details Slider With Thumbnails Ends -->

        <!-- Product Information Tab Starts -->
        <section id="product-info">

            <div id="mytab-wrapper2" class="px-2" style="overflow: hidden;">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 p-0">
                        <div class="tab-navigation">
                            <div class="container">
                                <ul class="nav nav-tabs border-0 flex-column justify-content-center " id="myTab2"
                                    role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active font-weight-bold text-uppercase" id="aa-tab"
                                            data-toggle="tab" href="#aa" role="tab" aria-controls="aa"
                                            aria-selected="true"><span class="mr-2"><i
                                                    class="fa fa-list" aria-hidden="true"></i></span> Technical
                                            Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold text-uppercase" id="bb-tab"
                                            data-toggle="tab" href="#bb" role="tab" aria-controls="bb"
                                            aria-selected="false"> <span class="mr-2">
                                                <i class="fa fa-book" aria-hidden="true"></i>
                                            </span> Warnings and Instructions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="tab-content-wrapper p-5">
                            <div class="tab-content" id="myTabContent2">
                                <div class="tab-pane fade show active" id="aa" role="tabpanel"
                                    aria-labelledby="aa-tab">
                                    <p> <span class="font-weight-bold">Product:</span>
                                        asjdvaskdsabdask</p>
                                </div>
                                <div class="tab-pane fade" id="bb" role="tabpanel" aria-labelledby="bb-tab">
                                    <div class="content">
                                        Warnings
                                        <ul class="mt-3 pl-0">
                                            <li class="mb-2"><span class="mr-2">
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                </span>Model: 06782</li>
                                            <li class="mb-2"><span class="mr-2">
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                </span>Model: 06782</li>
                                            <li class="mb-2"><span class="mr-2">
                                                    <i class="fa fa-circle" aria-hidden="true"></i>
                                                </span>Model: 06782</li>
                                        </ul>
                                    </div>
                                    <div class="content">
                                        Instructions
                                        <div class="row mt-3">
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">

                                                <div class="d-flex">
                                                    <div class="image mr-2">
                                                        <img src="http://127.0.0.1:8000/frontend/image/product-details/1.jpg"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="content">
                                                        <a class="file-name">
                                                            Filename
                                                        </a>
                                                        <p class="size">
                                                            1.32mb
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-2">

                                                <div class="d-flex">
                                                    <div class="image mr-2">
                                                        <img src="http://127.0.0.1:8000/frontend/image/product-details/1.jpg"
                                                            class="img-fluid">
                                                    </div>
                                                    <div class="content">
                                                        <a class="file-name">
                                                            Filename
                                                        </a>
                                                        <p class="size">
                                                            1.32mb
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- Product Information Tab Ends -->



    </section>









    <template id="product-detail-section">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

        <script>
            function toggleActiveClass(id) {
                $(".currentSlider").find(".")
            }
        </script>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="row carousel-gallery-wrapper">
                        <div class="col-xl-3 col-lg-3 col-12">
                            <!-- Carousel Navigatiom -->
                            <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner allSlide">
                                    <div class="carousel-item active" data-slide-number="0">
                                        <div
                                            class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                            <div id="carousel-selector-0"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="0">
                                                <img src="http://127.0.0.1:8000/gallary/large202109050158product_1_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-1"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="1">
                                                <img src="http://127.0.0.1:8000/gallary/large202109050215product_2_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-2"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="2">
                                                <img src="http://127.0.0.1:8000/gallary/large202109050235product_3_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-3"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="3">
                                                <img src="http://127.0.0.1:8000/gallary/large202109052217product_4_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item " data-slide-number="1">
                                        <div
                                            class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                            <div id="carousel-selector-4"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="4">
                                                <img src="http://127.0.0.1:8000/gallary/large202109052232product_5_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-5"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="5">
                                                <img src="http://127.0.0.1:8000/gallary/large202109052248product_6_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-6"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="6">
                                                <img src="http://127.0.0.1:8000/gallary/large202109052304product_7_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-7"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="7">
                                                <img src="http://127.0.0.1:8000/gallary/large202109081240product_8_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item " data-slide-number="2">
                                        <div
                                            class="row mx-0 .row-content d-flex  align-items-center justify-content-center">
                                            <div id="carousel-selector-8"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="8">
                                                <img src="http://127.0.0.1:8000/gallary/large202109081253product_9_900x900.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div id="carousel-selector-9"
                                                class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected"
                                                data-target="#carousel" data-slide-to="9">
                                                <img src="http://127.0.0.1:8000/gallary/large202111154912purex.jpg"
                                                    class="img-fluid">
                                            </div>
                                        </div>
                                    </div>



                                </div>
                                <a class="carousel-control-prev" href="#carousel-thumbs" role="button"
                                    data-slide="prev">
                                    <span class="icon-prv">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumbs" role="button"
                                    data-slide="next">
                                    <span class="icon-nxt">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-12">
                            <!-- Carousel -->
                            <div id="carousel" class="carousel slide gallery" data-ride="carousel">
                                <div class="carousel-inner allImage">
                                    <div class="carousel-item active" data-slide-number="0" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109050158product_1_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109050158product_1_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="1" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109050215product_2_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109050215product_2_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="2" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109050235product_3_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109050235product_3_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="3" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109052217product_4_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109052217product_4_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="4" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109052232product_5_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109052232product_5_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="5" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109052248product_6_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109052248product_6_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="6" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109052304product_7_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109052304product_7_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="7" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109081240product_8_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109081240product_8_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="8" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202109081253product_9_900x900.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202109081253product_9_900x900.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item " data-slide-number="9" data-toggle="lightbox"
                                        data-gallery="gallery"
                                        data-remote="http://127.0.0.1:8000/gallary/large202111154912purex.jpg">
                                        <img src="http://127.0.0.1:8000/gallary/large202111154912purex.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>


                                </div>
                                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12">
                    <div class="d-flex flex-column">
                        <h1 class="font-weight-bold pro-title mt-3">

                        </h1>
                        <p class="description">

                        </p>
                        <div class="share ml-auto">
                            <a><i class=" fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="pro-counter">
                        <div class="input-group item-quantity">

                            <input type="text" id="quantity-input" name="quantity" class="form-control" value="1">

                            <span class="input-group-btn">
                                <button type="button" class="quantity-plus btn" data-type="plus" data-field="">
                                    <i class="fas fa-plus"></i>
                                </button>

                                <button type="button" class="quantity-minus btn" data-type="minus" data-field="">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </span>
                        </div>
                        <button type="button" class="btn btn-secondary btn-lg swipe-to-top add-to-cart">Add to
                            Cart</button>


                    </div>
                </div>

            </div>
            <div class="row py-5">
                <div class="col-12">
                    <h1 class="font-weight-bold text-center py-4">
                        Chicco SterilNatural
                    </h1>
                    <p>
                        The new line of sterilizers by Chicco fits the needs of mother and baby. It allows to choose
                        between different models
                        and configurations in order to sterilize effectively and easily.
                    </p>

                </div>

            </div>
        </div>
        <div id="mytab-wrapper">
            <div class="tab-navigation">
                <div class="container">
                    <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active font-weight-bold text-uppercase" id="a-tab" data-toggle="tab"
                                href="#a" role="tab" aria-controls="a" aria-selected="true">Adjustable Size</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-uppercase" id="b-tab" data-toggle="tab" href="#b"
                                role="tab" aria-controls="b" aria-selected="false">Effective
                                Sterlisation</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="a" role="tabpanel" aria-labelledby="a-tab">
                        <!-- Slick Slider Starts -->
                        <section id="slider">
                            <div class="slider2 py-5">
                                <div class="container">
                                    <div class="slick-w4">
                                        <div class="items d-flex align-items-center">
                                            <div class="image mr-4 w-50">
                                                <img src="http://127.0.0.1:8000/frontend/image/product-details/1.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div class="content w-50">
                                                <div class="head ">
                                                    <h3 class="font-weight-bold">Who we are</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                    minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                    harum natus sint quas
                                                    veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                    Quasi minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus</p>
                                                <a href="#" class="text-uppercase font-weight-bold">Find out
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="items d-flex align-items-center">
                                            <div class="image mr-4 w-50">
                                                <img src="http://127.0.0.1:8000/frontend/image/product-details/2.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div class="content w-50">
                                                <div class="head ">
                                                    <h3 class="font-weight-bold">Who we are</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                    minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                    harum natus sint quas
                                                    veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                    Quasi minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus</p>
                                                <a href="#" class="text-uppercase font-weight-bold">Find out
                                                    more</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Slick Slider Ends -->
                    </div>
                    <div class="tab-pane fade" id="b" role="tabpanel" aria-labelledby="b-tab">
                        <!-- Slick Slider Starts -->
                        <section id="slider2">
                            <div class="slider6 py-5">
                                <div class="container">
                                    <div class="slick-w6">
                                        <div class="items d-flex align-items-center">
                                            <div class="image mr-4 w-50">
                                                <img src="http://127.0.0.1:8000/frontend/image/product-details/1.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div class="content w-50">
                                                <div class="head ">
                                                    <h3 class="font-weight-bold">Who we are</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                    minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                    harum natus sint quas
                                                    veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                    Quasi minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus</p>
                                                <a href="#" class="text-uppercase font-weight-bold">Find out
                                                    more</a>
                                            </div>
                                        </div>
                                        <div class="items d-flex align-items-center">
                                            <div class="image mr-4 w-50">
                                                <img src="http://127.0.0.1:8000/frontend/image/product-details/2.jpg"
                                                    class="img-fluid">
                                            </div>
                                            <div class="content w-50">
                                                <div class="head ">
                                                    <h3 class="font-weight-bold">Who we are</h3>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi
                                                    minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus impedit hic ipsum
                                                    harum natus sint quas
                                                    veniam doloribus consectetur cupiditate optio! Adipisicing elit.
                                                    Quasi minima
                                                    molestiae ad
                                                    tenetur eum accusamus, quos vero possimus</p>
                                                <a href="#" class="text-uppercase font-weight-bold">Find out
                                                    more</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Slick Slider Ends -->
                    </div>
                </div>
            </div>
        </div>

    </template>

    <template id="product-card-template">
        <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
            <div class="content d-flex flex-column bg-white pb-3">
                <div class="image mb-3">
                    <img src="" class="img-fluid product-card-image" alt="">
                </div>
                <div class="heading m-auto">

                    <a class="font-weight-bold product-card-name">

                    </a>

                    <div class=" btn-hover new-design">
                        <a class="btn  btn-secondary  swipe-to-top product-card-link" href="javascript:void(0)"
                            data-toggle="tooltip" data-placement="bottom" title=""
                            data-original-title="View Detail">View Detail</a>

                    </div>
                </div>
            </div>
        </div>
    </template>
    <div class="row shop_page_product_card w-100">

    </div>
    <input type="hidden" id="product_id" value="8">





    <!-- Observatory Section Starts -->
    <section id="observatory-wrapper" class="py-5">
        <div class="container">
            <div class="heading-wrap d-flex align-items-center justify-content-center flex-column mb-3">
                <div class="icon-logo-head text-center mb-2">
                    <img src="http://127.0.0.1:8000/frontend/image/observatory/1.png" alt="logo-icon"
                        class="img-fluid">
                </div>
                <div class="head text-center">
                    <h5 class="font-weight-bold">Observatory</h5>

                    <div class="slogan-wrapper">
                        <h2 class="font-weight-bold">Do you know that...</h2>
                        <p>
                            <span class="fancy-comma font-weight-bold">
                                "
                            </span>
                            Sucking is an instinct that reassures and comforts your child.
                            <span class="fancy-comma font-weight-bold">
                                "
                            </span>
                        </p>
                    </div>
                </div>


            </div>
            <div class="content mb-3">
                <div class="row" id="articles">
                    <div class="col-4">
                        <div class="box-1st d-flex flex-column mb-5">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">Nepal Imports 13 Arab 66 Crore value food items</h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2"></p>
                                    <p>As per the IRD of&nbsp;Nepal, in last two months of fiscal year 2078/79, total
                                        sum of 13 Arab 66 Crore has been spent on importing the food items f...</p>
                                </div>
                                <div class="card-footer-cus"><a href="#" class="font-weight-bold text-uppercase">Go To
                                        Article</a></div>
                            </div>
                        </div>
                        <div class="box-1st d-flex flex-column mb-5">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">Farmers Struggle With Lack Of Water</h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2"></p>
                                    <p>– and climate change is making it even more difficult. Villagers are having to
                                        come up with innovative ways to grow their crops because of the lack...</p>
                                </div>
                                <div class="card-footer-cus"><a href="#" class="font-weight-bold text-uppercase">Go To
                                        Article</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="box-3rd d-flex justify-content-center align-items-center h-100"><img
                                src="http://127.0.0.1:8000/frontend/image/observatory/kid.jpg" alt=""></div>
                    </div>
                    <div class="col-4">
                        <div class="box-1st d-flex flex-column mb-5">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">Modern Day Farming In Nepal</h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2"></p>
                                    <p>Today, farming system, modern technology and information are used for the
                                        production of the crops and vegetables. In modern farming, farmers have m...</p>
                                </div>
                                <div class="card-footer-cus"><a href="#" class="font-weight-bold text-uppercase">Go To
                                        Article</a></div>
                            </div>
                        </div>
                        <div class="box-1st d-flex flex-column mb-5">
                            <div class="card text-center border-0">
                                <div class="card-header-cus">
                                    <h4 class="font-weight-bold">organic-farming-in-nepal</h4>
                                </div>
                                <div class="card-body-cus">
                                    <p class="card-text mb-2"></p>
                                    <p>Organic farming focuses on utilizing natural materials in agriculture and
                                        prohibiting the use of the chemical fertilizers and pesticides which ulti...</p>
                                </div>
                                <div class="card-footer-cus"><a href="#" class="font-weight-bold text-uppercase">Go To
                                        Article</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- Observatory Section Ends -->
    <!-- Product List Starts -->
    <div class="product-lists bg-light py-5">
        <div class="container">
            <div class="head text-center mb-4">
                <div class="slogan-wrapper">
                    <h2 class="font-weight-bold ">Other users have also seen...</h2>

                </div>
            </div>
            <div class="row w-100 related">



                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111165654FeNto11211.jpg" class="img-fluid product-card-image"
                                alt="Kala Namak Rice">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/1/sku-s-000-1">Kala Namak
                                Rice</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/1/sku-s-000-1" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111154710Kabuli.jpg" class="img-fluid product-card-image"
                                alt="Kabuli Chana ( Chick Peas)">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/2/sku-s-000-2">Kabuli Chana (
                                Chick Peas)</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/2/sku-s-000-2" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111154703Jumla.jpg" class="img-fluid product-card-image"
                                alt="Jumla Simi Daal 1 Kg">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/3/sku-s-000-3">Jumla Simi Daal
                                1 Kg</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/3/sku-s-000-3" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111173944yx3xP29105.jpg" class="img-fluid product-card-image"
                                alt="EG Dishwashing Gel 150gm">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/4/sku-s-000-4">EG Dishwashing
                                Gel 150gm</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/4/sku-s-000-4" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111154640Clean.jpg" class="img-fluid product-card-image"
                                alt="Clean Smart Liquid Soap 5 Litre">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/5/sku-s-000-5">Clean Smart
                                Liquid Soap 5 Litre</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/5/sku-s-000-5" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111173913ltmlN29509.jpg" class="img-fluid product-card-image"
                                alt="Clean Liquid Handwash 5 Litre">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/6/sku-s-000-6">Clean Liquid
                                Handwash 5 Litre</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/6/sku-s-000-6" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111155052white.jpg" class="img-fluid product-card-image"
                                alt="White phenyl 5 litre">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/7/sku-s-000-7">White phenyl 5
                                litre</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/7/sku-s-000-7" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111154912purex.jpg" class="img-fluid product-card-image"
                                alt="Purex Detergent">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/8/sku-s-000-8">Purex
                                Detergent</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/8/sku-s-000-8" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111154743puja.jpg" class="img-fluid product-card-image"
                                alt="Puja Soap">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/9/sku-s-000-9">Puja Soap</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/9/sku-s-000-9" data-toggle="tooltip" data-placement="bottom" title=""
                                    data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-6 col-12 mb-4">
                    <div class="content d-flex flex-column bg-white pb-3">
                        <div class="image mb-3">
                            <img src="/gallary/medium202111173919nerWU29906.jpg" class="img-fluid product-card-image"
                                alt="Safety Always Clean">
                        </div>
                        <div class="heading m-auto">

                            <a class="font-weight-bold product-card-name" href="/product/10/sku-s-000-10">Safety Always
                                Clean</a>

                            <div class=" btn-hover new-design">
                                <a class="btn  btn-secondary  swipe-to-top product-card-link"
                                    href="/product/10/sku-s-000-10" data-toggle="tooltip" data-placement="bottom"
                                    title="" data-original-title="View Detail">View Detail</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product List Ends -->




    ;


    <section id="footer-wrapper" class="py-4">
        <div class="container">
            <div class="row text-white">
                <div class="col-6">
                    <h6 class="font-weight-bold">Phone Numbers</h6>
                    <div class="row">
                        <div class="col-6">
                            <ul class="info p-0 ml-0">
                                <li>
                                    Artsana customer service
                                </li>
                                <li>
                                    Operational assistance for Chicco Shop </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="info p-0 ml-0">
                                <li>
                                    <span class="mr-2"><i class="fa fa-phone"
                                            aria-hidden="true"></i></span>
                                    (+977-01-4468633)
                                </li>
                                <li>
                                    <span class="mr-2"><i class="fa fa-phone"
                                            aria-hidden="true"></i></span>
                                    (+977-01-4468633)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="social-media font-weight-bold d-flex justify-content-end align-items-center">
                        <label class="mr-3 mb-0 font-weight-bold text-white">
                            Follow us on
                        </label>
                        <ul class="p-0 m-0 d-flex align-items-center">
                            <li class="mr-2">
                                <a href="https://google.com">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="mr-2">
                                <a href="https://facebook.com">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="mr-2">
                                <a href="https://instagram.com">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="about bord ml-0 pl-0 pt-3 pb-3 d-flex">
                        <li class="circle-dot"><a href="/contact-us">Contacts</a></li>
                        <li class="circle-dot"><a href="#">Catalogs</a></li>
                        <li class="circle-dot"><a href="#">Who we are</a></li>
                    </ul>
                </div>
                <div class="col-12">
                    <ul class="about p-0 d-flex m-0">
                        <li class="circle-dot"><a href="#">Product safety warnings</a></li>
                        <li class="circle-dot"><a href="#">Declaration of conformity</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="copyright-wrapper" class="py-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="copyright m-0 p-0 d-flex">
                        <li class="circle-dot"><a href="#">PRIVACY DISCLAIMER</a></li>
                        <li class="circle-dot"><a href="#">LEGAL NOTICES</a></li>
                        <li class="circle-dot"><a href="#">COOKIES</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>









    <!-- All custom scripts here -->
    <!-- Js link Starts -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- font awesome -->
    <script src="http://127.0.0.1:8000/frontend/js/wow.js"></script>
    <script src="https://kit.fontawesome.com/a26d9146a0.js" crossorigin="anonymous"></script><style media="all" id="fa-v4-font-face">
        /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.svg#fontawesome) format("svg")
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg");
            unicode-range: U+f004-f005, U+f007, U+f017, U+f022, U+f024, U+f02e, U+f03e, U+f044, U+f057-f059, U+f06e, U+f070, U+f075, U+f07b-f07c, U+f080, U+f086, U+f089, U+f094, U+f09d, U+f0a0, U+f0a4-f0a7, U+f0c5, U+f0c7-f0c8, U+f0e0, U+f0eb, U+f0f3, U+f0f8, U+f0fe, U+f111, U+f118-f11a, U+f11c, U+f133, U+f144, U+f146, U+f14a, U+f14d-f14e, U+f150-f152, U+f15b-f15c, U+f164-f165, U+f185-f186, U+f191-f192, U+f1ad, U+f1c1-f1c9, U+f1cd, U+f1d8, U+f1e3, U+f1ea, U+f1f6, U+f1f9, U+f20a, U+f247-f249, U+f24d, U+f254-f25b, U+f25d, U+f271-f274, U+f279, U+f28b, U+f28d, U+f2b5-f2b6, U+f2b9, U+f2bb, U+f2bd, U+f2c1-f2c2, U+f2d0, U+f2d2, U+f2dc, U+f2ed, U+f3a5, U+f3d1, U+f410
        }

        @font-face {
            font-family: "FontAwesome";
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-v4deprecations.svg#fontawesome) format("svg");
            unicode-range: U+f003, U+f006, U+f014, U+f016, U+f01a-f01b, U+f01d, U+f040, U+f045-f047, U+f05c-f05d, U+f07d-f07e, U+f087-f088, U+f08a-f08b, U+f08e, U+f090, U+f096-f097, U+f0a2, U+f0e4-f0e6, U+f0ec-f0ee, U+f0f5-f0f7, U+f10c, U+f112, U+f114-f115, U+f11d, U+f123, U+f132, U+f145, U+f147-f149, U+f14c, U+f166, U+f16a, U+f172, U+f175-f178, U+f18e, U+f190, U+f196, U+f1b1, U+f1d9, U+f1db, U+f1f7, U+f20c, U+f219, U+f230, U+f24a, U+f250, U+f278, U+f27b, U+f283, U+f28c, U+f28e, U+f29b-f29c, U+f2b7, U+f2ba, U+f2bc, U+f2be, U+f2c0, U+f2c3, U+f2d3-f2d4
        }

    </style>
    <style media="all" id="fa-v4-shims">
        /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
        .fa.fa-glass:before {
            content: "\f000"
        }

        .fa.fa-meetup {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-star-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-star-o:before {
            content: "\f005"
        }

        .fa.fa-close:before,
        .fa.fa-remove:before {
            content: "\f00d"
        }

        .fa.fa-gear:before {
            content: "\f013"
        }

        .fa.fa-trash-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-trash-o:before {
            content: "\f2ed"
        }

        .fa.fa-file-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-o:before {
            content: "\f15b"
        }

        .fa.fa-clock-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-clock-o:before {
            content: "\f017"
        }

        .fa.fa-arrow-circle-o-down {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-arrow-circle-o-down:before {
            content: "\f358"
        }

        .fa.fa-arrow-circle-o-up {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-arrow-circle-o-up:before {
            content: "\f35b"
        }

        .fa.fa-play-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-play-circle-o:before {
            content: "\f144"
        }

        .fa.fa-repeat:before,
        .fa.fa-rotate-right:before {
            content: "\f01e"
        }

        .fa.fa-refresh:before {
            content: "\f021"
        }

        .fa.fa-list-alt {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-dedent:before {
            content: "\f03b"
        }

        .fa.fa-video-camera:before {
            content: "\f03d"
        }

        .fa.fa-picture-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-picture-o:before {
            content: "\f03e"
        }

        .fa.fa-photo {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-photo:before {
            content: "\f03e"
        }

        .fa.fa-image {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-image:before {
            content: "\f03e"
        }

        .fa.fa-pencil:before {
            content: "\f303"
        }

        .fa.fa-map-marker:before {
            content: "\f3c5"
        }

        .fa.fa-pencil-square-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-pencil-square-o:before {
            content: "\f044"
        }

        .fa.fa-share-square-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-share-square-o:before {
            content: "\f14d"
        }

        .fa.fa-check-square-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-check-square-o:before {
            content: "\f14a"
        }

        .fa.fa-arrows:before {
            content: "\f0b2"
        }

        .fa.fa-times-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-times-circle-o:before {
            content: "\f057"
        }

        .fa.fa-check-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-check-circle-o:before {
            content: "\f058"
        }

        .fa.fa-mail-forward:before {
            content: "\f064"
        }

        .fa.fa-expand:before {
            content: "\f424"
        }

        .fa.fa-compress:before {
            content: "\f422"
        }

        .fa.fa-eye,
        .fa.fa-eye-slash {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-warning:before {
            content: "\f071"
        }

        .fa.fa-calendar:before {
            content: "\f073"
        }

        .fa.fa-arrows-v:before {
            content: "\f338"
        }

        .fa.fa-arrows-h:before {
            content: "\f337"
        }

        .fa.fa-bar-chart {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-bar-chart:before {
            content: "\f080"
        }

        .fa.fa-bar-chart-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-bar-chart-o:before {
            content: "\f080"
        }

        .fa.fa-facebook-square,
        .fa.fa-twitter-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-gears:before {
            content: "\f085"
        }

        .fa.fa-thumbs-o-up {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-thumbs-o-up:before {
            content: "\f164"
        }

        .fa.fa-thumbs-o-down {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-thumbs-o-down:before {
            content: "\f165"
        }

        .fa.fa-heart-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-heart-o:before {
            content: "\f004"
        }

        .fa.fa-sign-out:before {
            content: "\f2f5"
        }

        .fa.fa-linkedin-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-linkedin-square:before {
            content: "\f08c"
        }

        .fa.fa-thumb-tack:before {
            content: "\f08d"
        }

        .fa.fa-external-link:before {
            content: "\f35d"
        }

        .fa.fa-sign-in:before {
            content: "\f2f6"
        }

        .fa.fa-github-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-lemon-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-lemon-o:before {
            content: "\f094"
        }

        .fa.fa-square-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-square-o:before {
            content: "\f0c8"
        }

        .fa.fa-bookmark-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-bookmark-o:before {
            content: "\f02e"
        }

        .fa.fa-facebook,
        .fa.fa-twitter {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-facebook:before {
            content: "\f39e"
        }

        .fa.fa-facebook-f {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-facebook-f:before {
            content: "\f39e"
        }

        .fa.fa-github {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-credit-card {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-feed:before {
            content: "\f09e"
        }

        .fa.fa-hdd-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hdd-o:before {
            content: "\f0a0"
        }

        .fa.fa-hand-o-right {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-o-right:before {
            content: "\f0a4"
        }

        .fa.fa-hand-o-left {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-o-left:before {
            content: "\f0a5"
        }

        .fa.fa-hand-o-up {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-o-up:before {
            content: "\f0a6"
        }

        .fa.fa-hand-o-down {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-o-down:before {
            content: "\f0a7"
        }

        .fa.fa-arrows-alt:before {
            content: "\f31e"
        }

        .fa.fa-group:before {
            content: "\f0c0"
        }

        .fa.fa-chain:before {
            content: "\f0c1"
        }

        .fa.fa-scissors:before {
            content: "\f0c4"
        }

        .fa.fa-files-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-files-o:before {
            content: "\f0c5"
        }

        .fa.fa-floppy-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-floppy-o:before {
            content: "\f0c7"
        }

        .fa.fa-navicon:before,
        .fa.fa-reorder:before {
            content: "\f0c9"
        }

        .fa.fa-google-plus,
        .fa.fa-google-plus-square,
        .fa.fa-pinterest,
        .fa.fa-pinterest-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-google-plus:before {
            content: "\f0d5"
        }

        .fa.fa-money {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-money:before {
            content: "\f3d1"
        }

        .fa.fa-unsorted:before {
            content: "\f0dc"
        }

        .fa.fa-sort-desc:before {
            content: "\f0dd"
        }

        .fa.fa-sort-asc:before {
            content: "\f0de"
        }

        .fa.fa-linkedin {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-linkedin:before {
            content: "\f0e1"
        }

        .fa.fa-rotate-left:before {
            content: "\f0e2"
        }

        .fa.fa-legal:before {
            content: "\f0e3"
        }

        .fa.fa-dashboard:before,
        .fa.fa-tachometer:before {
            content: "\f3fd"
        }

        .fa.fa-comment-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-comment-o:before {
            content: "\f075"
        }

        .fa.fa-comments-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-comments-o:before {
            content: "\f086"
        }

        .fa.fa-flash:before {
            content: "\f0e7"
        }

        .fa.fa-clipboard,
        .fa.fa-paste {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-paste:before {
            content: "\f328"
        }

        .fa.fa-lightbulb-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-lightbulb-o:before {
            content: "\f0eb"
        }

        .fa.fa-exchange:before {
            content: "\f362"
        }

        .fa.fa-cloud-download:before {
            content: "\f381"
        }

        .fa.fa-cloud-upload:before {
            content: "\f382"
        }

        .fa.fa-bell-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-bell-o:before {
            content: "\f0f3"
        }

        .fa.fa-cutlery:before {
            content: "\f2e7"
        }

        .fa.fa-file-text-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-text-o:before {
            content: "\f15c"
        }

        .fa.fa-building-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-building-o:before {
            content: "\f1ad"
        }

        .fa.fa-hospital-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hospital-o:before {
            content: "\f0f8"
        }

        .fa.fa-tablet:before {
            content: "\f3fa"
        }

        .fa.fa-mobile-phone:before,
        .fa.fa-mobile:before {
            content: "\f3cd"
        }

        .fa.fa-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-circle-o:before {
            content: "\f111"
        }

        .fa.fa-mail-reply:before {
            content: "\f3e5"
        }

        .fa.fa-github-alt {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-folder-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-folder-o:before {
            content: "\f07b"
        }

        .fa.fa-folder-open-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-folder-open-o:before {
            content: "\f07c"
        }

        .fa.fa-smile-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-smile-o:before {
            content: "\f118"
        }

        .fa.fa-frown-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-frown-o:before {
            content: "\f119"
        }

        .fa.fa-meh-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-meh-o:before {
            content: "\f11a"
        }

        .fa.fa-keyboard-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-keyboard-o:before {
            content: "\f11c"
        }

        .fa.fa-flag-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-flag-o:before {
            content: "\f024"
        }

        .fa.fa-mail-reply-all:before {
            content: "\f122"
        }

        .fa.fa-star-half-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-star-half-o:before {
            content: "\f089"
        }

        .fa.fa-star-half-empty {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-star-half-empty:before {
            content: "\f089"
        }

        .fa.fa-star-half-full {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-star-half-full:before {
            content: "\f089"
        }

        .fa.fa-code-fork:before {
            content: "\f126"
        }

        .fa.fa-chain-broken:before {
            content: "\f127"
        }

        .fa.fa-shield:before {
            content: "\f3ed"
        }

        .fa.fa-calendar-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-calendar-o:before {
            content: "\f133"
        }

        .fa.fa-css3,
        .fa.fa-html5,
        .fa.fa-maxcdn {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-ticket:before {
            content: "\f3ff"
        }

        .fa.fa-minus-square-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-minus-square-o:before {
            content: "\f146"
        }

        .fa.fa-level-up:before {
            content: "\f3bf"
        }

        .fa.fa-level-down:before {
            content: "\f3be"
        }

        .fa.fa-pencil-square:before {
            content: "\f14b"
        }

        .fa.fa-external-link-square:before {
            content: "\f360"
        }

        .fa.fa-compass {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-caret-square-o-down {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-caret-square-o-down:before {
            content: "\f150"
        }

        .fa.fa-toggle-down {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-toggle-down:before {
            content: "\f150"
        }

        .fa.fa-caret-square-o-up {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-caret-square-o-up:before {
            content: "\f151"
        }

        .fa.fa-toggle-up {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-toggle-up:before {
            content: "\f151"
        }

        .fa.fa-caret-square-o-right {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-caret-square-o-right:before {
            content: "\f152"
        }

        .fa.fa-toggle-right {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-toggle-right:before {
            content: "\f152"
        }

        .fa.fa-eur:before,
        .fa.fa-euro:before {
            content: "\f153"
        }

        .fa.fa-gbp:before {
            content: "\f154"
        }

        .fa.fa-dollar:before,
        .fa.fa-usd:before {
            content: "\f155"
        }

        .fa.fa-inr:before,
        .fa.fa-rupee:before {
            content: "\f156"
        }

        .fa.fa-cny:before,
        .fa.fa-jpy:before,
        .fa.fa-rmb:before,
        .fa.fa-yen:before {
            content: "\f157"
        }

        .fa.fa-rouble:before,
        .fa.fa-rub:before,
        .fa.fa-ruble:before {
            content: "\f158"
        }

        .fa.fa-krw:before,
        .fa.fa-won:before {
            content: "\f159"
        }

        .fa.fa-bitcoin,
        .fa.fa-btc {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-bitcoin:before {
            content: "\f15a"
        }

        .fa.fa-file-text:before {
            content: "\f15c"
        }

        .fa.fa-sort-alpha-asc:before {
            content: "\f15d"
        }

        .fa.fa-sort-alpha-desc:before {
            content: "\f881"
        }

        .fa.fa-sort-amount-asc:before {
            content: "\f160"
        }

        .fa.fa-sort-amount-desc:before {
            content: "\f884"
        }

        .fa.fa-sort-numeric-asc:before {
            content: "\f162"
        }

        .fa.fa-sort-numeric-desc:before {
            content: "\f886"
        }

        .fa.fa-xing,
        .fa.fa-xing-square,
        .fa.fa-youtube,
        .fa.fa-youtube-play,
        .fa.fa-youtube-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-youtube-play:before {
            content: "\f167"
        }

        .fa.fa-adn,
        .fa.fa-bitbucket,
        .fa.fa-bitbucket-square,
        .fa.fa-dropbox,
        .fa.fa-flickr,
        .fa.fa-instagram,
        .fa.fa-stack-overflow {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-bitbucket-square:before {
            content: "\f171"
        }

        .fa.fa-tumblr,
        .fa.fa-tumblr-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-long-arrow-down:before {
            content: "\f309"
        }

        .fa.fa-long-arrow-up:before {
            content: "\f30c"
        }

        .fa.fa-long-arrow-left:before {
            content: "\f30a"
        }

        .fa.fa-long-arrow-right:before {
            content: "\f30b"
        }

        .fa.fa-android,
        .fa.fa-apple,
        .fa.fa-dribbble,
        .fa.fa-foursquare,
        .fa.fa-gittip,
        .fa.fa-gratipay,
        .fa.fa-linux,
        .fa.fa-skype,
        .fa.fa-trello,
        .fa.fa-windows {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-gittip:before {
            content: "\f184"
        }

        .fa.fa-sun-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-sun-o:before {
            content: "\f185"
        }

        .fa.fa-moon-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-moon-o:before {
            content: "\f186"
        }

        .fa.fa-pagelines,
        .fa.fa-renren,
        .fa.fa-stack-exchange,
        .fa.fa-vk,
        .fa.fa-weibo {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-arrow-circle-o-right {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-arrow-circle-o-right:before {
            content: "\f35a"
        }

        .fa.fa-arrow-circle-o-left {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-arrow-circle-o-left:before {
            content: "\f359"
        }

        .fa.fa-caret-square-o-left {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-caret-square-o-left:before {
            content: "\f191"
        }

        .fa.fa-toggle-left {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-toggle-left:before {
            content: "\f191"
        }

        .fa.fa-dot-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-dot-circle-o:before {
            content: "\f192"
        }

        .fa.fa-vimeo-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-try:before,
        .fa.fa-turkish-lira:before {
            content: "\f195"
        }

        .fa.fa-plus-square-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-plus-square-o:before {
            content: "\f0fe"
        }

        .fa.fa-openid,
        .fa.fa-slack,
        .fa.fa-wordpress {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-bank:before,
        .fa.fa-institution:before {
            content: "\f19c"
        }

        .fa.fa-mortar-board:before {
            content: "\f19d"
        }

        .fa.fa-delicious,
        .fa.fa-digg,
        .fa.fa-drupal,
        .fa.fa-google,
        .fa.fa-joomla,
        .fa.fa-pied-piper-alt,
        .fa.fa-pied-piper-pp,
        .fa.fa-reddit,
        .fa.fa-reddit-square,
        .fa.fa-stumbleupon,
        .fa.fa-stumbleupon-circle,
        .fa.fa-yahoo {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-spoon:before {
            content: "\f2e5"
        }

        .fa.fa-behance,
        .fa.fa-behance-square,
        .fa.fa-steam,
        .fa.fa-steam-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-automobile:before {
            content: "\f1b9"
        }

        .fa.fa-envelope-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-envelope-o:before {
            content: "\f0e0"
        }

        .fa.fa-deviantart,
        .fa.fa-soundcloud,
        .fa.fa-spotify {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-file-pdf-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-pdf-o:before {
            content: "\f1c1"
        }

        .fa.fa-file-word-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-word-o:before {
            content: "\f1c2"
        }

        .fa.fa-file-excel-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-excel-o:before {
            content: "\f1c3"
        }

        .fa.fa-file-powerpoint-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-powerpoint-o:before {
            content: "\f1c4"
        }

        .fa.fa-file-image-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-image-o:before {
            content: "\f1c5"
        }

        .fa.fa-file-photo-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-photo-o:before {
            content: "\f1c5"
        }

        .fa.fa-file-picture-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-picture-o:before {
            content: "\f1c5"
        }

        .fa.fa-file-archive-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-archive-o:before {
            content: "\f1c6"
        }

        .fa.fa-file-zip-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-zip-o:before {
            content: "\f1c6"
        }

        .fa.fa-file-audio-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-audio-o:before {
            content: "\f1c7"
        }

        .fa.fa-file-sound-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-sound-o:before {
            content: "\f1c7"
        }

        .fa.fa-file-video-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-video-o:before {
            content: "\f1c8"
        }

        .fa.fa-file-movie-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-movie-o:before {
            content: "\f1c8"
        }

        .fa.fa-file-code-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-file-code-o:before {
            content: "\f1c9"
        }

        .fa.fa-codepen,
        .fa.fa-jsfiddle,
        .fa.fa-vine {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-life-bouy,
        .fa.fa-life-ring {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-life-bouy:before {
            content: "\f1cd"
        }

        .fa.fa-life-buoy {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-life-buoy:before {
            content: "\f1cd"
        }

        .fa.fa-life-saver {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-life-saver:before {
            content: "\f1cd"
        }

        .fa.fa-support {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-support:before {
            content: "\f1cd"
        }

        .fa.fa-circle-o-notch:before {
            content: "\f1ce"
        }

        .fa.fa-ra,
        .fa.fa-rebel {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-ra:before {
            content: "\f1d0"
        }

        .fa.fa-resistance {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-resistance:before {
            content: "\f1d0"
        }

        .fa.fa-empire,
        .fa.fa-ge {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-ge:before {
            content: "\f1d1"
        }

        .fa.fa-git,
        .fa.fa-git-square,
        .fa.fa-hacker-news,
        .fa.fa-y-combinator-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-y-combinator-square:before {
            content: "\f1d4"
        }

        .fa.fa-yc-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-yc-square:before {
            content: "\f1d4"
        }

        .fa.fa-qq,
        .fa.fa-tencent-weibo,
        .fa.fa-wechat,
        .fa.fa-weixin {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-wechat:before {
            content: "\f1d7"
        }

        .fa.fa-send:before {
            content: "\f1d8"
        }

        .fa.fa-paper-plane-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-paper-plane-o:before {
            content: "\f1d8"
        }

        .fa.fa-send-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-send-o:before {
            content: "\f1d8"
        }

        .fa.fa-circle-thin {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-circle-thin:before {
            content: "\f111"
        }

        .fa.fa-header:before {
            content: "\f1dc"
        }

        .fa.fa-sliders:before {
            content: "\f1de"
        }

        .fa.fa-futbol-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-futbol-o:before {
            content: "\f1e3"
        }

        .fa.fa-soccer-ball-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-soccer-ball-o:before {
            content: "\f1e3"
        }

        .fa.fa-slideshare,
        .fa.fa-twitch,
        .fa.fa-yelp {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-newspaper-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-newspaper-o:before {
            content: "\f1ea"
        }

        .fa.fa-cc-amex,
        .fa.fa-cc-discover,
        .fa.fa-cc-mastercard,
        .fa.fa-cc-paypal,
        .fa.fa-cc-stripe,
        .fa.fa-cc-visa,
        .fa.fa-google-wallet,
        .fa.fa-paypal {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-bell-slash-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-bell-slash-o:before {
            content: "\f1f6"
        }

        .fa.fa-trash:before {
            content: "\f2ed"
        }

        .fa.fa-copyright {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-eyedropper:before {
            content: "\f1fb"
        }

        .fa.fa-area-chart:before {
            content: "\f1fe"
        }

        .fa.fa-pie-chart:before {
            content: "\f200"
        }

        .fa.fa-line-chart:before {
            content: "\f201"
        }

        .fa.fa-angellist,
        .fa.fa-ioxhost,
        .fa.fa-lastfm,
        .fa.fa-lastfm-square {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-cc {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-cc:before {
            content: "\f20a"
        }

        .fa.fa-ils:before,
        .fa.fa-shekel:before,
        .fa.fa-sheqel:before {
            content: "\f20b"
        }

        .fa.fa-meanpath {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-meanpath:before {
            content: "\f2b4"
        }

        .fa.fa-buysellads,
        .fa.fa-connectdevelop,
        .fa.fa-dashcube,
        .fa.fa-forumbee,
        .fa.fa-leanpub,
        .fa.fa-sellsy,
        .fa.fa-shirtsinbulk,
        .fa.fa-simplybuilt,
        .fa.fa-skyatlas {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-diamond {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-diamond:before {
            content: "\f3a5"
        }

        .fa.fa-intersex:before {
            content: "\f224"
        }

        .fa.fa-facebook-official {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-facebook-official:before {
            content: "\f09a"
        }

        .fa.fa-pinterest-p,
        .fa.fa-whatsapp {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-hotel:before {
            content: "\f236"
        }

        .fa.fa-medium,
        .fa.fa-viacoin,
        .fa.fa-y-combinator,
        .fa.fa-yc {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-yc:before {
            content: "\f23b"
        }

        .fa.fa-expeditedssl,
        .fa.fa-opencart,
        .fa.fa-optin-monster {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-battery-4:before,
        .fa.fa-battery:before {
            content: "\f240"
        }

        .fa.fa-battery-3:before {
            content: "\f241"
        }

        .fa.fa-battery-2:before {
            content: "\f242"
        }

        .fa.fa-battery-1:before {
            content: "\f243"
        }

        .fa.fa-battery-0:before {
            content: "\f244"
        }

        .fa.fa-object-group,
        .fa.fa-object-ungroup,
        .fa.fa-sticky-note-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-sticky-note-o:before {
            content: "\f249"
        }

        .fa.fa-cc-diners-club,
        .fa.fa-cc-jcb {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-clone,
        .fa.fa-hourglass-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hourglass-o:before {
            content: "\f254"
        }

        .fa.fa-hourglass-1:before {
            content: "\f251"
        }

        .fa.fa-hourglass-2:before {
            content: "\f252"
        }

        .fa.fa-hourglass-3:before {
            content: "\f253"
        }

        .fa.fa-hand-rock-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-rock-o:before {
            content: "\f255"
        }

        .fa.fa-hand-grab-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-grab-o:before {
            content: "\f255"
        }

        .fa.fa-hand-paper-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-paper-o:before {
            content: "\f256"
        }

        .fa.fa-hand-stop-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-stop-o:before {
            content: "\f256"
        }

        .fa.fa-hand-scissors-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-scissors-o:before {
            content: "\f257"
        }

        .fa.fa-hand-lizard-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-lizard-o:before {
            content: "\f258"
        }

        .fa.fa-hand-spock-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-spock-o:before {
            content: "\f259"
        }

        .fa.fa-hand-pointer-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-pointer-o:before {
            content: "\f25a"
        }

        .fa.fa-hand-peace-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-hand-peace-o:before {
            content: "\f25b"
        }

        .fa.fa-registered {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-chrome,
        .fa.fa-creative-commons,
        .fa.fa-firefox,
        .fa.fa-get-pocket,
        .fa.fa-gg,
        .fa.fa-gg-circle,
        .fa.fa-internet-explorer,
        .fa.fa-odnoklassniki,
        .fa.fa-odnoklassniki-square,
        .fa.fa-opera,
        .fa.fa-safari,
        .fa.fa-wikipedia-w {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-television:before {
            content: "\f26c"
        }

        .fa.fa-500px,
        .fa.fa-amazon,
        .fa.fa-contao {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-calendar-plus-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-calendar-plus-o:before {
            content: "\f271"
        }

        .fa.fa-calendar-minus-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-calendar-minus-o:before {
            content: "\f272"
        }

        .fa.fa-calendar-times-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-calendar-times-o:before {
            content: "\f273"
        }

        .fa.fa-calendar-check-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-calendar-check-o:before {
            content: "\f274"
        }

        .fa.fa-map-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-map-o:before {
            content: "\f279"
        }

        .fa.fa-commenting:before {
            content: "\f4ad"
        }

        .fa.fa-commenting-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-commenting-o:before {
            content: "\f4ad"
        }

        .fa.fa-houzz,
        .fa.fa-vimeo {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-vimeo:before {
            content: "\f27d"
        }

        .fa.fa-black-tie,
        .fa.fa-edge,
        .fa.fa-fonticons,
        .fa.fa-reddit-alien {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-credit-card-alt:before {
            content: "\f09d"
        }

        .fa.fa-codiepie,
        .fa.fa-fort-awesome,
        .fa.fa-mixcloud,
        .fa.fa-modx,
        .fa.fa-product-hunt,
        .fa.fa-scribd,
        .fa.fa-usb {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-pause-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-pause-circle-o:before {
            content: "\f28b"
        }

        .fa.fa-stop-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-stop-circle-o:before {
            content: "\f28d"
        }

        .fa.fa-bluetooth,
        .fa.fa-bluetooth-b,
        .fa.fa-envira,
        .fa.fa-gitlab,
        .fa.fa-wheelchair-alt,
        .fa.fa-wpbeginner,
        .fa.fa-wpforms {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-wheelchair-alt:before {
            content: "\f368"
        }

        .fa.fa-question-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-question-circle-o:before {
            content: "\f059"
        }

        .fa.fa-volume-control-phone:before {
            content: "\f2a0"
        }

        .fa.fa-asl-interpreting:before {
            content: "\f2a3"
        }

        .fa.fa-deafness:before,
        .fa.fa-hard-of-hearing:before {
            content: "\f2a4"
        }

        .fa.fa-glide,
        .fa.fa-glide-g {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-signing:before {
            content: "\f2a7"
        }

        .fa.fa-first-order,
        .fa.fa-google-plus-official,
        .fa.fa-pied-piper,
        .fa.fa-snapchat,
        .fa.fa-snapchat-ghost,
        .fa.fa-snapchat-square,
        .fa.fa-themeisle,
        .fa.fa-viadeo,
        .fa.fa-viadeo-square,
        .fa.fa-yoast {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-google-plus-official:before {
            content: "\f2b3"
        }

        .fa.fa-google-plus-circle {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-google-plus-circle:before {
            content: "\f2b3"
        }

        .fa.fa-fa,
        .fa.fa-font-awesome {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-fa:before {
            content: "\f2b4"
        }

        .fa.fa-handshake-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-handshake-o:before {
            content: "\f2b5"
        }

        .fa.fa-envelope-open-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-envelope-open-o:before {
            content: "\f2b6"
        }

        .fa.fa-linode {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-address-book-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-address-book-o:before {
            content: "\f2b9"
        }

        .fa.fa-vcard:before {
            content: "\f2bb"
        }

        .fa.fa-address-card-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-address-card-o:before {
            content: "\f2bb"
        }

        .fa.fa-vcard-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-vcard-o:before {
            content: "\f2bb"
        }

        .fa.fa-user-circle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-user-circle-o:before {
            content: "\f2bd"
        }

        .fa.fa-user-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-user-o:before {
            content: "\f007"
        }

        .fa.fa-id-badge {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-drivers-license:before {
            content: "\f2c2"
        }

        .fa.fa-id-card-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-id-card-o:before {
            content: "\f2c2"
        }

        .fa.fa-drivers-license-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-drivers-license-o:before {
            content: "\f2c2"
        }

        .fa.fa-free-code-camp,
        .fa.fa-quora,
        .fa.fa-telegram {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-thermometer-4:before,
        .fa.fa-thermometer:before {
            content: "\f2c7"
        }

        .fa.fa-thermometer-3:before {
            content: "\f2c8"
        }

        .fa.fa-thermometer-2:before {
            content: "\f2c9"
        }

        .fa.fa-thermometer-1:before {
            content: "\f2ca"
        }

        .fa.fa-thermometer-0:before {
            content: "\f2cb"
        }

        .fa.fa-bathtub:before,
        .fa.fa-s15:before {
            content: "\f2cd"
        }

        .fa.fa-window-maximize,
        .fa.fa-window-restore {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-times-rectangle:before {
            content: "\f410"
        }

        .fa.fa-window-close-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-window-close-o:before {
            content: "\f410"
        }

        .fa.fa-times-rectangle-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-times-rectangle-o:before {
            content: "\f410"
        }

        .fa.fa-bandcamp,
        .fa.fa-eercast,
        .fa.fa-etsy,
        .fa.fa-grav,
        .fa.fa-imdb,
        .fa.fa-ravelry {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-eercast:before {
            content: "\f2da"
        }

        .fa.fa-snowflake-o {
            font-family: "Font Awesome 5 Free";
            font-weight: 400
        }

        .fa.fa-snowflake-o:before {
            content: "\f2dc"
        }

        .fa.fa-superpowers,
        .fa.fa-wpexplorer {
            font-family: "Font Awesome 5 Brands";
            font-weight: 400
        }

        .fa.fa-cab:before {
            content: "\f1ba"
        }

    </style>
    <style media="all" id="fa-main">
        /*!
 * Font Awesome Free 5.15.4 by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License)
 */
        .fa,
        .fab,
        .fad,
        .fal,
        .far,
        .fas {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1
        }

        .fa-lg {
            font-size: 1.33333em;
            line-height: .75em;
            vertical-align: -.0667em
        }

        .fa-xs {
            font-size: .75em
        }

        .fa-sm {
            font-size: .875em
        }

        .fa-1x {
            font-size: 1em
        }

        .fa-2x {
            font-size: 2em
        }

        .fa-3x {
            font-size: 3em
        }

        .fa-4x {
            font-size: 4em
        }

        .fa-5x {
            font-size: 5em
        }

        .fa-6x {
            font-size: 6em
        }

        .fa-7x {
            font-size: 7em
        }

        .fa-8x {
            font-size: 8em
        }

        .fa-9x {
            font-size: 9em
        }

        .fa-10x {
            font-size: 10em
        }

        .fa-fw {
            text-align: center;
            width: 1.25em
        }

        .fa-ul {
            list-style-type: none;
            margin-left: 2.5em;
            padding-left: 0
        }

        .fa-ul>li {
            position: relative
        }

        .fa-li {
            left: -2em;
            position: absolute;
            text-align: center;
            width: 2em;
            line-height: inherit
        }

        .fa-border {
            border: .08em solid #eee;
            border-radius: .1em;
            padding: .2em .25em .15em
        }

        .fa-pull-left {
            float: left
        }

        .fa-pull-right {
            float: right
        }

        .fa.fa-pull-left,
        .fab.fa-pull-left,
        .fal.fa-pull-left,
        .far.fa-pull-left,
        .fas.fa-pull-left {
            margin-right: .3em
        }

        .fa.fa-pull-right,
        .fab.fa-pull-right,
        .fal.fa-pull-right,
        .far.fa-pull-right,
        .fas.fa-pull-right {
            margin-left: .3em
        }

        .fa-spin {
            -webkit-animation: fa-spin 2s linear infinite;
            animation: fa-spin 2s linear infinite
        }

        .fa-pulse {
            -webkit-animation: fa-spin 1s steps(8) infinite;
            animation: fa-spin 1s steps(8) infinite
        }

        @-webkit-keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        @keyframes fa-spin {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg)
            }

            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn)
            }
        }

        .fa-rotate-90 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
            -webkit-transform: rotate(90deg);
            transform: rotate(90deg)
        }

        .fa-rotate-180 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
            -webkit-transform: rotate(180deg);
            transform: rotate(180deg)
        }

        .fa-rotate-270 {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
            -webkit-transform: rotate(270deg);
            transform: rotate(270deg)
        }

        .fa-flip-horizontal {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1)
        }

        .fa-flip-vertical {
            -webkit-transform: scaleY(-1);
            transform: scaleY(-1)
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical,
        .fa-flip-vertical {
            -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)"
        }

        .fa-flip-both,
        .fa-flip-horizontal.fa-flip-vertical {
            -webkit-transform: scale(-1);
            transform: scale(-1)
        }

        :root .fa-flip-both,
        :root .fa-flip-horizontal,
        :root .fa-flip-vertical,
        :root .fa-rotate-90,
        :root .fa-rotate-180,
        :root .fa-rotate-270 {
            -webkit-filter: none;
            filter: none
        }

        .fa-stack {
            display: inline-block;
            height: 2em;
            line-height: 2em;
            position: relative;
            vertical-align: middle;
            width: 2.5em
        }

        .fa-stack-1x,
        .fa-stack-2x {
            left: 0;
            position: absolute;
            text-align: center;
            width: 100%
        }

        .fa-stack-1x {
            line-height: inherit
        }

        .fa-stack-2x {
            font-size: 2em
        }

        .fa-inverse {
            color: #fff
        }

        .fa-500px:before {
            content: "\f26e"
        }

        .fa-accessible-icon:before {
            content: "\f368"
        }

        .fa-accusoft:before {
            content: "\f369"
        }

        .fa-acquisitions-incorporated:before {
            content: "\f6af"
        }

        .fa-ad:before {
            content: "\f641"
        }

        .fa-address-book:before {
            content: "\f2b9"
        }

        .fa-address-card:before {
            content: "\f2bb"
        }

        .fa-adjust:before {
            content: "\f042"
        }

        .fa-adn:before {
            content: "\f170"
        }

        .fa-adversal:before {
            content: "\f36a"
        }

        .fa-affiliatetheme:before {
            content: "\f36b"
        }

        .fa-air-freshener:before {
            content: "\f5d0"
        }

        .fa-airbnb:before {
            content: "\f834"
        }

        .fa-algolia:before {
            content: "\f36c"
        }

        .fa-align-center:before {
            content: "\f037"
        }

        .fa-align-justify:before {
            content: "\f039"
        }

        .fa-align-left:before {
            content: "\f036"
        }

        .fa-align-right:before {
            content: "\f038"
        }

        .fa-alipay:before {
            content: "\f642"
        }

        .fa-allergies:before {
            content: "\f461"
        }

        .fa-amazon:before {
            content: "\f270"
        }

        .fa-amazon-pay:before {
            content: "\f42c"
        }

        .fa-ambulance:before {
            content: "\f0f9"
        }

        .fa-american-sign-language-interpreting:before {
            content: "\f2a3"
        }

        .fa-amilia:before {
            content: "\f36d"
        }

        .fa-anchor:before {
            content: "\f13d"
        }

        .fa-android:before {
            content: "\f17b"
        }

        .fa-angellist:before {
            content: "\f209"
        }

        .fa-angle-double-down:before {
            content: "\f103"
        }

        .fa-angle-double-left:before {
            content: "\f100"
        }

        .fa-angle-double-right:before {
            content: "\f101"
        }

        .fa-angle-double-up:before {
            content: "\f102"
        }

        .fa-angle-down:before {
            content: "\f107"
        }

        .fa-angle-left:before {
            content: "\f104"
        }

        .fa-angle-right:before {
            content: "\f105"
        }

        .fa-angle-up:before {
            content: "\f106"
        }

        .fa-angry:before {
            content: "\f556"
        }

        .fa-angrycreative:before {
            content: "\f36e"
        }

        .fa-angular:before {
            content: "\f420"
        }

        .fa-ankh:before {
            content: "\f644"
        }

        .fa-app-store:before {
            content: "\f36f"
        }

        .fa-app-store-ios:before {
            content: "\f370"
        }

        .fa-apper:before {
            content: "\f371"
        }

        .fa-apple:before {
            content: "\f179"
        }

        .fa-apple-alt:before {
            content: "\f5d1"
        }

        .fa-apple-pay:before {
            content: "\f415"
        }

        .fa-archive:before {
            content: "\f187"
        }

        .fa-archway:before {
            content: "\f557"
        }

        .fa-arrow-alt-circle-down:before {
            content: "\f358"
        }

        .fa-arrow-alt-circle-left:before {
            content: "\f359"
        }

        .fa-arrow-alt-circle-right:before {
            content: "\f35a"
        }

        .fa-arrow-alt-circle-up:before {
            content: "\f35b"
        }

        .fa-arrow-circle-down:before {
            content: "\f0ab"
        }

        .fa-arrow-circle-left:before {
            content: "\f0a8"
        }

        .fa-arrow-circle-right:before {
            content: "\f0a9"
        }

        .fa-arrow-circle-up:before {
            content: "\f0aa"
        }

        .fa-arrow-down:before {
            content: "\f063"
        }

        .fa-arrow-left:before {
            content: "\f060"
        }

        .fa-arrow-right:before {
            content: "\f061"
        }

        .fa-arrow-up:before {
            content: "\f062"
        }

        .fa-arrows-alt:before {
            content: "\f0b2"
        }

        .fa-arrows-alt-h:before {
            content: "\f337"
        }

        .fa-arrows-alt-v:before {
            content: "\f338"
        }

        .fa-artstation:before {
            content: "\f77a"
        }

        .fa-assistive-listening-systems:before {
            content: "\f2a2"
        }

        .fa-asterisk:before {
            content: "\f069"
        }

        .fa-asymmetrik:before {
            content: "\f372"
        }

        .fa-at:before {
            content: "\f1fa"
        }

        .fa-atlas:before {
            content: "\f558"
        }

        .fa-atlassian:before {
            content: "\f77b"
        }

        .fa-atom:before {
            content: "\f5d2"
        }

        .fa-audible:before {
            content: "\f373"
        }

        .fa-audio-description:before {
            content: "\f29e"
        }

        .fa-autoprefixer:before {
            content: "\f41c"
        }

        .fa-avianex:before {
            content: "\f374"
        }

        .fa-aviato:before {
            content: "\f421"
        }

        .fa-award:before {
            content: "\f559"
        }

        .fa-aws:before {
            content: "\f375"
        }

        .fa-baby:before {
            content: "\f77c"
        }

        .fa-baby-carriage:before {
            content: "\f77d"
        }

        .fa-backspace:before {
            content: "\f55a"
        }

        .fa-backward:before {
            content: "\f04a"
        }

        .fa-bacon:before {
            content: "\f7e5"
        }

        .fa-bacteria:before {
            content: "\e059"
        }

        .fa-bacterium:before {
            content: "\e05a"
        }

        .fa-bahai:before {
            content: "\f666"
        }

        .fa-balance-scale:before {
            content: "\f24e"
        }

        .fa-balance-scale-left:before {
            content: "\f515"
        }

        .fa-balance-scale-right:before {
            content: "\f516"
        }

        .fa-ban:before {
            content: "\f05e"
        }

        .fa-band-aid:before {
            content: "\f462"
        }

        .fa-bandcamp:before {
            content: "\f2d5"
        }

        .fa-barcode:before {
            content: "\f02a"
        }

        .fa-bars:before {
            content: "\f0c9"
        }

        .fa-baseball-ball:before {
            content: "\f433"
        }

        .fa-basketball-ball:before {
            content: "\f434"
        }

        .fa-bath:before {
            content: "\f2cd"
        }

        .fa-battery-empty:before {
            content: "\f244"
        }

        .fa-battery-full:before {
            content: "\f240"
        }

        .fa-battery-half:before {
            content: "\f242"
        }

        .fa-battery-quarter:before {
            content: "\f243"
        }

        .fa-battery-three-quarters:before {
            content: "\f241"
        }

        .fa-battle-net:before {
            content: "\f835"
        }

        .fa-bed:before {
            content: "\f236"
        }

        .fa-beer:before {
            content: "\f0fc"
        }

        .fa-behance:before {
            content: "\f1b4"
        }

        .fa-behance-square:before {
            content: "\f1b5"
        }

        .fa-bell:before {
            content: "\f0f3"
        }

        .fa-bell-slash:before {
            content: "\f1f6"
        }

        .fa-bezier-curve:before {
            content: "\f55b"
        }

        .fa-bible:before {
            content: "\f647"
        }

        .fa-bicycle:before {
            content: "\f206"
        }

        .fa-biking:before {
            content: "\f84a"
        }

        .fa-bimobject:before {
            content: "\f378"
        }

        .fa-binoculars:before {
            content: "\f1e5"
        }

        .fa-biohazard:before {
            content: "\f780"
        }

        .fa-birthday-cake:before {
            content: "\f1fd"
        }

        .fa-bitbucket:before {
            content: "\f171"
        }

        .fa-bitcoin:before {
            content: "\f379"
        }

        .fa-bity:before {
            content: "\f37a"
        }

        .fa-black-tie:before {
            content: "\f27e"
        }

        .fa-blackberry:before {
            content: "\f37b"
        }

        .fa-blender:before {
            content: "\f517"
        }

        .fa-blender-phone:before {
            content: "\f6b6"
        }

        .fa-blind:before {
            content: "\f29d"
        }

        .fa-blog:before {
            content: "\f781"
        }

        .fa-blogger:before {
            content: "\f37c"
        }

        .fa-blogger-b:before {
            content: "\f37d"
        }

        .fa-bluetooth:before {
            content: "\f293"
        }

        .fa-bluetooth-b:before {
            content: "\f294"
        }

        .fa-bold:before {
            content: "\f032"
        }

        .fa-bolt:before {
            content: "\f0e7"
        }

        .fa-bomb:before {
            content: "\f1e2"
        }

        .fa-bone:before {
            content: "\f5d7"
        }

        .fa-bong:before {
            content: "\f55c"
        }

        .fa-book:before {
            content: "\f02d"
        }

        .fa-book-dead:before {
            content: "\f6b7"
        }

        .fa-book-medical:before {
            content: "\f7e6"
        }

        .fa-book-open:before {
            content: "\f518"
        }

        .fa-book-reader:before {
            content: "\f5da"
        }

        .fa-bookmark:before {
            content: "\f02e"
        }

        .fa-bootstrap:before {
            content: "\f836"
        }

        .fa-border-all:before {
            content: "\f84c"
        }

        .fa-border-none:before {
            content: "\f850"
        }

        .fa-border-style:before {
            content: "\f853"
        }

        .fa-bowling-ball:before {
            content: "\f436"
        }

        .fa-box:before {
            content: "\f466"
        }

        .fa-box-open:before {
            content: "\f49e"
        }

        .fa-box-tissue:before {
            content: "\e05b"
        }

        .fa-boxes:before {
            content: "\f468"
        }

        .fa-braille:before {
            content: "\f2a1"
        }

        .fa-brain:before {
            content: "\f5dc"
        }

        .fa-bread-slice:before {
            content: "\f7ec"
        }

        .fa-briefcase:before {
            content: "\f0b1"
        }

        .fa-briefcase-medical:before {
            content: "\f469"
        }

        .fa-broadcast-tower:before {
            content: "\f519"
        }

        .fa-broom:before {
            content: "\f51a"
        }

        .fa-brush:before {
            content: "\f55d"
        }

        .fa-btc:before {
            content: "\f15a"
        }

        .fa-buffer:before {
            content: "\f837"
        }

        .fa-bug:before {
            content: "\f188"
        }

        .fa-building:before {
            content: "\f1ad"
        }

        .fa-bullhorn:before {
            content: "\f0a1"
        }

        .fa-bullseye:before {
            content: "\f140"
        }

        .fa-burn:before {
            content: "\f46a"
        }

        .fa-buromobelexperte:before {
            content: "\f37f"
        }

        .fa-bus:before {
            content: "\f207"
        }

        .fa-bus-alt:before {
            content: "\f55e"
        }

        .fa-business-time:before {
            content: "\f64a"
        }

        .fa-buy-n-large:before {
            content: "\f8a6"
        }

        .fa-buysellads:before {
            content: "\f20d"
        }

        .fa-calculator:before {
            content: "\f1ec"
        }

        .fa-calendar:before {
            content: "\f133"
        }

        .fa-calendar-alt:before {
            content: "\f073"
        }

        .fa-calendar-check:before {
            content: "\f274"
        }

        .fa-calendar-day:before {
            content: "\f783"
        }

        .fa-calendar-minus:before {
            content: "\f272"
        }

        .fa-calendar-plus:before {
            content: "\f271"
        }

        .fa-calendar-times:before {
            content: "\f273"
        }

        .fa-calendar-week:before {
            content: "\f784"
        }

        .fa-camera:before {
            content: "\f030"
        }

        .fa-camera-retro:before {
            content: "\f083"
        }

        .fa-campground:before {
            content: "\f6bb"
        }

        .fa-canadian-maple-leaf:before {
            content: "\f785"
        }

        .fa-candy-cane:before {
            content: "\f786"
        }

        .fa-cannabis:before {
            content: "\f55f"
        }

        .fa-capsules:before {
            content: "\f46b"
        }

        .fa-car:before {
            content: "\f1b9"
        }

        .fa-car-alt:before {
            content: "\f5de"
        }

        .fa-car-battery:before {
            content: "\f5df"
        }

        .fa-car-crash:before {
            content: "\f5e1"
        }

        .fa-car-side:before {
            content: "\f5e4"
        }

        .fa-caravan:before {
            content: "\f8ff"
        }

        .fa-caret-down:before {
            content: "\f0d7"
        }

        .fa-caret-left:before {
            content: "\f0d9"
        }

        .fa-caret-right:before {
            content: "\f0da"
        }

        .fa-caret-square-down:before {
            content: "\f150"
        }

        .fa-caret-square-left:before {
            content: "\f191"
        }

        .fa-caret-square-right:before {
            content: "\f152"
        }

        .fa-caret-square-up:before {
            content: "\f151"
        }

        .fa-caret-up:before {
            content: "\f0d8"
        }

        .fa-carrot:before {
            content: "\f787"
        }

        .fa-cart-arrow-down:before {
            content: "\f218"
        }

        .fa-cart-plus:before {
            content: "\f217"
        }

        .fa-cash-register:before {
            content: "\f788"
        }

        .fa-cat:before {
            content: "\f6be"
        }

        .fa-cc-amazon-pay:before {
            content: "\f42d"
        }

        .fa-cc-amex:before {
            content: "\f1f3"
        }

        .fa-cc-apple-pay:before {
            content: "\f416"
        }

        .fa-cc-diners-club:before {
            content: "\f24c"
        }

        .fa-cc-discover:before {
            content: "\f1f2"
        }

        .fa-cc-jcb:before {
            content: "\f24b"
        }

        .fa-cc-mastercard:before {
            content: "\f1f1"
        }

        .fa-cc-paypal:before {
            content: "\f1f4"
        }

        .fa-cc-stripe:before {
            content: "\f1f5"
        }

        .fa-cc-visa:before {
            content: "\f1f0"
        }

        .fa-centercode:before {
            content: "\f380"
        }

        .fa-centos:before {
            content: "\f789"
        }

        .fa-certificate:before {
            content: "\f0a3"
        }

        .fa-chair:before {
            content: "\f6c0"
        }

        .fa-chalkboard:before {
            content: "\f51b"
        }

        .fa-chalkboard-teacher:before {
            content: "\f51c"
        }

        .fa-charging-station:before {
            content: "\f5e7"
        }

        .fa-chart-area:before {
            content: "\f1fe"
        }

        .fa-chart-bar:before {
            content: "\f080"
        }

        .fa-chart-line:before {
            content: "\f201"
        }

        .fa-chart-pie:before {
            content: "\f200"
        }

        .fa-check:before {
            content: "\f00c"
        }

        .fa-check-circle:before {
            content: "\f058"
        }

        .fa-check-double:before {
            content: "\f560"
        }

        .fa-check-square:before {
            content: "\f14a"
        }

        .fa-cheese:before {
            content: "\f7ef"
        }

        .fa-chess:before {
            content: "\f439"
        }

        .fa-chess-bishop:before {
            content: "\f43a"
        }

        .fa-chess-board:before {
            content: "\f43c"
        }

        .fa-chess-king:before {
            content: "\f43f"
        }

        .fa-chess-knight:before {
            content: "\f441"
        }

        .fa-chess-pawn:before {
            content: "\f443"
        }

        .fa-chess-queen:before {
            content: "\f445"
        }

        .fa-chess-rook:before {
            content: "\f447"
        }

        .fa-chevron-circle-down:before {
            content: "\f13a"
        }

        .fa-chevron-circle-left:before {
            content: "\f137"
        }

        .fa-chevron-circle-right:before {
            content: "\f138"
        }

        .fa-chevron-circle-up:before {
            content: "\f139"
        }

        .fa-chevron-down:before {
            content: "\f078"
        }

        .fa-chevron-left:before {
            content: "\f053"
        }

        .fa-chevron-right:before {
            content: "\f054"
        }

        .fa-chevron-up:before {
            content: "\f077"
        }

        .fa-child:before {
            content: "\f1ae"
        }

        .fa-chrome:before {
            content: "\f268"
        }

        .fa-chromecast:before {
            content: "\f838"
        }

        .fa-church:before {
            content: "\f51d"
        }

        .fa-circle:before {
            content: "\f111"
        }

        .fa-circle-notch:before {
            content: "\f1ce"
        }

        .fa-city:before {
            content: "\f64f"
        }

        .fa-clinic-medical:before {
            content: "\f7f2"
        }

        .fa-clipboard:before {
            content: "\f328"
        }

        .fa-clipboard-check:before {
            content: "\f46c"
        }

        .fa-clipboard-list:before {
            content: "\f46d"
        }

        .fa-clock:before {
            content: "\f017"
        }

        .fa-clone:before {
            content: "\f24d"
        }

        .fa-closed-captioning:before {
            content: "\f20a"
        }

        .fa-cloud:before {
            content: "\f0c2"
        }

        .fa-cloud-download-alt:before {
            content: "\f381"
        }

        .fa-cloud-meatball:before {
            content: "\f73b"
        }

        .fa-cloud-moon:before {
            content: "\f6c3"
        }

        .fa-cloud-moon-rain:before {
            content: "\f73c"
        }

        .fa-cloud-rain:before {
            content: "\f73d"
        }

        .fa-cloud-showers-heavy:before {
            content: "\f740"
        }

        .fa-cloud-sun:before {
            content: "\f6c4"
        }

        .fa-cloud-sun-rain:before {
            content: "\f743"
        }

        .fa-cloud-upload-alt:before {
            content: "\f382"
        }

        .fa-cloudflare:before {
            content: "\e07d"
        }

        .fa-cloudscale:before {
            content: "\f383"
        }

        .fa-cloudsmith:before {
            content: "\f384"
        }

        .fa-cloudversify:before {
            content: "\f385"
        }

        .fa-cocktail:before {
            content: "\f561"
        }

        .fa-code:before {
            content: "\f121"
        }

        .fa-code-branch:before {
            content: "\f126"
        }

        .fa-codepen:before {
            content: "\f1cb"
        }

        .fa-codiepie:before {
            content: "\f284"
        }

        .fa-coffee:before {
            content: "\f0f4"
        }

        .fa-cog:before {
            content: "\f013"
        }

        .fa-cogs:before {
            content: "\f085"
        }

        .fa-coins:before {
            content: "\f51e"
        }

        .fa-columns:before {
            content: "\f0db"
        }

        .fa-comment:before {
            content: "\f075"
        }

        .fa-comment-alt:before {
            content: "\f27a"
        }

        .fa-comment-dollar:before {
            content: "\f651"
        }

        .fa-comment-dots:before {
            content: "\f4ad"
        }

        .fa-comment-medical:before {
            content: "\f7f5"
        }

        .fa-comment-slash:before {
            content: "\f4b3"
        }

        .fa-comments:before {
            content: "\f086"
        }

        .fa-comments-dollar:before {
            content: "\f653"
        }

        .fa-compact-disc:before {
            content: "\f51f"
        }

        .fa-compass:before {
            content: "\f14e"
        }

        .fa-compress:before {
            content: "\f066"
        }

        .fa-compress-alt:before {
            content: "\f422"
        }

        .fa-compress-arrows-alt:before {
            content: "\f78c"
        }

        .fa-concierge-bell:before {
            content: "\f562"
        }

        .fa-confluence:before {
            content: "\f78d"
        }

        .fa-connectdevelop:before {
            content: "\f20e"
        }

        .fa-contao:before {
            content: "\f26d"
        }

        .fa-cookie:before {
            content: "\f563"
        }

        .fa-cookie-bite:before {
            content: "\f564"
        }

        .fa-copy:before {
            content: "\f0c5"
        }

        .fa-copyright:before {
            content: "\f1f9"
        }

        .fa-cotton-bureau:before {
            content: "\f89e"
        }

        .fa-couch:before {
            content: "\f4b8"
        }

        .fa-cpanel:before {
            content: "\f388"
        }

        .fa-creative-commons:before {
            content: "\f25e"
        }

        .fa-creative-commons-by:before {
            content: "\f4e7"
        }

        .fa-creative-commons-nc:before {
            content: "\f4e8"
        }

        .fa-creative-commons-nc-eu:before {
            content: "\f4e9"
        }

        .fa-creative-commons-nc-jp:before {
            content: "\f4ea"
        }

        .fa-creative-commons-nd:before {
            content: "\f4eb"
        }

        .fa-creative-commons-pd:before {
            content: "\f4ec"
        }

        .fa-creative-commons-pd-alt:before {
            content: "\f4ed"
        }

        .fa-creative-commons-remix:before {
            content: "\f4ee"
        }

        .fa-creative-commons-sa:before {
            content: "\f4ef"
        }

        .fa-creative-commons-sampling:before {
            content: "\f4f0"
        }

        .fa-creative-commons-sampling-plus:before {
            content: "\f4f1"
        }

        .fa-creative-commons-share:before {
            content: "\f4f2"
        }

        .fa-creative-commons-zero:before {
            content: "\f4f3"
        }

        .fa-credit-card:before {
            content: "\f09d"
        }

        .fa-critical-role:before {
            content: "\f6c9"
        }

        .fa-crop:before {
            content: "\f125"
        }

        .fa-crop-alt:before {
            content: "\f565"
        }

        .fa-cross:before {
            content: "\f654"
        }

        .fa-crosshairs:before {
            content: "\f05b"
        }

        .fa-crow:before {
            content: "\f520"
        }

        .fa-crown:before {
            content: "\f521"
        }

        .fa-crutch:before {
            content: "\f7f7"
        }

        .fa-css3:before {
            content: "\f13c"
        }

        .fa-css3-alt:before {
            content: "\f38b"
        }

        .fa-cube:before {
            content: "\f1b2"
        }

        .fa-cubes:before {
            content: "\f1b3"
        }

        .fa-cut:before {
            content: "\f0c4"
        }

        .fa-cuttlefish:before {
            content: "\f38c"
        }

        .fa-d-and-d:before {
            content: "\f38d"
        }

        .fa-d-and-d-beyond:before {
            content: "\f6ca"
        }

        .fa-dailymotion:before {
            content: "\e052"
        }

        .fa-dashcube:before {
            content: "\f210"
        }

        .fa-database:before {
            content: "\f1c0"
        }

        .fa-deaf:before {
            content: "\f2a4"
        }

        .fa-deezer:before {
            content: "\e077"
        }

        .fa-delicious:before {
            content: "\f1a5"
        }

        .fa-democrat:before {
            content: "\f747"
        }

        .fa-deploydog:before {
            content: "\f38e"
        }

        .fa-deskpro:before {
            content: "\f38f"
        }

        .fa-desktop:before {
            content: "\f108"
        }

        .fa-dev:before {
            content: "\f6cc"
        }

        .fa-deviantart:before {
            content: "\f1bd"
        }

        .fa-dharmachakra:before {
            content: "\f655"
        }

        .fa-dhl:before {
            content: "\f790"
        }

        .fa-diagnoses:before {
            content: "\f470"
        }

        .fa-diaspora:before {
            content: "\f791"
        }

        .fa-dice:before {
            content: "\f522"
        }

        .fa-dice-d20:before {
            content: "\f6cf"
        }

        .fa-dice-d6:before {
            content: "\f6d1"
        }

        .fa-dice-five:before {
            content: "\f523"
        }

        .fa-dice-four:before {
            content: "\f524"
        }

        .fa-dice-one:before {
            content: "\f525"
        }

        .fa-dice-six:before {
            content: "\f526"
        }

        .fa-dice-three:before {
            content: "\f527"
        }

        .fa-dice-two:before {
            content: "\f528"
        }

        .fa-digg:before {
            content: "\f1a6"
        }

        .fa-digital-ocean:before {
            content: "\f391"
        }

        .fa-digital-tachograph:before {
            content: "\f566"
        }

        .fa-directions:before {
            content: "\f5eb"
        }

        .fa-discord:before {
            content: "\f392"
        }

        .fa-discourse:before {
            content: "\f393"
        }

        .fa-disease:before {
            content: "\f7fa"
        }

        .fa-divide:before {
            content: "\f529"
        }

        .fa-dizzy:before {
            content: "\f567"
        }

        .fa-dna:before {
            content: "\f471"
        }

        .fa-dochub:before {
            content: "\f394"
        }

        .fa-docker:before {
            content: "\f395"
        }

        .fa-dog:before {
            content: "\f6d3"
        }

        .fa-dollar-sign:before {
            content: "\f155"
        }

        .fa-dolly:before {
            content: "\f472"
        }

        .fa-dolly-flatbed:before {
            content: "\f474"
        }

        .fa-donate:before {
            content: "\f4b9"
        }

        .fa-door-closed:before {
            content: "\f52a"
        }

        .fa-door-open:before {
            content: "\f52b"
        }

        .fa-dot-circle:before {
            content: "\f192"
        }

        .fa-dove:before {
            content: "\f4ba"
        }

        .fa-download:before {
            content: "\f019"
        }

        .fa-draft2digital:before {
            content: "\f396"
        }

        .fa-drafting-compass:before {
            content: "\f568"
        }

        .fa-dragon:before {
            content: "\f6d5"
        }

        .fa-draw-polygon:before {
            content: "\f5ee"
        }

        .fa-dribbble:before {
            content: "\f17d"
        }

        .fa-dribbble-square:before {
            content: "\f397"
        }

        .fa-dropbox:before {
            content: "\f16b"
        }

        .fa-drum:before {
            content: "\f569"
        }

        .fa-drum-steelpan:before {
            content: "\f56a"
        }

        .fa-drumstick-bite:before {
            content: "\f6d7"
        }

        .fa-drupal:before {
            content: "\f1a9"
        }

        .fa-dumbbell:before {
            content: "\f44b"
        }

        .fa-dumpster:before {
            content: "\f793"
        }

        .fa-dumpster-fire:before {
            content: "\f794"
        }

        .fa-dungeon:before {
            content: "\f6d9"
        }

        .fa-dyalog:before {
            content: "\f399"
        }

        .fa-earlybirds:before {
            content: "\f39a"
        }

        .fa-ebay:before {
            content: "\f4f4"
        }

        .fa-edge:before {
            content: "\f282"
        }

        .fa-edge-legacy:before {
            content: "\e078"
        }

        .fa-edit:before {
            content: "\f044"
        }

        .fa-egg:before {
            content: "\f7fb"
        }

        .fa-eject:before {
            content: "\f052"
        }

        .fa-elementor:before {
            content: "\f430"
        }

        .fa-ellipsis-h:before {
            content: "\f141"
        }

        .fa-ellipsis-v:before {
            content: "\f142"
        }

        .fa-ello:before {
            content: "\f5f1"
        }

        .fa-ember:before {
            content: "\f423"
        }

        .fa-empire:before {
            content: "\f1d1"
        }

        .fa-envelope:before {
            content: "\f0e0"
        }

        .fa-envelope-open:before {
            content: "\f2b6"
        }

        .fa-envelope-open-text:before {
            content: "\f658"
        }

        .fa-envelope-square:before {
            content: "\f199"
        }

        .fa-envira:before {
            content: "\f299"
        }

        .fa-equals:before {
            content: "\f52c"
        }

        .fa-eraser:before {
            content: "\f12d"
        }

        .fa-erlang:before {
            content: "\f39d"
        }

        .fa-ethereum:before {
            content: "\f42e"
        }

        .fa-ethernet:before {
            content: "\f796"
        }

        .fa-etsy:before {
            content: "\f2d7"
        }

        .fa-euro-sign:before {
            content: "\f153"
        }

        .fa-evernote:before {
            content: "\f839"
        }

        .fa-exchange-alt:before {
            content: "\f362"
        }

        .fa-exclamation:before {
            content: "\f12a"
        }

        .fa-exclamation-circle:before {
            content: "\f06a"
        }

        .fa-exclamation-triangle:before {
            content: "\f071"
        }

        .fa-expand:before {
            content: "\f065"
        }

        .fa-expand-alt:before {
            content: "\f424"
        }

        .fa-expand-arrows-alt:before {
            content: "\f31e"
        }

        .fa-expeditedssl:before {
            content: "\f23e"
        }

        .fa-external-link-alt:before {
            content: "\f35d"
        }

        .fa-external-link-square-alt:before {
            content: "\f360"
        }

        .fa-eye:before {
            content: "\f06e"
        }

        .fa-eye-dropper:before {
            content: "\f1fb"
        }

        .fa-eye-slash:before {
            content: "\f070"
        }

        .fa-facebook:before {
            content: "\f09a"
        }

        .fa-facebook-f:before {
            content: "\f39e"
        }

        .fa-facebook-messenger:before {
            content: "\f39f"
        }

        .fa-facebook-square:before {
            content: "\f082"
        }

        .fa-fan:before {
            content: "\f863"
        }

        .fa-fantasy-flight-games:before {
            content: "\f6dc"
        }

        .fa-fast-backward:before {
            content: "\f049"
        }

        .fa-fast-forward:before {
            content: "\f050"
        }

        .fa-faucet:before {
            content: "\e005"
        }

        .fa-fax:before {
            content: "\f1ac"
        }

        .fa-feather:before {
            content: "\f52d"
        }

        .fa-feather-alt:before {
            content: "\f56b"
        }

        .fa-fedex:before {
            content: "\f797"
        }

        .fa-fedora:before {
            content: "\f798"
        }

        .fa-female:before {
            content: "\f182"
        }

        .fa-fighter-jet:before {
            content: "\f0fb"
        }

        .fa-figma:before {
            content: "\f799"
        }

        .fa-file:before {
            content: "\f15b"
        }

        .fa-file-alt:before {
            content: "\f15c"
        }

        .fa-file-archive:before {
            content: "\f1c6"
        }

        .fa-file-audio:before {
            content: "\f1c7"
        }

        .fa-file-code:before {
            content: "\f1c9"
        }

        .fa-file-contract:before {
            content: "\f56c"
        }

        .fa-file-csv:before {
            content: "\f6dd"
        }

        .fa-file-download:before {
            content: "\f56d"
        }

        .fa-file-excel:before {
            content: "\f1c3"
        }

        .fa-file-export:before {
            content: "\f56e"
        }

        .fa-file-image:before {
            content: "\f1c5"
        }

        .fa-file-import:before {
            content: "\f56f"
        }

        .fa-file-invoice:before {
            content: "\f570"
        }

        .fa-file-invoice-dollar:before {
            content: "\f571"
        }

        .fa-file-medical:before {
            content: "\f477"
        }

        .fa-file-medical-alt:before {
            content: "\f478"
        }

        .fa-file-pdf:before {
            content: "\f1c1"
        }

        .fa-file-powerpoint:before {
            content: "\f1c4"
        }

        .fa-file-prescription:before {
            content: "\f572"
        }

        .fa-file-signature:before {
            content: "\f573"
        }

        .fa-file-upload:before {
            content: "\f574"
        }

        .fa-file-video:before {
            content: "\f1c8"
        }

        .fa-file-word:before {
            content: "\f1c2"
        }

        .fa-fill:before {
            content: "\f575"
        }

        .fa-fill-drip:before {
            content: "\f576"
        }

        .fa-film:before {
            content: "\f008"
        }

        .fa-filter:before {
            content: "\f0b0"
        }

        .fa-fingerprint:before {
            content: "\f577"
        }

        .fa-fire:before {
            content: "\f06d"
        }

        .fa-fire-alt:before {
            content: "\f7e4"
        }

        .fa-fire-extinguisher:before {
            content: "\f134"
        }

        .fa-firefox:before {
            content: "\f269"
        }

        .fa-firefox-browser:before {
            content: "\e007"
        }

        .fa-first-aid:before {
            content: "\f479"
        }

        .fa-first-order:before {
            content: "\f2b0"
        }

        .fa-first-order-alt:before {
            content: "\f50a"
        }

        .fa-firstdraft:before {
            content: "\f3a1"
        }

        .fa-fish:before {
            content: "\f578"
        }

        .fa-fist-raised:before {
            content: "\f6de"
        }

        .fa-flag:before {
            content: "\f024"
        }

        .fa-flag-checkered:before {
            content: "\f11e"
        }

        .fa-flag-usa:before {
            content: "\f74d"
        }

        .fa-flask:before {
            content: "\f0c3"
        }

        .fa-flickr:before {
            content: "\f16e"
        }

        .fa-flipboard:before {
            content: "\f44d"
        }

        .fa-flushed:before {
            content: "\f579"
        }

        .fa-fly:before {
            content: "\f417"
        }

        .fa-folder:before {
            content: "\f07b"
        }

        .fa-folder-minus:before {
            content: "\f65d"
        }

        .fa-folder-open:before {
            content: "\f07c"
        }

        .fa-folder-plus:before {
            content: "\f65e"
        }

        .fa-font:before {
            content: "\f031"
        }

        .fa-font-awesome:before {
            content: "\f2b4"
        }

        .fa-font-awesome-alt:before {
            content: "\f35c"
        }

        .fa-font-awesome-flag:before {
            content: "\f425"
        }

        .fa-font-awesome-logo-full:before {
            content: "\f4e6"
        }

        .fa-fonticons:before {
            content: "\f280"
        }

        .fa-fonticons-fi:before {
            content: "\f3a2"
        }

        .fa-football-ball:before {
            content: "\f44e"
        }

        .fa-fort-awesome:before {
            content: "\f286"
        }

        .fa-fort-awesome-alt:before {
            content: "\f3a3"
        }

        .fa-forumbee:before {
            content: "\f211"
        }

        .fa-forward:before {
            content: "\f04e"
        }

        .fa-foursquare:before {
            content: "\f180"
        }

        .fa-free-code-camp:before {
            content: "\f2c5"
        }

        .fa-freebsd:before {
            content: "\f3a4"
        }

        .fa-frog:before {
            content: "\f52e"
        }

        .fa-frown:before {
            content: "\f119"
        }

        .fa-frown-open:before {
            content: "\f57a"
        }

        .fa-fulcrum:before {
            content: "\f50b"
        }

        .fa-funnel-dollar:before {
            content: "\f662"
        }

        .fa-futbol:before {
            content: "\f1e3"
        }

        .fa-galactic-republic:before {
            content: "\f50c"
        }

        .fa-galactic-senate:before {
            content: "\f50d"
        }

        .fa-gamepad:before {
            content: "\f11b"
        }

        .fa-gas-pump:before {
            content: "\f52f"
        }

        .fa-gavel:before {
            content: "\f0e3"
        }

        .fa-gem:before {
            content: "\f3a5"
        }

        .fa-genderless:before {
            content: "\f22d"
        }

        .fa-get-pocket:before {
            content: "\f265"
        }

        .fa-gg:before {
            content: "\f260"
        }

        .fa-gg-circle:before {
            content: "\f261"
        }

        .fa-ghost:before {
            content: "\f6e2"
        }

        .fa-gift:before {
            content: "\f06b"
        }

        .fa-gifts:before {
            content: "\f79c"
        }

        .fa-git:before {
            content: "\f1d3"
        }

        .fa-git-alt:before {
            content: "\f841"
        }

        .fa-git-square:before {
            content: "\f1d2"
        }

        .fa-github:before {
            content: "\f09b"
        }

        .fa-github-alt:before {
            content: "\f113"
        }

        .fa-github-square:before {
            content: "\f092"
        }

        .fa-gitkraken:before {
            content: "\f3a6"
        }

        .fa-gitlab:before {
            content: "\f296"
        }

        .fa-gitter:before {
            content: "\f426"
        }

        .fa-glass-cheers:before {
            content: "\f79f"
        }

        .fa-glass-martini:before {
            content: "\f000"
        }

        .fa-glass-martini-alt:before {
            content: "\f57b"
        }

        .fa-glass-whiskey:before {
            content: "\f7a0"
        }

        .fa-glasses:before {
            content: "\f530"
        }

        .fa-glide:before {
            content: "\f2a5"
        }

        .fa-glide-g:before {
            content: "\f2a6"
        }

        .fa-globe:before {
            content: "\f0ac"
        }

        .fa-globe-africa:before {
            content: "\f57c"
        }

        .fa-globe-americas:before {
            content: "\f57d"
        }

        .fa-globe-asia:before {
            content: "\f57e"
        }

        .fa-globe-europe:before {
            content: "\f7a2"
        }

        .fa-gofore:before {
            content: "\f3a7"
        }

        .fa-golf-ball:before {
            content: "\f450"
        }

        .fa-goodreads:before {
            content: "\f3a8"
        }

        .fa-goodreads-g:before {
            content: "\f3a9"
        }

        .fa-google:before {
            content: "\f1a0"
        }

        .fa-google-drive:before {
            content: "\f3aa"
        }

        .fa-google-pay:before {
            content: "\e079"
        }

        .fa-google-play:before {
            content: "\f3ab"
        }

        .fa-google-plus:before {
            content: "\f2b3"
        }

        .fa-google-plus-g:before {
            content: "\f0d5"
        }

        .fa-google-plus-square:before {
            content: "\f0d4"
        }

        .fa-google-wallet:before {
            content: "\f1ee"
        }

        .fa-gopuram:before {
            content: "\f664"
        }

        .fa-graduation-cap:before {
            content: "\f19d"
        }

        .fa-gratipay:before {
            content: "\f184"
        }

        .fa-grav:before {
            content: "\f2d6"
        }

        .fa-greater-than:before {
            content: "\f531"
        }

        .fa-greater-than-equal:before {
            content: "\f532"
        }

        .fa-grimace:before {
            content: "\f57f"
        }

        .fa-grin:before {
            content: "\f580"
        }

        .fa-grin-alt:before {
            content: "\f581"
        }

        .fa-grin-beam:before {
            content: "\f582"
        }

        .fa-grin-beam-sweat:before {
            content: "\f583"
        }

        .fa-grin-hearts:before {
            content: "\f584"
        }

        .fa-grin-squint:before {
            content: "\f585"
        }

        .fa-grin-squint-tears:before {
            content: "\f586"
        }

        .fa-grin-stars:before {
            content: "\f587"
        }

        .fa-grin-tears:before {
            content: "\f588"
        }

        .fa-grin-tongue:before {
            content: "\f589"
        }

        .fa-grin-tongue-squint:before {
            content: "\f58a"
        }

        .fa-grin-tongue-wink:before {
            content: "\f58b"
        }

        .fa-grin-wink:before {
            content: "\f58c"
        }

        .fa-grip-horizontal:before {
            content: "\f58d"
        }

        .fa-grip-lines:before {
            content: "\f7a4"
        }

        .fa-grip-lines-vertical:before {
            content: "\f7a5"
        }

        .fa-grip-vertical:before {
            content: "\f58e"
        }

        .fa-gripfire:before {
            content: "\f3ac"
        }

        .fa-grunt:before {
            content: "\f3ad"
        }

        .fa-guilded:before {
            content: "\e07e"
        }

        .fa-guitar:before {
            content: "\f7a6"
        }

        .fa-gulp:before {
            content: "\f3ae"
        }

        .fa-h-square:before {
            content: "\f0fd"
        }

        .fa-hacker-news:before {
            content: "\f1d4"
        }

        .fa-hacker-news-square:before {
            content: "\f3af"
        }

        .fa-hackerrank:before {
            content: "\f5f7"
        }

        .fa-hamburger:before {
            content: "\f805"
        }

        .fa-hammer:before {
            content: "\f6e3"
        }

        .fa-hamsa:before {
            content: "\f665"
        }

        .fa-hand-holding:before {
            content: "\f4bd"
        }

        .fa-hand-holding-heart:before {
            content: "\f4be"
        }

        .fa-hand-holding-medical:before {
            content: "\e05c"
        }

        .fa-hand-holding-usd:before {
            content: "\f4c0"
        }

        .fa-hand-holding-water:before {
            content: "\f4c1"
        }

        .fa-hand-lizard:before {
            content: "\f258"
        }

        .fa-hand-middle-finger:before {
            content: "\f806"
        }

        .fa-hand-paper:before {
            content: "\f256"
        }

        .fa-hand-peace:before {
            content: "\f25b"
        }

        .fa-hand-point-down:before {
            content: "\f0a7"
        }

        .fa-hand-point-left:before {
            content: "\f0a5"
        }

        .fa-hand-point-right:before {
            content: "\f0a4"
        }

        .fa-hand-point-up:before {
            content: "\f0a6"
        }

        .fa-hand-pointer:before {
            content: "\f25a"
        }

        .fa-hand-rock:before {
            content: "\f255"
        }

        .fa-hand-scissors:before {
            content: "\f257"
        }

        .fa-hand-sparkles:before {
            content: "\e05d"
        }

        .fa-hand-spock:before {
            content: "\f259"
        }

        .fa-hands:before {
            content: "\f4c2"
        }

        .fa-hands-helping:before {
            content: "\f4c4"
        }

        .fa-hands-wash:before {
            content: "\e05e"
        }

        .fa-handshake:before {
            content: "\f2b5"
        }

        .fa-handshake-alt-slash:before {
            content: "\e05f"
        }

        .fa-handshake-slash:before {
            content: "\e060"
        }

        .fa-hanukiah:before {
            content: "\f6e6"
        }

        .fa-hard-hat:before {
            content: "\f807"
        }

        .fa-hashtag:before {
            content: "\f292"
        }

        .fa-hat-cowboy:before {
            content: "\f8c0"
        }

        .fa-hat-cowboy-side:before {
            content: "\f8c1"
        }

        .fa-hat-wizard:before {
            content: "\f6e8"
        }

        .fa-hdd:before {
            content: "\f0a0"
        }

        .fa-head-side-cough:before {
            content: "\e061"
        }

        .fa-head-side-cough-slash:before {
            content: "\e062"
        }

        .fa-head-side-mask:before {
            content: "\e063"
        }

        .fa-head-side-virus:before {
            content: "\e064"
        }

        .fa-heading:before {
            content: "\f1dc"
        }

        .fa-headphones:before {
            content: "\f025"
        }

        .fa-headphones-alt:before {
            content: "\f58f"
        }

        .fa-headset:before {
            content: "\f590"
        }

        .fa-heart:before {
            content: "\f004"
        }

        .fa-heart-broken:before {
            content: "\f7a9"
        }

        .fa-heartbeat:before {
            content: "\f21e"
        }

        .fa-helicopter:before {
            content: "\f533"
        }

        .fa-highlighter:before {
            content: "\f591"
        }

        .fa-hiking:before {
            content: "\f6ec"
        }

        .fa-hippo:before {
            content: "\f6ed"
        }

        .fa-hips:before {
            content: "\f452"
        }

        .fa-hire-a-helper:before {
            content: "\f3b0"
        }

        .fa-history:before {
            content: "\f1da"
        }

        .fa-hive:before {
            content: "\e07f"
        }

        .fa-hockey-puck:before {
            content: "\f453"
        }

        .fa-holly-berry:before {
            content: "\f7aa"
        }

        .fa-home:before {
            content: "\f015"
        }

        .fa-hooli:before {
            content: "\f427"
        }

        .fa-hornbill:before {
            content: "\f592"
        }

        .fa-horse:before {
            content: "\f6f0"
        }

        .fa-horse-head:before {
            content: "\f7ab"
        }

        .fa-hospital:before {
            content: "\f0f8"
        }

        .fa-hospital-alt:before {
            content: "\f47d"
        }

        .fa-hospital-symbol:before {
            content: "\f47e"
        }

        .fa-hospital-user:before {
            content: "\f80d"
        }

        .fa-hot-tub:before {
            content: "\f593"
        }

        .fa-hotdog:before {
            content: "\f80f"
        }

        .fa-hotel:before {
            content: "\f594"
        }

        .fa-hotjar:before {
            content: "\f3b1"
        }

        .fa-hourglass:before {
            content: "\f254"
        }

        .fa-hourglass-end:before {
            content: "\f253"
        }

        .fa-hourglass-half:before {
            content: "\f252"
        }

        .fa-hourglass-start:before {
            content: "\f251"
        }

        .fa-house-damage:before {
            content: "\f6f1"
        }

        .fa-house-user:before {
            content: "\e065"
        }

        .fa-houzz:before {
            content: "\f27c"
        }

        .fa-hryvnia:before {
            content: "\f6f2"
        }

        .fa-html5:before {
            content: "\f13b"
        }

        .fa-hubspot:before {
            content: "\f3b2"
        }

        .fa-i-cursor:before {
            content: "\f246"
        }

        .fa-ice-cream:before {
            content: "\f810"
        }

        .fa-icicles:before {
            content: "\f7ad"
        }

        .fa-icons:before {
            content: "\f86d"
        }

        .fa-id-badge:before {
            content: "\f2c1"
        }

        .fa-id-card:before {
            content: "\f2c2"
        }

        .fa-id-card-alt:before {
            content: "\f47f"
        }

        .fa-ideal:before {
            content: "\e013"
        }

        .fa-igloo:before {
            content: "\f7ae"
        }

        .fa-image:before {
            content: "\f03e"
        }

        .fa-images:before {
            content: "\f302"
        }

        .fa-imdb:before {
            content: "\f2d8"
        }

        .fa-inbox:before {
            content: "\f01c"
        }

        .fa-indent:before {
            content: "\f03c"
        }

        .fa-industry:before {
            content: "\f275"
        }

        .fa-infinity:before {
            content: "\f534"
        }

        .fa-info:before {
            content: "\f129"
        }

        .fa-info-circle:before {
            content: "\f05a"
        }

        .fa-innosoft:before {
            content: "\e080"
        }

        .fa-instagram:before {
            content: "\f16d"
        }

        .fa-instagram-square:before {
            content: "\e055"
        }

        .fa-instalod:before {
            content: "\e081"
        }

        .fa-intercom:before {
            content: "\f7af"
        }

        .fa-internet-explorer:before {
            content: "\f26b"
        }

        .fa-invision:before {
            content: "\f7b0"
        }

        .fa-ioxhost:before {
            content: "\f208"
        }

        .fa-italic:before {
            content: "\f033"
        }

        .fa-itch-io:before {
            content: "\f83a"
        }

        .fa-itunes:before {
            content: "\f3b4"
        }

        .fa-itunes-note:before {
            content: "\f3b5"
        }

        .fa-java:before {
            content: "\f4e4"
        }

        .fa-jedi:before {
            content: "\f669"
        }

        .fa-jedi-order:before {
            content: "\f50e"
        }

        .fa-jenkins:before {
            content: "\f3b6"
        }

        .fa-jira:before {
            content: "\f7b1"
        }

        .fa-joget:before {
            content: "\f3b7"
        }

        .fa-joint:before {
            content: "\f595"
        }

        .fa-joomla:before {
            content: "\f1aa"
        }

        .fa-journal-whills:before {
            content: "\f66a"
        }

        .fa-js:before {
            content: "\f3b8"
        }

        .fa-js-square:before {
            content: "\f3b9"
        }

        .fa-jsfiddle:before {
            content: "\f1cc"
        }

        .fa-kaaba:before {
            content: "\f66b"
        }

        .fa-kaggle:before {
            content: "\f5fa"
        }

        .fa-key:before {
            content: "\f084"
        }

        .fa-keybase:before {
            content: "\f4f5"
        }

        .fa-keyboard:before {
            content: "\f11c"
        }

        .fa-keycdn:before {
            content: "\f3ba"
        }

        .fa-khanda:before {
            content: "\f66d"
        }

        .fa-kickstarter:before {
            content: "\f3bb"
        }

        .fa-kickstarter-k:before {
            content: "\f3bc"
        }

        .fa-kiss:before {
            content: "\f596"
        }

        .fa-kiss-beam:before {
            content: "\f597"
        }

        .fa-kiss-wink-heart:before {
            content: "\f598"
        }

        .fa-kiwi-bird:before {
            content: "\f535"
        }

        .fa-korvue:before {
            content: "\f42f"
        }

        .fa-landmark:before {
            content: "\f66f"
        }

        .fa-language:before {
            content: "\f1ab"
        }

        .fa-laptop:before {
            content: "\f109"
        }

        .fa-laptop-code:before {
            content: "\f5fc"
        }

        .fa-laptop-house:before {
            content: "\e066"
        }

        .fa-laptop-medical:before {
            content: "\f812"
        }

        .fa-laravel:before {
            content: "\f3bd"
        }

        .fa-lastfm:before {
            content: "\f202"
        }

        .fa-lastfm-square:before {
            content: "\f203"
        }

        .fa-laugh:before {
            content: "\f599"
        }

        .fa-laugh-beam:before {
            content: "\f59a"
        }

        .fa-laugh-squint:before {
            content: "\f59b"
        }

        .fa-laugh-wink:before {
            content: "\f59c"
        }

        .fa-layer-group:before {
            content: "\f5fd"
        }

        .fa-leaf:before {
            content: "\f06c"
        }

        .fa-leanpub:before {
            content: "\f212"
        }

        .fa-lemon:before {
            content: "\f094"
        }

        .fa-less:before {
            content: "\f41d"
        }

        .fa-less-than:before {
            content: "\f536"
        }

        .fa-less-than-equal:before {
            content: "\f537"
        }

        .fa-level-down-alt:before {
            content: "\f3be"
        }

        .fa-level-up-alt:before {
            content: "\f3bf"
        }

        .fa-life-ring:before {
            content: "\f1cd"
        }

        .fa-lightbulb:before {
            content: "\f0eb"
        }

        .fa-line:before {
            content: "\f3c0"
        }

        .fa-link:before {
            content: "\f0c1"
        }

        .fa-linkedin:before {
            content: "\f08c"
        }

        .fa-linkedin-in:before {
            content: "\f0e1"
        }

        .fa-linode:before {
            content: "\f2b8"
        }

        .fa-linux:before {
            content: "\f17c"
        }

        .fa-lira-sign:before {
            content: "\f195"
        }

        .fa-list:before {
            content: "\f03a"
        }

        .fa-list-alt:before {
            content: "\f022"
        }

        .fa-list-ol:before {
            content: "\f0cb"
        }

        .fa-list-ul:before {
            content: "\f0ca"
        }

        .fa-location-arrow:before {
            content: "\f124"
        }

        .fa-lock:before {
            content: "\f023"
        }

        .fa-lock-open:before {
            content: "\f3c1"
        }

        .fa-long-arrow-alt-down:before {
            content: "\f309"
        }

        .fa-long-arrow-alt-left:before {
            content: "\f30a"
        }

        .fa-long-arrow-alt-right:before {
            content: "\f30b"
        }

        .fa-long-arrow-alt-up:before {
            content: "\f30c"
        }

        .fa-low-vision:before {
            content: "\f2a8"
        }

        .fa-luggage-cart:before {
            content: "\f59d"
        }

        .fa-lungs:before {
            content: "\f604"
        }

        .fa-lungs-virus:before {
            content: "\e067"
        }

        .fa-lyft:before {
            content: "\f3c3"
        }

        .fa-magento:before {
            content: "\f3c4"
        }

        .fa-magic:before {
            content: "\f0d0"
        }

        .fa-magnet:before {
            content: "\f076"
        }

        .fa-mail-bulk:before {
            content: "\f674"
        }

        .fa-mailchimp:before {
            content: "\f59e"
        }

        .fa-male:before {
            content: "\f183"
        }

        .fa-mandalorian:before {
            content: "\f50f"
        }

        .fa-map:before {
            content: "\f279"
        }

        .fa-map-marked:before {
            content: "\f59f"
        }

        .fa-map-marked-alt:before {
            content: "\f5a0"
        }

        .fa-map-marker:before {
            content: "\f041"
        }

        .fa-map-marker-alt:before {
            content: "\f3c5"
        }

        .fa-map-pin:before {
            content: "\f276"
        }

        .fa-map-signs:before {
            content: "\f277"
        }

        .fa-markdown:before {
            content: "\f60f"
        }

        .fa-marker:before {
            content: "\f5a1"
        }

        .fa-mars:before {
            content: "\f222"
        }

        .fa-mars-double:before {
            content: "\f227"
        }

        .fa-mars-stroke:before {
            content: "\f229"
        }

        .fa-mars-stroke-h:before {
            content: "\f22b"
        }

        .fa-mars-stroke-v:before {
            content: "\f22a"
        }

        .fa-mask:before {
            content: "\f6fa"
        }

        .fa-mastodon:before {
            content: "\f4f6"
        }

        .fa-maxcdn:before {
            content: "\f136"
        }

        .fa-mdb:before {
            content: "\f8ca"
        }

        .fa-medal:before {
            content: "\f5a2"
        }

        .fa-medapps:before {
            content: "\f3c6"
        }

        .fa-medium:before {
            content: "\f23a"
        }

        .fa-medium-m:before {
            content: "\f3c7"
        }

        .fa-medkit:before {
            content: "\f0fa"
        }

        .fa-medrt:before {
            content: "\f3c8"
        }

        .fa-meetup:before {
            content: "\f2e0"
        }

        .fa-megaport:before {
            content: "\f5a3"
        }

        .fa-meh:before {
            content: "\f11a"
        }

        .fa-meh-blank:before {
            content: "\f5a4"
        }

        .fa-meh-rolling-eyes:before {
            content: "\f5a5"
        }

        .fa-memory:before {
            content: "\f538"
        }

        .fa-mendeley:before {
            content: "\f7b3"
        }

        .fa-menorah:before {
            content: "\f676"
        }

        .fa-mercury:before {
            content: "\f223"
        }

        .fa-meteor:before {
            content: "\f753"
        }

        .fa-microblog:before {
            content: "\e01a"
        }

        .fa-microchip:before {
            content: "\f2db"
        }

        .fa-microphone:before {
            content: "\f130"
        }

        .fa-microphone-alt:before {
            content: "\f3c9"
        }

        .fa-microphone-alt-slash:before {
            content: "\f539"
        }

        .fa-microphone-slash:before {
            content: "\f131"
        }

        .fa-microscope:before {
            content: "\f610"
        }

        .fa-microsoft:before {
            content: "\f3ca"
        }

        .fa-minus:before {
            content: "\f068"
        }

        .fa-minus-circle:before {
            content: "\f056"
        }

        .fa-minus-square:before {
            content: "\f146"
        }

        .fa-mitten:before {
            content: "\f7b5"
        }

        .fa-mix:before {
            content: "\f3cb"
        }

        .fa-mixcloud:before {
            content: "\f289"
        }

        .fa-mixer:before {
            content: "\e056"
        }

        .fa-mizuni:before {
            content: "\f3cc"
        }

        .fa-mobile:before {
            content: "\f10b"
        }

        .fa-mobile-alt:before {
            content: "\f3cd"
        }

        .fa-modx:before {
            content: "\f285"
        }

        .fa-monero:before {
            content: "\f3d0"
        }

        .fa-money-bill:before {
            content: "\f0d6"
        }

        .fa-money-bill-alt:before {
            content: "\f3d1"
        }

        .fa-money-bill-wave:before {
            content: "\f53a"
        }

        .fa-money-bill-wave-alt:before {
            content: "\f53b"
        }

        .fa-money-check:before {
            content: "\f53c"
        }

        .fa-money-check-alt:before {
            content: "\f53d"
        }

        .fa-monument:before {
            content: "\f5a6"
        }

        .fa-moon:before {
            content: "\f186"
        }

        .fa-mortar-pestle:before {
            content: "\f5a7"
        }

        .fa-mosque:before {
            content: "\f678"
        }

        .fa-motorcycle:before {
            content: "\f21c"
        }

        .fa-mountain:before {
            content: "\f6fc"
        }

        .fa-mouse:before {
            content: "\f8cc"
        }

        .fa-mouse-pointer:before {
            content: "\f245"
        }

        .fa-mug-hot:before {
            content: "\f7b6"
        }

        .fa-music:before {
            content: "\f001"
        }

        .fa-napster:before {
            content: "\f3d2"
        }

        .fa-neos:before {
            content: "\f612"
        }

        .fa-network-wired:before {
            content: "\f6ff"
        }

        .fa-neuter:before {
            content: "\f22c"
        }

        .fa-newspaper:before {
            content: "\f1ea"
        }

        .fa-nimblr:before {
            content: "\f5a8"
        }

        .fa-node:before {
            content: "\f419"
        }

        .fa-node-js:before {
            content: "\f3d3"
        }

        .fa-not-equal:before {
            content: "\f53e"
        }

        .fa-notes-medical:before {
            content: "\f481"
        }

        .fa-npm:before {
            content: "\f3d4"
        }

        .fa-ns8:before {
            content: "\f3d5"
        }

        .fa-nutritionix:before {
            content: "\f3d6"
        }

        .fa-object-group:before {
            content: "\f247"
        }

        .fa-object-ungroup:before {
            content: "\f248"
        }

        .fa-octopus-deploy:before {
            content: "\e082"
        }

        .fa-odnoklassniki:before {
            content: "\f263"
        }

        .fa-odnoklassniki-square:before {
            content: "\f264"
        }

        .fa-oil-can:before {
            content: "\f613"
        }

        .fa-old-republic:before {
            content: "\f510"
        }

        .fa-om:before {
            content: "\f679"
        }

        .fa-opencart:before {
            content: "\f23d"
        }

        .fa-openid:before {
            content: "\f19b"
        }

        .fa-opera:before {
            content: "\f26a"
        }

        .fa-optin-monster:before {
            content: "\f23c"
        }

        .fa-orcid:before {
            content: "\f8d2"
        }

        .fa-osi:before {
            content: "\f41a"
        }

        .fa-otter:before {
            content: "\f700"
        }

        .fa-outdent:before {
            content: "\f03b"
        }

        .fa-page4:before {
            content: "\f3d7"
        }

        .fa-pagelines:before {
            content: "\f18c"
        }

        .fa-pager:before {
            content: "\f815"
        }

        .fa-paint-brush:before {
            content: "\f1fc"
        }

        .fa-paint-roller:before {
            content: "\f5aa"
        }

        .fa-palette:before {
            content: "\f53f"
        }

        .fa-palfed:before {
            content: "\f3d8"
        }

        .fa-pallet:before {
            content: "\f482"
        }

        .fa-paper-plane:before {
            content: "\f1d8"
        }

        .fa-paperclip:before {
            content: "\f0c6"
        }

        .fa-parachute-box:before {
            content: "\f4cd"
        }

        .fa-paragraph:before {
            content: "\f1dd"
        }

        .fa-parking:before {
            content: "\f540"
        }

        .fa-passport:before {
            content: "\f5ab"
        }

        .fa-pastafarianism:before {
            content: "\f67b"
        }

        .fa-paste:before {
            content: "\f0ea"
        }

        .fa-patreon:before {
            content: "\f3d9"
        }

        .fa-pause:before {
            content: "\f04c"
        }

        .fa-pause-circle:before {
            content: "\f28b"
        }

        .fa-paw:before {
            content: "\f1b0"
        }

        .fa-paypal:before {
            content: "\f1ed"
        }

        .fa-peace:before {
            content: "\f67c"
        }

        .fa-pen:before {
            content: "\f304"
        }

        .fa-pen-alt:before {
            content: "\f305"
        }

        .fa-pen-fancy:before {
            content: "\f5ac"
        }

        .fa-pen-nib:before {
            content: "\f5ad"
        }

        .fa-pen-square:before {
            content: "\f14b"
        }

        .fa-pencil-alt:before {
            content: "\f303"
        }

        .fa-pencil-ruler:before {
            content: "\f5ae"
        }

        .fa-penny-arcade:before {
            content: "\f704"
        }

        .fa-people-arrows:before {
            content: "\e068"
        }

        .fa-people-carry:before {
            content: "\f4ce"
        }

        .fa-pepper-hot:before {
            content: "\f816"
        }

        .fa-perbyte:before {
            content: "\e083"
        }

        .fa-percent:before {
            content: "\f295"
        }

        .fa-percentage:before {
            content: "\f541"
        }

        .fa-periscope:before {
            content: "\f3da"
        }

        .fa-person-booth:before {
            content: "\f756"
        }

        .fa-phabricator:before {
            content: "\f3db"
        }

        .fa-phoenix-framework:before {
            content: "\f3dc"
        }

        .fa-phoenix-squadron:before {
            content: "\f511"
        }

        .fa-phone:before {
            content: "\f095"
        }

        .fa-phone-alt:before {
            content: "\f879"
        }

        .fa-phone-slash:before {
            content: "\f3dd"
        }

        .fa-phone-square:before {
            content: "\f098"
        }

        .fa-phone-square-alt:before {
            content: "\f87b"
        }

        .fa-phone-volume:before {
            content: "\f2a0"
        }

        .fa-photo-video:before {
            content: "\f87c"
        }

        .fa-php:before {
            content: "\f457"
        }

        .fa-pied-piper:before {
            content: "\f2ae"
        }

        .fa-pied-piper-alt:before {
            content: "\f1a8"
        }

        .fa-pied-piper-hat:before {
            content: "\f4e5"
        }

        .fa-pied-piper-pp:before {
            content: "\f1a7"
        }

        .fa-pied-piper-square:before {
            content: "\e01e"
        }

        .fa-piggy-bank:before {
            content: "\f4d3"
        }

        .fa-pills:before {
            content: "\f484"
        }

        .fa-pinterest:before {
            content: "\f0d2"
        }

        .fa-pinterest-p:before {
            content: "\f231"
        }

        .fa-pinterest-square:before {
            content: "\f0d3"
        }

        .fa-pizza-slice:before {
            content: "\f818"
        }

        .fa-place-of-worship:before {
            content: "\f67f"
        }

        .fa-plane:before {
            content: "\f072"
        }

        .fa-plane-arrival:before {
            content: "\f5af"
        }

        .fa-plane-departure:before {
            content: "\f5b0"
        }

        .fa-plane-slash:before {
            content: "\e069"
        }

        .fa-play:before {
            content: "\f04b"
        }

        .fa-play-circle:before {
            content: "\f144"
        }

        .fa-playstation:before {
            content: "\f3df"
        }

        .fa-plug:before {
            content: "\f1e6"
        }

        .fa-plus:before {
            content: "\f067"
        }

        .fa-plus-circle:before {
            content: "\f055"
        }

        .fa-plus-square:before {
            content: "\f0fe"
        }

        .fa-podcast:before {
            content: "\f2ce"
        }

        .fa-poll:before {
            content: "\f681"
        }

        .fa-poll-h:before {
            content: "\f682"
        }

        .fa-poo:before {
            content: "\f2fe"
        }

        .fa-poo-storm:before {
            content: "\f75a"
        }

        .fa-poop:before {
            content: "\f619"
        }

        .fa-portrait:before {
            content: "\f3e0"
        }

        .fa-pound-sign:before {
            content: "\f154"
        }

        .fa-power-off:before {
            content: "\f011"
        }

        .fa-pray:before {
            content: "\f683"
        }

        .fa-praying-hands:before {
            content: "\f684"
        }

        .fa-prescription:before {
            content: "\f5b1"
        }

        .fa-prescription-bottle:before {
            content: "\f485"
        }

        .fa-prescription-bottle-alt:before {
            content: "\f486"
        }

        .fa-print:before {
            content: "\f02f"
        }

        .fa-procedures:before {
            content: "\f487"
        }

        .fa-product-hunt:before {
            content: "\f288"
        }

        .fa-project-diagram:before {
            content: "\f542"
        }

        .fa-pump-medical:before {
            content: "\e06a"
        }

        .fa-pump-soap:before {
            content: "\e06b"
        }

        .fa-pushed:before {
            content: "\f3e1"
        }

        .fa-puzzle-piece:before {
            content: "\f12e"
        }

        .fa-python:before {
            content: "\f3e2"
        }

        .fa-qq:before {
            content: "\f1d6"
        }

        .fa-qrcode:before {
            content: "\f029"
        }

        .fa-question:before {
            content: "\f128"
        }

        .fa-question-circle:before {
            content: "\f059"
        }

        .fa-quidditch:before {
            content: "\f458"
        }

        .fa-quinscape:before {
            content: "\f459"
        }

        .fa-quora:before {
            content: "\f2c4"
        }

        .fa-quote-left:before {
            content: "\f10d"
        }

        .fa-quote-right:before {
            content: "\f10e"
        }

        .fa-quran:before {
            content: "\f687"
        }

        .fa-r-project:before {
            content: "\f4f7"
        }

        .fa-radiation:before {
            content: "\f7b9"
        }

        .fa-radiation-alt:before {
            content: "\f7ba"
        }

        .fa-rainbow:before {
            content: "\f75b"
        }

        .fa-random:before {
            content: "\f074"
        }

        .fa-raspberry-pi:before {
            content: "\f7bb"
        }

        .fa-ravelry:before {
            content: "\f2d9"
        }

        .fa-react:before {
            content: "\f41b"
        }

        .fa-reacteurope:before {
            content: "\f75d"
        }

        .fa-readme:before {
            content: "\f4d5"
        }

        .fa-rebel:before {
            content: "\f1d0"
        }

        .fa-receipt:before {
            content: "\f543"
        }

        .fa-record-vinyl:before {
            content: "\f8d9"
        }

        .fa-recycle:before {
            content: "\f1b8"
        }

        .fa-red-river:before {
            content: "\f3e3"
        }

        .fa-reddit:before {
            content: "\f1a1"
        }

        .fa-reddit-alien:before {
            content: "\f281"
        }

        .fa-reddit-square:before {
            content: "\f1a2"
        }

        .fa-redhat:before {
            content: "\f7bc"
        }

        .fa-redo:before {
            content: "\f01e"
        }

        .fa-redo-alt:before {
            content: "\f2f9"
        }

        .fa-registered:before {
            content: "\f25d"
        }

        .fa-remove-format:before {
            content: "\f87d"
        }

        .fa-renren:before {
            content: "\f18b"
        }

        .fa-reply:before {
            content: "\f3e5"
        }

        .fa-reply-all:before {
            content: "\f122"
        }

        .fa-replyd:before {
            content: "\f3e6"
        }

        .fa-republican:before {
            content: "\f75e"
        }

        .fa-researchgate:before {
            content: "\f4f8"
        }

        .fa-resolving:before {
            content: "\f3e7"
        }

        .fa-restroom:before {
            content: "\f7bd"
        }

        .fa-retweet:before {
            content: "\f079"
        }

        .fa-rev:before {
            content: "\f5b2"
        }

        .fa-ribbon:before {
            content: "\f4d6"
        }

        .fa-ring:before {
            content: "\f70b"
        }

        .fa-road:before {
            content: "\f018"
        }

        .fa-robot:before {
            content: "\f544"
        }

        .fa-rocket:before {
            content: "\f135"
        }

        .fa-rocketchat:before {
            content: "\f3e8"
        }

        .fa-rockrms:before {
            content: "\f3e9"
        }

        .fa-route:before {
            content: "\f4d7"
        }

        .fa-rss:before {
            content: "\f09e"
        }

        .fa-rss-square:before {
            content: "\f143"
        }

        .fa-ruble-sign:before {
            content: "\f158"
        }

        .fa-ruler:before {
            content: "\f545"
        }

        .fa-ruler-combined:before {
            content: "\f546"
        }

        .fa-ruler-horizontal:before {
            content: "\f547"
        }

        .fa-ruler-vertical:before {
            content: "\f548"
        }

        .fa-running:before {
            content: "\f70c"
        }

        .fa-rupee-sign:before {
            content: "\f156"
        }

        .fa-rust:before {
            content: "\e07a"
        }

        .fa-sad-cry:before {
            content: "\f5b3"
        }

        .fa-sad-tear:before {
            content: "\f5b4"
        }

        .fa-safari:before {
            content: "\f267"
        }

        .fa-salesforce:before {
            content: "\f83b"
        }

        .fa-sass:before {
            content: "\f41e"
        }

        .fa-satellite:before {
            content: "\f7bf"
        }

        .fa-satellite-dish:before {
            content: "\f7c0"
        }

        .fa-save:before {
            content: "\f0c7"
        }

        .fa-schlix:before {
            content: "\f3ea"
        }

        .fa-school:before {
            content: "\f549"
        }

        .fa-screwdriver:before {
            content: "\f54a"
        }

        .fa-scribd:before {
            content: "\f28a"
        }

        .fa-scroll:before {
            content: "\f70e"
        }

        .fa-sd-card:before {
            content: "\f7c2"
        }

        .fa-search:before {
            content: "\f002"
        }

        .fa-search-dollar:before {
            content: "\f688"
        }

        .fa-search-location:before {
            content: "\f689"
        }

        .fa-search-minus:before {
            content: "\f010"
        }

        .fa-search-plus:before {
            content: "\f00e"
        }

        .fa-searchengin:before {
            content: "\f3eb"
        }

        .fa-seedling:before {
            content: "\f4d8"
        }

        .fa-sellcast:before {
            content: "\f2da"
        }

        .fa-sellsy:before {
            content: "\f213"
        }

        .fa-server:before {
            content: "\f233"
        }

        .fa-servicestack:before {
            content: "\f3ec"
        }

        .fa-shapes:before {
            content: "\f61f"
        }

        .fa-share:before {
            content: "\f064"
        }

        .fa-share-alt:before {
            content: "\f1e0"
        }

        .fa-share-alt-square:before {
            content: "\f1e1"
        }

        .fa-share-square:before {
            content: "\f14d"
        }

        .fa-shekel-sign:before {
            content: "\f20b"
        }

        .fa-shield-alt:before {
            content: "\f3ed"
        }

        .fa-shield-virus:before {
            content: "\e06c"
        }

        .fa-ship:before {
            content: "\f21a"
        }

        .fa-shipping-fast:before {
            content: "\f48b"
        }

        .fa-shirtsinbulk:before {
            content: "\f214"
        }

        .fa-shoe-prints:before {
            content: "\f54b"
        }

        .fa-shopify:before {
            content: "\e057"
        }

        .fa-shopping-bag:before {
            content: "\f290"
        }

        .fa-shopping-basket:before {
            content: "\f291"
        }

        .fa-shopping-cart:before {
            content: "\f07a"
        }

        .fa-shopware:before {
            content: "\f5b5"
        }

        .fa-shower:before {
            content: "\f2cc"
        }

        .fa-shuttle-van:before {
            content: "\f5b6"
        }

        .fa-sign:before {
            content: "\f4d9"
        }

        .fa-sign-in-alt:before {
            content: "\f2f6"
        }

        .fa-sign-language:before {
            content: "\f2a7"
        }

        .fa-sign-out-alt:before {
            content: "\f2f5"
        }

        .fa-signal:before {
            content: "\f012"
        }

        .fa-signature:before {
            content: "\f5b7"
        }

        .fa-sim-card:before {
            content: "\f7c4"
        }

        .fa-simplybuilt:before {
            content: "\f215"
        }

        .fa-sink:before {
            content: "\e06d"
        }

        .fa-sistrix:before {
            content: "\f3ee"
        }

        .fa-sitemap:before {
            content: "\f0e8"
        }

        .fa-sith:before {
            content: "\f512"
        }

        .fa-skating:before {
            content: "\f7c5"
        }

        .fa-sketch:before {
            content: "\f7c6"
        }

        .fa-skiing:before {
            content: "\f7c9"
        }

        .fa-skiing-nordic:before {
            content: "\f7ca"
        }

        .fa-skull:before {
            content: "\f54c"
        }

        .fa-skull-crossbones:before {
            content: "\f714"
        }

        .fa-skyatlas:before {
            content: "\f216"
        }

        .fa-skype:before {
            content: "\f17e"
        }

        .fa-slack:before {
            content: "\f198"
        }

        .fa-slack-hash:before {
            content: "\f3ef"
        }

        .fa-slash:before {
            content: "\f715"
        }

        .fa-sleigh:before {
            content: "\f7cc"
        }

        .fa-sliders-h:before {
            content: "\f1de"
        }

        .fa-slideshare:before {
            content: "\f1e7"
        }

        .fa-smile:before {
            content: "\f118"
        }

        .fa-smile-beam:before {
            content: "\f5b8"
        }

        .fa-smile-wink:before {
            content: "\f4da"
        }

        .fa-smog:before {
            content: "\f75f"
        }

        .fa-smoking:before {
            content: "\f48d"
        }

        .fa-smoking-ban:before {
            content: "\f54d"
        }

        .fa-sms:before {
            content: "\f7cd"
        }

        .fa-snapchat:before {
            content: "\f2ab"
        }

        .fa-snapchat-ghost:before {
            content: "\f2ac"
        }

        .fa-snapchat-square:before {
            content: "\f2ad"
        }

        .fa-snowboarding:before {
            content: "\f7ce"
        }

        .fa-snowflake:before {
            content: "\f2dc"
        }

        .fa-snowman:before {
            content: "\f7d0"
        }

        .fa-snowplow:before {
            content: "\f7d2"
        }

        .fa-soap:before {
            content: "\e06e"
        }

        .fa-socks:before {
            content: "\f696"
        }

        .fa-solar-panel:before {
            content: "\f5ba"
        }

        .fa-sort:before {
            content: "\f0dc"
        }

        .fa-sort-alpha-down:before {
            content: "\f15d"
        }

        .fa-sort-alpha-down-alt:before {
            content: "\f881"
        }

        .fa-sort-alpha-up:before {
            content: "\f15e"
        }

        .fa-sort-alpha-up-alt:before {
            content: "\f882"
        }

        .fa-sort-amount-down:before {
            content: "\f160"
        }

        .fa-sort-amount-down-alt:before {
            content: "\f884"
        }

        .fa-sort-amount-up:before {
            content: "\f161"
        }

        .fa-sort-amount-up-alt:before {
            content: "\f885"
        }

        .fa-sort-down:before {
            content: "\f0dd"
        }

        .fa-sort-numeric-down:before {
            content: "\f162"
        }

        .fa-sort-numeric-down-alt:before {
            content: "\f886"
        }

        .fa-sort-numeric-up:before {
            content: "\f163"
        }

        .fa-sort-numeric-up-alt:before {
            content: "\f887"
        }

        .fa-sort-up:before {
            content: "\f0de"
        }

        .fa-soundcloud:before {
            content: "\f1be"
        }

        .fa-sourcetree:before {
            content: "\f7d3"
        }

        .fa-spa:before {
            content: "\f5bb"
        }

        .fa-space-shuttle:before {
            content: "\f197"
        }

        .fa-speakap:before {
            content: "\f3f3"
        }

        .fa-speaker-deck:before {
            content: "\f83c"
        }

        .fa-spell-check:before {
            content: "\f891"
        }

        .fa-spider:before {
            content: "\f717"
        }

        .fa-spinner:before {
            content: "\f110"
        }

        .fa-splotch:before {
            content: "\f5bc"
        }

        .fa-spotify:before {
            content: "\f1bc"
        }

        .fa-spray-can:before {
            content: "\f5bd"
        }

        .fa-square:before {
            content: "\f0c8"
        }

        .fa-square-full:before {
            content: "\f45c"
        }

        .fa-square-root-alt:before {
            content: "\f698"
        }

        .fa-squarespace:before {
            content: "\f5be"
        }

        .fa-stack-exchange:before {
            content: "\f18d"
        }

        .fa-stack-overflow:before {
            content: "\f16c"
        }

        .fa-stackpath:before {
            content: "\f842"
        }

        .fa-stamp:before {
            content: "\f5bf"
        }

        .fa-star:before {
            content: "\f005"
        }

        .fa-star-and-crescent:before {
            content: "\f699"
        }

        .fa-star-half:before {
            content: "\f089"
        }

        .fa-star-half-alt:before {
            content: "\f5c0"
        }

        .fa-star-of-david:before {
            content: "\f69a"
        }

        .fa-star-of-life:before {
            content: "\f621"
        }

        .fa-staylinked:before {
            content: "\f3f5"
        }

        .fa-steam:before {
            content: "\f1b6"
        }

        .fa-steam-square:before {
            content: "\f1b7"
        }

        .fa-steam-symbol:before {
            content: "\f3f6"
        }

        .fa-step-backward:before {
            content: "\f048"
        }

        .fa-step-forward:before {
            content: "\f051"
        }

        .fa-stethoscope:before {
            content: "\f0f1"
        }

        .fa-sticker-mule:before {
            content: "\f3f7"
        }

        .fa-sticky-note:before {
            content: "\f249"
        }

        .fa-stop:before {
            content: "\f04d"
        }

        .fa-stop-circle:before {
            content: "\f28d"
        }

        .fa-stopwatch:before {
            content: "\f2f2"
        }

        .fa-stopwatch-20:before {
            content: "\e06f"
        }

        .fa-store:before {
            content: "\f54e"
        }

        .fa-store-alt:before {
            content: "\f54f"
        }

        .fa-store-alt-slash:before {
            content: "\e070"
        }

        .fa-store-slash:before {
            content: "\e071"
        }

        .fa-strava:before {
            content: "\f428"
        }

        .fa-stream:before {
            content: "\f550"
        }

        .fa-street-view:before {
            content: "\f21d"
        }

        .fa-strikethrough:before {
            content: "\f0cc"
        }

        .fa-stripe:before {
            content: "\f429"
        }

        .fa-stripe-s:before {
            content: "\f42a"
        }

        .fa-stroopwafel:before {
            content: "\f551"
        }

        .fa-studiovinari:before {
            content: "\f3f8"
        }

        .fa-stumbleupon:before {
            content: "\f1a4"
        }

        .fa-stumbleupon-circle:before {
            content: "\f1a3"
        }

        .fa-subscript:before {
            content: "\f12c"
        }

        .fa-subway:before {
            content: "\f239"
        }

        .fa-suitcase:before {
            content: "\f0f2"
        }

        .fa-suitcase-rolling:before {
            content: "\f5c1"
        }

        .fa-sun:before {
            content: "\f185"
        }

        .fa-superpowers:before {
            content: "\f2dd"
        }

        .fa-superscript:before {
            content: "\f12b"
        }

        .fa-supple:before {
            content: "\f3f9"
        }

        .fa-surprise:before {
            content: "\f5c2"
        }

        .fa-suse:before {
            content: "\f7d6"
        }

        .fa-swatchbook:before {
            content: "\f5c3"
        }

        .fa-swift:before {
            content: "\f8e1"
        }

        .fa-swimmer:before {
            content: "\f5c4"
        }

        .fa-swimming-pool:before {
            content: "\f5c5"
        }

        .fa-symfony:before {
            content: "\f83d"
        }

        .fa-synagogue:before {
            content: "\f69b"
        }

        .fa-sync:before {
            content: "\f021"
        }

        .fa-sync-alt:before {
            content: "\f2f1"
        }

        .fa-syringe:before {
            content: "\f48e"
        }

        .fa-table:before {
            content: "\f0ce"
        }

        .fa-table-tennis:before {
            content: "\f45d"
        }

        .fa-tablet:before {
            content: "\f10a"
        }

        .fa-tablet-alt:before {
            content: "\f3fa"
        }

        .fa-tablets:before {
            content: "\f490"
        }

        .fa-tachometer-alt:before {
            content: "\f3fd"
        }

        .fa-tag:before {
            content: "\f02b"
        }

        .fa-tags:before {
            content: "\f02c"
        }

        .fa-tape:before {
            content: "\f4db"
        }

        .fa-tasks:before {
            content: "\f0ae"
        }

        .fa-taxi:before {
            content: "\f1ba"
        }

        .fa-teamspeak:before {
            content: "\f4f9"
        }

        .fa-teeth:before {
            content: "\f62e"
        }

        .fa-teeth-open:before {
            content: "\f62f"
        }

        .fa-telegram:before {
            content: "\f2c6"
        }

        .fa-telegram-plane:before {
            content: "\f3fe"
        }

        .fa-temperature-high:before {
            content: "\f769"
        }

        .fa-temperature-low:before {
            content: "\f76b"
        }

        .fa-tencent-weibo:before {
            content: "\f1d5"
        }

        .fa-tenge:before {
            content: "\f7d7"
        }

        .fa-terminal:before {
            content: "\f120"
        }

        .fa-text-height:before {
            content: "\f034"
        }

        .fa-text-width:before {
            content: "\f035"
        }

        .fa-th:before {
            content: "\f00a"
        }

        .fa-th-large:before {
            content: "\f009"
        }

        .fa-th-list:before {
            content: "\f00b"
        }

        .fa-the-red-yeti:before {
            content: "\f69d"
        }

        .fa-theater-masks:before {
            content: "\f630"
        }

        .fa-themeco:before {
            content: "\f5c6"
        }

        .fa-themeisle:before {
            content: "\f2b2"
        }

        .fa-thermometer:before {
            content: "\f491"
        }

        .fa-thermometer-empty:before {
            content: "\f2cb"
        }

        .fa-thermometer-full:before {
            content: "\f2c7"
        }

        .fa-thermometer-half:before {
            content: "\f2c9"
        }

        .fa-thermometer-quarter:before {
            content: "\f2ca"
        }

        .fa-thermometer-three-quarters:before {
            content: "\f2c8"
        }

        .fa-think-peaks:before {
            content: "\f731"
        }

        .fa-thumbs-down:before {
            content: "\f165"
        }

        .fa-thumbs-up:before {
            content: "\f164"
        }

        .fa-thumbtack:before {
            content: "\f08d"
        }

        .fa-ticket-alt:before {
            content: "\f3ff"
        }

        .fa-tiktok:before {
            content: "\e07b"
        }

        .fa-times:before {
            content: "\f00d"
        }

        .fa-times-circle:before {
            content: "\f057"
        }

        .fa-tint:before {
            content: "\f043"
        }

        .fa-tint-slash:before {
            content: "\f5c7"
        }

        .fa-tired:before {
            content: "\f5c8"
        }

        .fa-toggle-off:before {
            content: "\f204"
        }

        .fa-toggle-on:before {
            content: "\f205"
        }

        .fa-toilet:before {
            content: "\f7d8"
        }

        .fa-toilet-paper:before {
            content: "\f71e"
        }

        .fa-toilet-paper-slash:before {
            content: "\e072"
        }

        .fa-toolbox:before {
            content: "\f552"
        }

        .fa-tools:before {
            content: "\f7d9"
        }

        .fa-tooth:before {
            content: "\f5c9"
        }

        .fa-torah:before {
            content: "\f6a0"
        }

        .fa-torii-gate:before {
            content: "\f6a1"
        }

        .fa-tractor:before {
            content: "\f722"
        }

        .fa-trade-federation:before {
            content: "\f513"
        }

        .fa-trademark:before {
            content: "\f25c"
        }

        .fa-traffic-light:before {
            content: "\f637"
        }

        .fa-trailer:before {
            content: "\e041"
        }

        .fa-train:before {
            content: "\f238"
        }

        .fa-tram:before {
            content: "\f7da"
        }

        .fa-transgender:before {
            content: "\f224"
        }

        .fa-transgender-alt:before {
            content: "\f225"
        }

        .fa-trash:before {
            content: "\f1f8"
        }

        .fa-trash-alt:before {
            content: "\f2ed"
        }

        .fa-trash-restore:before {
            content: "\f829"
        }

        .fa-trash-restore-alt:before {
            content: "\f82a"
        }

        .fa-tree:before {
            content: "\f1bb"
        }

        .fa-trello:before {
            content: "\f181"
        }

        .fa-trophy:before {
            content: "\f091"
        }

        .fa-truck:before {
            content: "\f0d1"
        }

        .fa-truck-loading:before {
            content: "\f4de"
        }

        .fa-truck-monster:before {
            content: "\f63b"
        }

        .fa-truck-moving:before {
            content: "\f4df"
        }

        .fa-truck-pickup:before {
            content: "\f63c"
        }

        .fa-tshirt:before {
            content: "\f553"
        }

        .fa-tty:before {
            content: "\f1e4"
        }

        .fa-tumblr:before {
            content: "\f173"
        }

        .fa-tumblr-square:before {
            content: "\f174"
        }

        .fa-tv:before {
            content: "\f26c"
        }

        .fa-twitch:before {
            content: "\f1e8"
        }

        .fa-twitter:before {
            content: "\f099"
        }

        .fa-twitter-square:before {
            content: "\f081"
        }

        .fa-typo3:before {
            content: "\f42b"
        }

        .fa-uber:before {
            content: "\f402"
        }

        .fa-ubuntu:before {
            content: "\f7df"
        }

        .fa-uikit:before {
            content: "\f403"
        }

        .fa-umbraco:before {
            content: "\f8e8"
        }

        .fa-umbrella:before {
            content: "\f0e9"
        }

        .fa-umbrella-beach:before {
            content: "\f5ca"
        }

        .fa-uncharted:before {
            content: "\e084"
        }

        .fa-underline:before {
            content: "\f0cd"
        }

        .fa-undo:before {
            content: "\f0e2"
        }

        .fa-undo-alt:before {
            content: "\f2ea"
        }

        .fa-uniregistry:before {
            content: "\f404"
        }

        .fa-unity:before {
            content: "\e049"
        }

        .fa-universal-access:before {
            content: "\f29a"
        }

        .fa-university:before {
            content: "\f19c"
        }

        .fa-unlink:before {
            content: "\f127"
        }

        .fa-unlock:before {
            content: "\f09c"
        }

        .fa-unlock-alt:before {
            content: "\f13e"
        }

        .fa-unsplash:before {
            content: "\e07c"
        }

        .fa-untappd:before {
            content: "\f405"
        }

        .fa-upload:before {
            content: "\f093"
        }

        .fa-ups:before {
            content: "\f7e0"
        }

        .fa-usb:before {
            content: "\f287"
        }

        .fa-user:before {
            content: "\f007"
        }

        .fa-user-alt:before {
            content: "\f406"
        }

        .fa-user-alt-slash:before {
            content: "\f4fa"
        }

        .fa-user-astronaut:before {
            content: "\f4fb"
        }

        .fa-user-check:before {
            content: "\f4fc"
        }

        .fa-user-circle:before {
            content: "\f2bd"
        }

        .fa-user-clock:before {
            content: "\f4fd"
        }

        .fa-user-cog:before {
            content: "\f4fe"
        }

        .fa-user-edit:before {
            content: "\f4ff"
        }

        .fa-user-friends:before {
            content: "\f500"
        }

        .fa-user-graduate:before {
            content: "\f501"
        }

        .fa-user-injured:before {
            content: "\f728"
        }

        .fa-user-lock:before {
            content: "\f502"
        }

        .fa-user-md:before {
            content: "\f0f0"
        }

        .fa-user-minus:before {
            content: "\f503"
        }

        .fa-user-ninja:before {
            content: "\f504"
        }

        .fa-user-nurse:before {
            content: "\f82f"
        }

        .fa-user-plus:before {
            content: "\f234"
        }

        .fa-user-secret:before {
            content: "\f21b"
        }

        .fa-user-shield:before {
            content: "\f505"
        }

        .fa-user-slash:before {
            content: "\f506"
        }

        .fa-user-tag:before {
            content: "\f507"
        }

        .fa-user-tie:before {
            content: "\f508"
        }

        .fa-user-times:before {
            content: "\f235"
        }

        .fa-users:before {
            content: "\f0c0"
        }

        .fa-users-cog:before {
            content: "\f509"
        }

        .fa-users-slash:before {
            content: "\e073"
        }

        .fa-usps:before {
            content: "\f7e1"
        }

        .fa-ussunnah:before {
            content: "\f407"
        }

        .fa-utensil-spoon:before {
            content: "\f2e5"
        }

        .fa-utensils:before {
            content: "\f2e7"
        }

        .fa-vaadin:before {
            content: "\f408"
        }

        .fa-vector-square:before {
            content: "\f5cb"
        }

        .fa-venus:before {
            content: "\f221"
        }

        .fa-venus-double:before {
            content: "\f226"
        }

        .fa-venus-mars:before {
            content: "\f228"
        }

        .fa-vest:before {
            content: "\e085"
        }

        .fa-vest-patches:before {
            content: "\e086"
        }

        .fa-viacoin:before {
            content: "\f237"
        }

        .fa-viadeo:before {
            content: "\f2a9"
        }

        .fa-viadeo-square:before {
            content: "\f2aa"
        }

        .fa-vial:before {
            content: "\f492"
        }

        .fa-vials:before {
            content: "\f493"
        }

        .fa-viber:before {
            content: "\f409"
        }

        .fa-video:before {
            content: "\f03d"
        }

        .fa-video-slash:before {
            content: "\f4e2"
        }

        .fa-vihara:before {
            content: "\f6a7"
        }

        .fa-vimeo:before {
            content: "\f40a"
        }

        .fa-vimeo-square:before {
            content: "\f194"
        }

        .fa-vimeo-v:before {
            content: "\f27d"
        }

        .fa-vine:before {
            content: "\f1ca"
        }

        .fa-virus:before {
            content: "\e074"
        }

        .fa-virus-slash:before {
            content: "\e075"
        }

        .fa-viruses:before {
            content: "\e076"
        }

        .fa-vk:before {
            content: "\f189"
        }

        .fa-vnv:before {
            content: "\f40b"
        }

        .fa-voicemail:before {
            content: "\f897"
        }

        .fa-volleyball-ball:before {
            content: "\f45f"
        }

        .fa-volume-down:before {
            content: "\f027"
        }

        .fa-volume-mute:before {
            content: "\f6a9"
        }

        .fa-volume-off:before {
            content: "\f026"
        }

        .fa-volume-up:before {
            content: "\f028"
        }

        .fa-vote-yea:before {
            content: "\f772"
        }

        .fa-vr-cardboard:before {
            content: "\f729"
        }

        .fa-vuejs:before {
            content: "\f41f"
        }

        .fa-walking:before {
            content: "\f554"
        }

        .fa-wallet:before {
            content: "\f555"
        }

        .fa-warehouse:before {
            content: "\f494"
        }

        .fa-watchman-monitoring:before {
            content: "\e087"
        }

        .fa-water:before {
            content: "\f773"
        }

        .fa-wave-square:before {
            content: "\f83e"
        }

        .fa-waze:before {
            content: "\f83f"
        }

        .fa-weebly:before {
            content: "\f5cc"
        }

        .fa-weibo:before {
            content: "\f18a"
        }

        .fa-weight:before {
            content: "\f496"
        }

        .fa-weight-hanging:before {
            content: "\f5cd"
        }

        .fa-weixin:before {
            content: "\f1d7"
        }

        .fa-whatsapp:before {
            content: "\f232"
        }

        .fa-whatsapp-square:before {
            content: "\f40c"
        }

        .fa-wheelchair:before {
            content: "\f193"
        }

        .fa-whmcs:before {
            content: "\f40d"
        }

        .fa-wifi:before {
            content: "\f1eb"
        }

        .fa-wikipedia-w:before {
            content: "\f266"
        }

        .fa-wind:before {
            content: "\f72e"
        }

        .fa-window-close:before {
            content: "\f410"
        }

        .fa-window-maximize:before {
            content: "\f2d0"
        }

        .fa-window-minimize:before {
            content: "\f2d1"
        }

        .fa-window-restore:before {
            content: "\f2d2"
        }

        .fa-windows:before {
            content: "\f17a"
        }

        .fa-wine-bottle:before {
            content: "\f72f"
        }

        .fa-wine-glass:before {
            content: "\f4e3"
        }

        .fa-wine-glass-alt:before {
            content: "\f5ce"
        }

        .fa-wix:before {
            content: "\f5cf"
        }

        .fa-wizards-of-the-coast:before {
            content: "\f730"
        }

        .fa-wodu:before {
            content: "\e088"
        }

        .fa-wolf-pack-battalion:before {
            content: "\f514"
        }

        .fa-won-sign:before {
            content: "\f159"
        }

        .fa-wordpress:before {
            content: "\f19a"
        }

        .fa-wordpress-simple:before {
            content: "\f411"
        }

        .fa-wpbeginner:before {
            content: "\f297"
        }

        .fa-wpexplorer:before {
            content: "\f2de"
        }

        .fa-wpforms:before {
            content: "\f298"
        }

        .fa-wpressr:before {
            content: "\f3e4"
        }

        .fa-wrench:before {
            content: "\f0ad"
        }

        .fa-x-ray:before {
            content: "\f497"
        }

        .fa-xbox:before {
            content: "\f412"
        }

        .fa-xing:before {
            content: "\f168"
        }

        .fa-xing-square:before {
            content: "\f169"
        }

        .fa-y-combinator:before {
            content: "\f23b"
        }

        .fa-yahoo:before {
            content: "\f19e"
        }

        .fa-yammer:before {
            content: "\f840"
        }

        .fa-yandex:before {
            content: "\f413"
        }

        .fa-yandex-international:before {
            content: "\f414"
        }

        .fa-yarn:before {
            content: "\f7e3"
        }

        .fa-yelp:before {
            content: "\f1e9"
        }

        .fa-yen-sign:before {
            content: "\f157"
        }

        .fa-yin-yang:before {
            content: "\f6ad"
        }

        .fa-yoast:before {
            content: "\f2b1"
        }

        .fa-youtube:before {
            content: "\f167"
        }

        .fa-youtube-square:before {
            content: "\f431"
        }

        .fa-zhihu:before {
            content: "\f63f"
        }

        .sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        .sr-only-focusable:active,
        .sr-only-focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto
        }

        @font-face {
            font-family: "Font Awesome 5 Brands";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-brands-400.svg#fontawesome) format("svg")
        }

        .fab {
            font-family: "Font Awesome 5 Brands"
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg")
        }

        @font-face {
            font-family: "Font Awesome 5 Pro";
            font-style: normal;
            font-weight: 400;
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-regular-400.svg#fontawesome) format("svg")
        }

        .fab,
        .far {
            font-weight: 400
        }

        @font-face {
            font-family: "Font Awesome 5 Free";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")
        }

        @font-face {
            font-family: "Font Awesome 5 Pro";
            font-style: normal;
            font-weight: 900;
            font-display: block;
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot);
            src: url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff2) format("woff2"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.woff) format("woff"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.ttf) format("truetype"), url(https://ka-f.fontawesome.com/releases/v5.15.4/webfonts/free-fa-solid-900.svg#fontawesome) format("svg")
        }

        .fa,
        .far,
        .fas {
            font-family: "Font Awesome 5 Free"
        }

        .fa,
        .fas {
            font-weight: 900
        }

    </style>
    <script src="http://127.0.0.1:8000/frontend/js/scripts/main.js"></script>
    <!-- NEW LIN ============================================================ -->



    <script src="http://127.0.0.1:8000/frontend/js/popper.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/jquery.slicknav.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/slick.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/wow.min.js"></script>

    <script src="http://127.0.0.1:8000/frontend/js/jquery.sticky.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/jquery.counterup.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/jquery.ajaxchimp.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/imagesloaded.pkgd.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/masonry.pkgd.min.js"></script>
    <script src="http://127.0.0.1:8000/frontend/js/classie.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
        customerFname = $.trim(localStorage.getItem("customerFname"));
        customerLname = $.trim(localStorage.getItem("customerLname"));
        if (loggedIn != '1') {
            $(".auth-login").remove();
        } else {
            $(".without-auth-login").remove();
            $(".welcomeUsername").html(customerFname + " " + customerLname);
        }

        customerToken = $.trim(localStorage.getItem("customerToken"));


        languageId = localStorage.getItem("languageId");
        languageName = localStorage.getItem("languageName");

        if (languageName == null || languageName == 'null') {
            localStorage.setItem("languageId", $.trim("1"));
            localStorage.setItem("languageName", $.trim("English"));
            $(".language-default-name").html($.trim("English"));
            languageId = $.trim("1");
        } else {
            $(".language-default-name").html(localStorage.getItem("languageName"));
            $('.mobile-language option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }

        currency = localStorage.getItem("currency");
        currencyCode = localStorage.getItem("currencyCode");
        if (currencyCode == null || currencyCode == 'null') {
            localStorage.setItem("currency", $.trim("1"));
            localStorage.setItem("currencyCode", $.trim("NPR"));
            $("#selected-currency").html($.trim("NPR"));
            currency = 1;
        } else {
            $("#selected-currency").html(localStorage.getItem("currencyCode"));
            $('.currency option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }


        cartSession = $.trim(localStorage.getItem("cartSession"));
        if (cartSession == null || cartSession == 'null') {
            cartSession = '';
        }
        $(document).ready(function() {

            if (loggedIn != '1') {
                localStorage.setItem("cartSession", cartSession);
                menuCart(cartSession);
            } else {
                menuCart('');
            }

            getWishlist();



        });
    </script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
        customerFname = $.trim(localStorage.getItem("customerFname"));
        customerLname = $.trim(localStorage.getItem("customerLname"));
        if (loggedIn != '1') {
            $(".auth-login").remove();
        } else {
            $(".without-auth-login").remove();
            $(".welcomeUsername").html(customerFname + " " + customerLname);
        }

        customerToken = $.trim(localStorage.getItem("customerToken"));


        languageId = localStorage.getItem("languageId");
        languageName = localStorage.getItem("languageName");

        if (languageName == null || languageName == 'null') {
            localStorage.setItem("languageId", $.trim("1"));
            localStorage.setItem("languageName", $.trim("English"));
            $(".language-default-name").html($.trim("English"));
            languageId = $.trim("1");
        } else {
            $(".language-default-name").html(localStorage.getItem("languageName"));
            $('.mobile-language option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }

        currency = localStorage.getItem("currency");
        currencyCode = localStorage.getItem("currencyCode");
        if (currencyCode == null || currencyCode == 'null') {
            localStorage.setItem("currency", $.trim("1"));
            localStorage.setItem("currencyCode", $.trim("NPR"));
            $("#selected-currency").html($.trim("NPR"));
            currency = 1;
        } else {
            $("#selected-currency").html(localStorage.getItem("currencyCode"));
            $('.currency option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }


        cartSession = $.trim(localStorage.getItem("cartSession"));
        if (cartSession == null || cartSession == 'null') {
            cartSession = '';
        }
        $(document).ready(function() {

            if (loggedIn != '1') {
                localStorage.setItem("cartSession", cartSession);
                menuCart(cartSession);
            } else {
                menuCart('');
            }

            getWishlist();



        });

        function getSliderSettings(className) {
            jQuery(document).ready(function() {
                (function(jQuery) {
                    var tabCarousel = jQuery('.' + className);
                    if (tabCarousel.length) {

                        tabCarousel.each(function() {
                            var thisCarousel = jQuery(this),
                                item = jQuery(this).data('item'),
                                itemmobile = jQuery(this).data('itemmobile');



                            thisCarousel.slick({
                                lazyLoad: 'progressive',
                                dots: false,
                                arrows: true,
                                infinite: false,
                                // variableWidth: true,
                                //rtl:true,
                                speed: 300,
                                slidesToShow: item || 4,
                                slidesToScroll: item || 4,
                                adaptiveHeight: true,
                                responsive: [{
                                        breakpoint: 1025,
                                        settings: {
                                            slidesToShow: 3,
                                            slidesToScroll: 3
                                        }
                                    },
                                    {
                                        breakpoint: 992,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    },
                                    {
                                        breakpoint: 768,
                                        settings: {
                                            slidesToShow: itemmobile || 1,
                                            slidesToScroll: itemmobile || 1
                                        }
                                    }
                                ]
                            });
                        });
                    };

                })(jQuery);
            });
        }

        function getWishlist() {
            if (loggedIn != '1') {
                return;
            }

            $.ajax({
                type: 'get',
                url: "http://127.0.0.1:8000" + '/api/client/wishlist',
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(".wishlist-count").html(data.data.length);
                    }
                },
                error: function(data) {},
            });
        }



        function addWishlist(input) {
            if (loggedIn != '1') {
                toastr.error('please Login first')
                return;
            }

            $.ajax({
                type: 'post',
                url: "http://127.0.0.1:8000" + '/api/client/wishlist?product_id=' + $(input).attr('data-id'),
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(".wishlist-count").html(data.data.length);
                        toastr.success('wishlist-add-success')
                    }
                },
                error: function(data) {},
            });
        }


        function addCompare(input) {
            if (loggedIn != '1') {
                toastr.error('please Login first')
                return;
            }


            customerId = $.trim(localStorage.getItem("customerId"));
            $.ajax({
                type: 'post',
                url: "http://127.0.0.1:8000" + '/api/client/compare?product_id=' + $(input).attr('data-id') +
                    '&customer_id=' + customerId,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        toastr.success('Product add no compare successfully!')

                    }
                },
                error: function(data) {},
            });
        }


        function quiclViewData(input) {
            product_type = $.trim($(input).attr('data-type'));
            product_id = $.trim($(input).attr('data-id'));
            $(".quick-view-modal-show").html('');
            $.ajax({
                type: 'get',
                url: "http://127.0.0.1:8000" + '/api/client/products/' + product_id +
                    '?getCategory=1&getDetail=1&language_id=' + languageId + '&currency=' + localStorage.getItem(
                        "currency"),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        const templ = document.getElementById("quick-view-template");
                        const clone = templ.content.cloneNode(true);
                        // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                        if (data.data.product_gallary != null && data.data.product_gallary != 'null' && data
                            .data.product_gallary != '') {
                            if (data.data.product_gallary.detail != null && data.data.product_gallary.detail !=
                                'null' && data.data.product_gallary.detail != '') {
                                clone.querySelector(".quick-view-image").setAttribute('src', data.data
                                    .product_gallary.detail[1].gallary_path);
                            }
                        }
                        if (data.data.detail != null && data.data.detail != 'null' && data.data.detail != '') {
                            clone.querySelector(".quick-view-image").setAttribute('alt', data.data.detail[0]
                                .title);
                        }
                        if (data.data.category != null && data.data.category != 'null' && data.data.category !=
                            '') {
                            for (j = 0; j < data.data.category.length; j++) {
                                if (data.data.category[j].category_detail != null && data.data.category[j]
                                    .category_detail != 'null' && data.data.category[j].category_detail != '') {
                                    if (data.data.category[j].category_detail.detail != null && data.data
                                        .category[j].category_detail.detail != 'null' && data.data.category[j]
                                        .category_detail.detail != '') {
                                        clone.querySelector(".quick-view-categories").innerHTML =
                                            '<li><a href="javascript:void(0)">' + data.data.category[j]
                                            .category_detail.detail[0]
                                            .name + '</a></li>';
                                    }
                                }
                            }
                        }
                        if (data.data.detail != null && data.data.detail != 'null' && data.data.detail != '') {
                            clone.querySelector(".quick-view-product-name").innerHTML = data.data.detail[0]
                                .title;
                            clone.querySelector(".quick-view-desc").innerHTML = data.data.detail[0].desc
                                .replace(/<\/?[^>]+>/gi, '').substring(0, 250)
                        }
                        clone.querySelector(".quick-view-product-id").innerHTML = data.data.product_id;

                        if (data.data.product_type == 'simple') {
                            if (data.data.product_discount_price == '' || data.data.product_discount_price ==
                                null || data.data.product_discount_price == 'null') {
                                clone.querySelector(".quick-view-price").innerHTML = '<ins>' + data.data
                                    .product_price_symbol + '</ins>';
                            } else {
                                clone.querySelector(".quick-view-price").innerHTML = '<ins>' + data.data
                                    .product_discount_price + '</ins> <del>' + data.data
                                    .product_price_symbol +
                                    '</del>';
                            }

                            clone.querySelector(".quick-view-add-to-cart").setAttribute('onclick',
                                'addToCart(this)');
                            clone.querySelector(".quick-view-add-to-cart").setAttribute('data-id', data.data
                                .product_id);
                        } else {
                            if (data.data.product_combination != null && data.data.product_combination !=
                                'null' && data.data.product_combination != '') {
                                clone.querySelector(".quick-view-price").innerHTML = '<ins>' + data.data
                                    .product_combination[0].product_price_symbol + '</ins>';
                            }
                            clone.querySelector(".quick-view-qty").classList.add('d-none');
                            clone.querySelector(".quick-view-add-to-cart").setAttribute('href', '/product/' +
                                data
                                .data.product_id + '/' + data
                                .data.product_slug);
                            clone.querySelector(".quick-view-add-to-cart").innerHTML = 'View Detail';
                        }
                        $(".quick-view-modal-show").html('');
                        $(".quick-view-modal-show").append(clone);
                    }
                },
                error: function(data) {},
            });
        }


        function addToCart(input) {
            product_type = $.trim($(input).attr('data-type'));
            product_id = $.trim($(input).attr('data-id'));
            product_combination_id = '';
            if (product_type == 'variable') {
                if ($.trim($("#product_combination_id").val()) == '' || $.trim($("#product_combination_id").val()) ==
                    'null') {
                    toastr.error("Select Combination")
                    return;
                }
                product_combination_id = $("#product_combination_id").val();
            }

            qty = $.trim($("#quantity-input").val());
            if (qty == '' || qty == 'undefined' || qty == null) {
                qty = 1;
            }
            addToCartFun(product_id, product_combination_id, cartSession, qty);
        }

        function addToCartFun(product_id, product_combination_id, cartSession, qty) {
            if (loggedIn == '1') {
                url = "http://127.0.0.1:8000" + '/api/client/cart?session_id=' + cartSession + '&product_id=' + product_id +
                    '&qty=' + qty + '&product_combination_id=' + product_combination_id;
            } else {
                url = "http://127.0.0.1:8000" + '/api/client/cart/guest/store?session_id=' + cartSession + '&product_id=' +
                    product_id + '&qty=' + qty + '&product_combination_id=' + product_combination_id;
            }
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        if (loggedIn != '1') {
                            localStorage.setItem("cartSession", data.data.session);
                            console.dir(data);
                            menuCart(data.data.session);
                        } else {
                            menuCart('');
                        }
                        toastr.success('Product added to cart!')
                    } else if (data.status == 'Error') {

                        toastr.error('some thing went wrong');
                    }
                },
                error: function(data) {
                    if (data.responseJSON.status == 'Error') {
                        // toastr.error(data.responseJSON.message);
                        toastr.error('some thing went wrong');
                    }

                },
            });
        }

        function menuCart(cartSession) {
            if (loggedIn == '1') {
                url = "http://127.0.0.1:8000" + '/api/client/cart?session_id=' + cartSession + '&currency=' + localStorage
                    .getItem("currency");
            } else {
                url = "http://127.0.0.1:8000" + '/api/client/cart/guest/get?session_id=' + cartSession + '&currency=' +
                    localStorage.getItem("currency");
            }
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(".top-cart-product-show").html('');
                        const templ = document.getElementById("top-cart-product-template");
                        total_price = 0;
                        currrency = '';
                        for (i = 0; i < data.data.length; i++) {
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                            if (data.data[i].product_type == 'variable') {
                                for (k = 0; k < data.data[i].combination.length; k++) {
                                    if (data.data[i].product_combination_id == data.data[i].combination[k]
                                        .product_combination_id) {
                                        price = data.data[i].combination[k].price;
                                        $(".product-card-price").html(data.data[i].product_price_symbol);

                                        if (data.data[i].combination[k].gallary != null && data.data[i]
                                            .combination[k].gallary != 'null' && data.data[i].combination[k]
                                            .gallary != '') {
                                            clone.querySelector(".top-cart-product-image").setAttribute('src',
                                                '/gallary/' + data.data[i].combination[k].gallary
                                                .gallary_name);
                                            clone.querySelector(".top-cart-product-image").setAttribute('alt',
                                                data.data[i].combination[k].gallary.gallary_name);
                                            name = data.data[i].product_detail[0].title;
                                            for (loop = 0; loop < data.data[i].product_combination
                                                .length; loop++) {
                                                if (data.data[i].product_combination[loop].length - 1 == loop) {
                                                    name += data.data[i].product_combination[loop].variation
                                                        .detail[0].name;
                                                } else {
                                                    name += data.data[i].product_combination[loop].variation
                                                        .detail[0].name + '-';
                                                }
                                            }
                                            clone.querySelector(".top-cart-product-name").innerHTML = name;
                                        }
                                        k = data.data[i].combination.length;
                                    } else {}
                                }
                            } else {
                                if (data.data[i].product_gallary != null && data.data[i].product_gallary !=
                                    'null' && $.trim(data.data[i].product_gallary) != '') {
                                    if (data.data[i].product_gallary.detail != null && data.data[i]
                                        .product_gallary.detail != 'null' && $.trim(data.data[i].product_gallary
                                            .detail) != '') {
                                        clone.querySelector(".top-cart-product-image").setAttribute('src', data
                                            .data[i].product_gallary.detail[2].gallary_path);
                                    }
                                }
                                if (data.data[i].product_detail != null && data.data[i].product_detail !=
                                    'null' && $.trim(data.data[i].product_detail) != '') {
                                    clone.querySelector(".top-cart-product-image").setAttribute('alt', data
                                        .data[i].product_detail[0].title);
                                    clone.querySelector(".top-cart-product-name").innerHTML = data.data[i]
                                        .product_detail[0].title;
                                }
                            }

                            if (data.data[i].discount_price > 0) {
                                discount_price = data.data[i].discount_price;
                            } else {
                                discount_price = data.data[i].price;
                            }
                            //discount_price = +data.data[i].price - +data.data[i].discount_price;
                            if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[i]
                                .currency != null) {
                                if (data.data[i].currency.symbol_position == 'left') {
                                    clone.querySelector(".top-cart-product-qty-amount").innerHTML = data.data[i]
                                        .qty + ' x ' + data.data[i].currency.code + ' ' + discount_price +
                                        '     <i class="fas fa-trash"  data-id=' + data.data[i]
                                        .product_id + ' data-combination-id=' + data
                                        .data[i].product_combination_id +
                                        ' onclick="removeCartItem(this)"></i>';
                                } else {
                                    clone.querySelector(".top-cart-product-qty-amount").innerHTML = data.data[i]
                                        .qty + ' x ' + discount_price + ' ' + data.data[i].currency.code +
                                        '  <i class="fas fa-trash" data-id=' + data.data[i]
                                        .product_id + ' data-combination-id=' + data
                                        .data[i].product_combination_id +
                                        '  onclick="removeCartItem(this)"></i>';
                                }
                            }

                            total_price = total_price + (discount_price * data.data[i].qty);

                            $(".top-cart-product-show").append(clone);
                            currrency = data.data[i].currency;
                        }
                        if (currrency != '' && currrency != 'null' && currrency != null) {
                            if (currrency.symbol_position == 'left') {
                                total_price = currrency.code + ' ' + total_price;
                            } else {
                                total_price = total_price + ' ' + currrency.code;
                            }
                        }
                        if (data.data.length > 0) {
                            const temp1 = document.getElementById("top-cart-product-total-template");
                            const clone1 = temp1.content.cloneNode(true);
                            clone1.querySelector(".top-cart-product-total").innerHTML = total_price;
                            $(".top-cart-product-show").append(clone1);
                            $(".total-menu-cart-product-count").html(data.data.length);
                        } else {
                            $(".top-cart-product-show").html('You have no items in your shopping cart.');
                        }
                    } else {
                        toastr.error('some thing went wrong');
                    }
                },
                error: function(data) {},
            });
        }

        function article_news() {
            $.ajax({
                type: 'get',
                url: "http://127.0.0.1:8000" +
                    '/api/client/blog_news?getGallaryDetail=1&limit=10&sortBy=id&language_id=1&getDetail=1&getBlogCategory=1&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    console.log(data);
                    if (data.status == 'Success') {
                        var articles = '';
                        $.each(data.data, function(i, e) {
                            if (i % 2 == 0) {
                                articles += '<div class="col-4">';
                            }
                            articles += '<div class="box-1st d-flex flex-column mb-5">' +
                                '<div class="card text-center border-0">' +
                                '<div class="card-header-cus">' +
                                '<h4 class="font-weight-bold">' + e.detail[0].name + '</h4>' +
                                '</div>' +
                                '<div class="card-body-cus">' +
                                '<p class="card-text mb-2">' + e.detail[0].description
                                .substring(0, 150) + '...</p>' +
                                '</div>' +
                                '<div class="card-footer-cus">' +
                                '<a href="#" class="font-weight-bold text-uppercase">Go To Article</a>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                            if ((i + 1) % 2 == 0 && i != 0) {
                                articles += '</div>';
                            }
                            if (i == 1) {
                                articles += '<div class="col-4">' +
                                    '<div class="box-3rd d-flex justify-content-center align-items-center h-100">' +
                                    '<img src="http://127.0.0.1:8000/frontend/image/observatory/kid.jpg" alt="">' +
                                    '</div>' +
                                    '</div>';
                            }
                            if (i == 3) {
                                return false;
                            }
                        });
                        $('#articles').html(articles);
                    }
                },
                error: function(data) {},
            });
        }

        $('#search_button').click(function(e) {
            e.preventDefault();
            var searchInput = $('#search-input').val();
            if (searchInput == "") {
                toastr.error("search-input-empty")
            } else {
                var url = "http://127.0.0.1:8000/shop" + '?search=' + searchInput;
                var catgory_id = $('.selected_category').attr('data-id');
                if (catgory_id != '' && catgory_id !== undefined)
                    url += "&category=" + catgory_id;
                window.location.href = url;
            }
        });
        $(document).on('click', '.quantity-plus', function() {
            var quantity = $('#quantity-input').val();
            $('#quantity-input').val(parseInt(quantity) + 1);
        })

        $(document).on('click', '.quantity-minus', function() {
            var quantity = $('#quantity-input').val();
            if (quantity > 1)
                $('#quantity-input').val(parseInt(quantity) - 1);
        });

        $(".language-default").click(function(e) {
            e.preventDefault();
            languageId = $(this).attr('data-id');
            languageName = $(this).attr('data-name');
            localStorage.setItem("languageId", languageId);
            localStorage.setItem("languageName", languageName);
            $(".language-default-name").html(languageName);
            var href = $(this).attr('href');
            window.location.href = href;
        });

        $(".mobile-language").change(function(e) {
            e.preventDefault();
            languageId = $(this).val();
            languageName = $(".mobile-language option:selected").text();
            localStorage.setItem("languageId", languageId);
            localStorage.setItem("languageName", languageName);
            var href = $(".mobile-language option:selected").attr('data-link');
            window.location.href = href;
        });


        $('.cat-dropdown').click(function() {
            var category_id = $(this).attr('data-id');
            var category_name = $(this).attr('data-name');
            $('.selected_category').attr('data-id', category_id);
            $('.selected_category').html(category_name);
        });




        $(".selected-currency").click(function(e) {
            e.preventDefault();
            currencyId = $(this).attr('data-id');
            currencycode = $(this).attr('data-code');
            localStorage.setItem("currency", currencyId);
            localStorage.setItem("currencyCode", currencycode);
            $("#selected-currency").html(currencycode);
            var href = $(this).attr('href');
            location.reload();
        });



        $(".currency").change(function(e) {
            e.preventDefault();
            lcurrencyId = $(this).attr('data-id');
            currencycode = $(this).attr('data-code');
            localStorage.setItem("currency", currencyId);
            localStorage.setItem("currencyCode", currencycode);
            location.reload();
        });

        $('.log_out').click(function() {
            url = "http://127.0.0.1:8000" + '/api/client/customer_logout';

            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        localStorage.removeItem("customerToken");
                        localStorage.removeItem("customerHash");
                        localStorage.removeItem("customerLoggedin");
                        localStorage.removeItem("customerId");
                        localStorage.removeItem("customerFname");
                        localStorage.removeItem("customerLname");
                        localStorage.removeItem("cartSession", '');
                        location.reload();
                    }
                },
                error: function(data) {},
            });
        });

        function cartItem(cartSession) {
            if (loggedIn == '1') {
                url = "http://127.0.0.1:8000" + '/api/client/cart?session_id=' + cartSession + '&language_id=' +
                    languageId +
                    '&currency=' + localStorage.getItem("currency");
            } else {
                url = "http://127.0.0.1:8000" + '/api/client/cart/guest/get?session_id=' + cartSession + '&language_id=' +
                    languageId + '&currency=' + localStorage.getItem("currency");
            }

            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $("#cartItem-product-show").html('');
                        const templ = document.getElementById("cartItem-Template");
                        total_price = 0;
                        for (i = 0; i < data.data.length; i++) {
                            $("#totalItems").val(i + 1);
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");
                            if (data.data[i].product_type == 'variable') {
                                for (k = 0; k < data.data[i].combination.length; k++) {
                                    if (data.data[i].product_combination_id == data.data[i].combination[k]
                                        .product_combination_id) {
                                        if (data.data[i].combination[k].gallary != null) {
                                            clone.querySelector(".cartItem-image").setAttribute('src',
                                                '/gallary/' + data.data[i].combination[k].gallary
                                                .gallary_name);
                                            clone.querySelector(".cartItem-image").setAttribute('alt', data
                                                .data[i].combination[k].gallary.gallary_name);
                                            name = data.data[i].product_detail[0].title;
                                            for (loop = 0; loop < data.data[i].product_combination
                                                .length; loop++) {
                                                if (data.data[i].product_combination.length - 1 == loop) {
                                                    name += data.data[i].product_combination[loop].variation
                                                        .detail[0].name;
                                                } else {
                                                    name += data.data[i].product_combination[loop].variation
                                                        .detail[0].name + '-';
                                                }
                                            }
                                            clone.querySelector(".cartItem-name").innerHTML = name;
                                        }
                                        k = data.data[i].combination.length;
                                    } else {}
                                }
                            } else {
                                if (data.data[i].product_gallary != null && $.trim(data.data[i]
                                        .product_gallary) != '') {
                                    if (data.data[i].product_gallary.detail != null && $.trim(data.data[i]
                                            .product_gallary.detail) != '') {
                                        clone.querySelector(".cartItem-image").setAttribute('src', data.data[i]
                                            .product_gallary.detail[2].gallary_path);
                                    }
                                }
                                if (data.data[i].product_detail != null && $.trim(data.data[i]
                                        .product_detail) != '') {
                                    clone.querySelector(".cartItem-image").setAttribute('alt', data.data[i]
                                        .product_detail[0].title);
                                    clone.querySelector(".cartItem-name").innerHTML = data.data[i]
                                        .product_detail[0].title;
                                }
                            }

                            if (data.data[i].discount_price > 0) {
                                discount_price = data.data[i].discount_price;
                            } else {
                                discount_price = data.data[i].price;
                            }
                            if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[i]
                                .currency != null) {
                                if (data.data[i].currency.symbol_position == 'left') {
                                    sum = +data.data[i].qty * +discount_price;
                                    clone.querySelector(".cartItem-total").innerHTML = data.data[i].currency
                                        .code + ' ' + sum.toFixed(2);
                                    clone.querySelector(".cartItem-price").innerHTML = data.data[i].currency
                                        .code + ' ' + discount_price.toFixed(2);
                                } else {
                                    sum = +data.data[i].qty * +discount_price;
                                    clone.querySelector(".cartItem-total").innerHTML = sum.toFixed(2) + ' ' +
                                        data.data[i]
                                        .currency.code;
                                    clone.querySelector(".cartItem-price").innerHTML = discount_price.toFixed(
                                            2) + ' ' + data.data[i]
                                        .currency.code;
                                }
                            } else {
                                clone.querySelector(".cartItem-price").innerHTML = discount_price.toFixed(2);
                            }
                            clone.querySelector(".cartItem-qty").value = +data.data[i].qty;
                            clone.querySelector(".cartItem-qty").setAttribute('id', 'quantity' + i);
                            clone.querySelector(".cartItem-qty-1").setAttribute('value', 'quantity' + i);
                            clone.querySelector(".cartItem-qty-2").setAttribute('value', 'quantity' + i);
                            clone.querySelector(".cartItem-qty-1").setAttribute('data-field', i);
                            clone.querySelector(".cartItem-qty-2").setAttribute('data-field', i);


                            total_price = total_price + (discount_price * data.data[i].qty);


                            if ($.trim(data.data[i].category_detail[0].category_detail) != '' && $.trim(data
                                    .data[i].category_detail[0].category_detail) != 'null' && $.trim(data.data[
                                    i].category_detail[0].category_detail) != null) {
                                clone.querySelector(".cartItem-category-name").innerHTML = data.data[i]
                                    .category_detail[0].category_detail.detail[0].name;
                            }
                            clone.querySelector(".cartItem-remove").setAttribute('data-id', data.data[i]
                                .product_id);
                            clone.querySelector(".cartItem-remove").setAttribute('data-combination-id', data
                                .data[i].product_combination_id);
                            clone.querySelector(".cartItem-remove").setAttribute('onclick',
                                'removeCartItem(this)');

                            clone.querySelector(".cartItem-row").setAttribute('product_combination_id', data
                                .data[i].product_combination_id);
                            clone.querySelector(".cartItem-row").setAttribute('product_id', data.data[i]
                                .product_id);
                            clone.querySelector(".cartItem-row").setAttribute('product_type', data.data[i]
                                .product_type);

                            $("#cartItem-product-show").append(clone);

                            const temp1 = document.getElementById("cartItem-grandtotal-template");
                            const clone1 = temp1.content.cloneNode(true);
                            if (data.data[i].currency != '' && data.data[i].currency != 'null' && data.data[i]
                                .currency != null) {
                                if (data.data[i].currency.symbol_position == 'left') {
                                    clone1.querySelector(".caritem-subtotal").innerHTML = data.data[i].currency
                                        .code + ' ' + total_price.toFixed(2);
                                    clone1.querySelector(".caritem-subtotal").setAttribute('price',
                                        total_price.toFixed(2));
                                    clone1.querySelector(".caritem-subtotal").setAttribute('price-symbol', data
                                        .data[i].currency.code + ' ' + total_price.toFixed(2));
                                    clone1.querySelector(".caritem-grandtotal").innerHTML = data.data[i]
                                        .currency.code + ' ' + total_price.toFixed(2);
                                } else {
                                    clone1.querySelector(".caritem-subtotal").innerHTML = total_price.toFixed(
                                            2) + ' ' +
                                        data.data[i].currency.code;
                                    clone1.querySelector(".caritem-subtotal").setAttribute('price',
                                        total_price.toFixed(2));
                                    clone1.querySelector(".caritem-subtotal").setAttribute('price-symbol', data
                                        .data[i].currency.code + ' ' + total_price.toFixed(2));
                                    clone1.querySelector(".caritem-grandtotal").innerHTML = total_price.toFixed(
                                            2) + ' ' +
                                        data.data[i].currency.code;
                                }
                            }
                            $("#cartItem-grandtotal-product-show").html('');
                            $("#cartItem-grandtotal-product-show").append(clone1);
                        }


                        couponCart = $.trim(localStorage.getItem("couponCart"));
                        if (couponCart != 'null' && couponCart != '') {
                            $("#coupon_code").val(couponCart);
                            couponCartItem();
                        }

                    } else {
                        toastr.error('some thing went wrong');
                    }
                },
                error: function(data) {},
            });
        }

        function removeCartItem(input) {

            product_id = $.trim($(input).attr('data-id'));
            product_combination_id = $.trim($(input).attr('data-combination-id'));
            if (product_combination_id == null || product_combination_id == 'null') {
                product_combination_id = '';
            }

            if (loggedIn == '1') {
                url = "http://127.0.0.1:8000" + '/api/client/cart/delete?session_id=' + cartSession + '&product_id=' +
                    product_id +
                    '&product_combination_id=' + product_combination_id + '&language_id=' + languageId;
            } else {
                url = "http://127.0.0.1:8000" + '/api/client/cart/guest/delete?session_id=' + cartSession + '&product_id=' +
                    product_id + '&product_combination_id=' + product_combination_id + '&language_id=' + languageId;
            }

            $.ajax({
                type: 'DELETE',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(input).closest('tr').remove();
                        cartItem(cartSession);
                        menuCart(cartSession);
                    } else {
                        toastr.error('some thing went wrong');
                    }
                },
                error: function(data) {},
            });
        }
    </script>


    <script>
        var attribute_id = [];
        var attribute = [];
        var variation_id = [];
        var variation = [];
        $(document).ready(function() {
            fetchProduct();
            fetchRelatedProduct();
            article_news();
        });



        languageId = localStorage.getItem("languageId");
        if (languageId == null || languageId == 'null') {
            localStorage.setItem("languageId", '1');
            $(".language-default-name").html('Endlish');
            localStorage.setItem("languageName", 'English');
            languageId = 1;
        }

        customerToken = $.trim(localStorage.getItem("customerToken"));


        function fetchProduct() {
            var url = "http://127.0.0.1:8000" + '/api/client/products/' + "8" +
                '?getCategory=1&getDetail=1&language_id=' + languageId + '&currency=' + localStorage.getItem("currency");
            var appendTo = 'product-page';
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    console.log(data);
                    if (data.status == 'Success') {
                        const templ = document.getElementById("product-detail-section");
                        console.log(templ);
                        const clone = templ.content.cloneNode(true);
                        clone.querySelector(".add-to-cart").setAttribute('onclick', 'addToCart(this)');
                        clone.querySelector(".add-to-cart").setAttribute('data-id', data.data.product_id);
                        clone.querySelector(".add-to-cart").setAttribute('data-type', data.data.product_type);
                        // clone.querySelector(".product-detail-section-product-id").innerHTML = data.data.product_id;
                        /* if (data.data.product_gallary_detail != null) {
                            var image_list_link = "";
                            var image_list = "";
                            for (var g = 0; g < data.data.product_gallary_detail.length; g++) {

                                image_list_link +=
                                    '<a class="slider-for__item ex1 fancybox-button" href="/gallary/large' +
                                    data.data.product_gallary_detail[g].gallary_name +
                                    '" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet"><img class="product-detail-section-image" src="/gallary/large' +
                                    data.data.product_gallary_detail[g].gallary_name +
                                    '" alt="Zoom Image" /></a>'


                                image_list +=
                                    '<div class="slider-nav__item"><img class="product-detail-section-image" src="/gallary/thumbnail' +
                                    data.data.product_gallary_detail[g].gallary_name +
                                    '" alt="Zoom Image"/></div>';

                            }
                            if (data.data.product_combination) {
                                for (loop = 0; loop < data.data.product_combination.length; loop++) {
                                    if (data.data.product_combination[loop].gallary != null) {
                                        image_list_link +=
                                            '<a class="slider-for__item ex1 fancybox-button" href="/gallary/large' +
                                            data.data.product_combination[loop].gallary.gallary_name +
                                            '" data-fancybox-group="fancybox-button" title="Lorem ipsum dolor sit amet"><img class="product-detail-section-image" src="/gallary/large' +
                                            data.data.product_combination[loop].gallary.gallary_name +
                                            '" alt="Zoom Image" /></a>';


                                        image_list +=
                                            '<div class="slider-nav__item"><img class="product-detail-section-image" src="/gallary/thumbnail' +
                                            data.data.product_combination[loop].gallary.gallary_name +
                                            '" alt="Zoom Image" id="image-' + data.data.product_combination[
                                                loop].product_combination_id + '"/></div>';
                                    }
                                }
                            }



                            clone.querySelector(".slider-for").innerHTML = image_list_link;
                            clone.querySelector(".slider-nav").innerHTML = image_list;

                        } */

                        if (data.data.detail != null) {
                            clone.querySelector(".pro-title").innerHTML = data.data.detail[0].title;
                            clone.querySelector(".description").innerHTML = data.data.detail[0].desc;

                        }

                        // if (data.data.product_type == 'simple') {
                        //     if (data.data.product_discount_price == '' || data.data
                        //         .product_discount_price == null || data.data.product_discount_price ==
                        //         'null') {
                        //         clone.querySelector(".product-card-price").innerHTML = data.data
                        //             .product_price_symbol;
                        //     } else {

                        //         clone.querySelector(".product-card-price").innerHTML = data.data
                        //             .product_discount_price_symbol + '<span>' + data.data
                        //             .product_price_symbol + '</span>';
                        //     }
                        // } else {
                        //     if (data.data.product_combination != null) {
                        //         clone.querySelector(".product-card-price").innerHTML = data.data
                        //             .product_combination[0].product_price_symbol;
                        //     }


                        // }
                        $("." + appendTo).append(clone);

                        /* var allSlide = '';
                        var allImage = '';
                        var j = 1
                        $.each(data.data.product_gallary_detail, function(i, e) {
                            console.log(1 + ', ' + e);
                            if (i % 4 == 0) {
                                if (i == 0) {
                                    allSlide +=
                                        '<div class="carousel-item active" data-slide-number="' + j +
                                        '">' +
                                        '<div class="row mx-0 .row-content d-flex  align-items-center justify-content-center">';
                                } else {
                                    allSlide += '<div class="carousel-item" data-slide-number="' + j +
                                        '">' +
                                        '<div class="row mx-0 .row-content d-flex  align-items-center justify-content-center">';
                                }
                            }
                            if (i == 0) {
                                allSlide += '<div id="carousel-selector-' + i +
                                    '" class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2 selected" data-target="#carousel" data-slide-to="' +
                                    i + '">' +
                                    '<img src="http://127.0.0.1:8000/gallary/' + e.gallary_name +
                                    '" class="img-fluid">' +
                                    '</div>';
                                allImage += '<div class="carousel-item active" data-slide-number="' +
                                    i +
                                    '" data-toggle="lightbox" data-gallery="gallery" data-remote="http://127.0.0.1:8000/gallary/' +
                                    e.gallary_name + '">' +
                                    '<img src="http://127.0.0.1:8000/gallary/' + e.gallary_name +
                                    '" class="d-block w-100" alt="...">' +
                                    '</div>';
                            } else {
                                allSlide += '<div id="carousel-selector-' + i +
                                    '" class="thumb col-xl-12 col-lg-12 col-md-6 col-3 px-1 py-2" data-target="#carousel" data-slide-to="' +
                                    i + '">' +
                                    '<img src="http://127.0.0.1:8000/gallary/' + e.gallary_name +
                                    '" class="img-fluid">' +
                                    '</div>';
                                allImage += '<div class="carousel-item" data-slide-number="' + i +
                                    '" data-toggle="lightbox" data-gallery="gallery" data-remote="http://127.0.0.1:8000/gallary/' +
                                    e.gallary_name + '">' +
                                    '<img src="http://127.0.0.1:8000/gallary/' + e.gallary_name +
                                    '" class="d-block w-100" alt="...">' +
                                    '</div>';
                            }
                            if ((i + 1) % 4 == 0 && i != 0) {
                                allSlide += '</div></div>';
                                j++;
                            }
                        })
                        $('.allSlide').html(allSlide);
                        $('.allImage').html(allImage); */
                    }
                },
                error: function(data) {},
            });
        }

        $(document).on('click', '.variation_list_item', function() {
            var variation_name = $(this).attr('data-variation-name');
            var attribute_name = $(this).attr('data-attribute-name').split(' ').join('_');

            $('.attribute_' + attribute_name + '_div').each(function() {
                $('.attribute_' + attribute_name + '_div').removeClass("variation_active");
            })

            $('.' + variation_name + '-' + attribute_name).addClass("variation_active");

            if (attribute_id.indexOf($(this).attr('data-attribute-id')) === -1) {
                attribute_id.push($(this).attr('data-attribute-id'));
                attribute.push($(this).attr('data-attribute-name'));
                variation_id.push($(this).attr('data-variation-id'));
                variation.push($(this).attr('data-variation-name'));

            } else {

                var index = attribute_id.indexOf($(this).attr('data-attribute-id'));
                if ($(this).attr('data-variation-id') == "") {
                    attribute_id.splice(index, 1);
                    variation_id.splice(index, 1);
                    attribute.splice(index, 1);
                    variation.splice(index, 1);
                } else {
                    attribute_id[index] = $(this).attr('data-attribute-id');
                    variation_id[index] = $(this).attr('data-variation-id');
                    attribute[index] = $(this).attr('data-attribute-name');
                    variation[index] = $(this).attr('data-variation-name');
                }

            }

            // console.log(attribute_id, variation_id, attribute, variation);
            var url = "http://127.0.0.1:8000" +
                '/api/client/products/8?getCategory=1&getDetail=1&language_id=' + languageId +
                '&currency=' + localStorage.getItem("currency");
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        for (i = 0; i < data.data.product_combination.length; i++) {
                            p = 0;
                            not_combination = 0;
                            product_combination_id = price = gallary = '';
                            variation_array = new Array();
                            for (k = 0; k < data.data.product_combination[i].combination
                                .length; k++) {
                                variation_array[p] = data.data.product_combination[i].combination[k]
                                    .variation_id;
                                ++p;
                            }
                            if (variation_array.length == variation_id.length) {
                                console.log(variation_array);
                                console.log(variation_id);
                                for (m = 0; m < variation_id.length; m++) {
                                    if (jQuery.inArray(parseInt(variation_id[m]),
                                            variation_array) == -
                                        1) {
                                        not_combination = 1;
                                    }
                                }
                            } else {
                                not_combination = 1;
                            }

                            if (not_combination == 0) {
                                product_combination_id = data.data.product_combination[i]
                                    .product_combination_id;
                                $("#product_combination_id").val(product_combination_id);
                                price = data.data.product_combination[i].product_price_symbol;
                                $(".product-card-price").html(price);

                                if (data.data.product_combination[i].gallary != null) {
                                    gallary = data.data.product_combination[i].gallary.gallary_name;
                                    var image_list_link = "";
                                    var image_list = "";

                                    image_list_link = '<a class="" href="/gallary/large' + data.data
                                        .product_combination[i].gallary.gallary_name +
                                        '" title="Lorem ipsum dolor sit amet"><img class="product-detail-section-image" src="/gallary/large' +
                                        data.data.product_combination[i].gallary.gallary_name +
                                        '" alt="Zoom Image" /></a>'


                                    image_list =
                                        '<div class=""><img class="product-detail-section-image" src="/gallary/thumbnail' +
                                        data.data.product_combination[i].gallary.gallary_name +
                                        '" alt="Zoom Image"/></div>';

                                    $("#image-" + data.data.product_combination[i]
                                        .product_combination_id).trigger('click');

                                    // $(".slider-for").removeClass('slick-initialized slick-slider');
                                    // $(".slider-for").html(image_list_link);
                                    // $(".slider-nav").html(image_list);
                                }
                                return;
                            } else {}
                        }

                        // slideInital();
                    }
                },
                error: function(data) {},
            });

        })

        function fetchRelatedProduct() {
            var url = "http://127.0.0.1:8000" + '/api/client/products?limit=10&getDetail=1&language_id=' + languageId +
                '&currency=' + localStorage.getItem("currency");
            var appendTo = 'related';
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {

                        const templ = document.getElementById("product-card-template");
                        // templ.prepend('<div class="product-carousel-js">');
                        // templ.append('</div>');
                        for (i = 0; i < data.data.length; i++) {
                            const clone = templ.content.cloneNode(true);
                            // clone.querySelector(".single-text-chat-li").classList.add("bg-blue-100");

                            if (data.data[i].product_gallary != null) {
                                if (data.data[i].product_gallary.detail != null) {
                                    clone.querySelector(".product-card-image").setAttribute('src', data
                                        .data[i]
                                        .product_gallary.detail[1].gallary_path);
                                }
                            }
                            if (data.data[i].detail != null) {
                                clone.querySelector(".product-card-image").setAttribute('alt', data.data[i]
                                    .detail[0].title);
                            }

                            if (data.data[i].detail != null) {
                                clone.querySelector(".product-card-name").innerHTML = data.data[i].detail[0]
                                    .title;
                                clone.querySelector(".product-card-name").setAttribute('href', '/product/' +
                                    data
                                    .data[i].product_id + '/' + data
                                    .data[i].product_slug);
                                clone.querySelector(".product-card-link").setAttribute('href', '/product/' +
                                    data
                                    .data[i].product_id + '/' + data
                                    .data[i].product_slug);
                                var desc = data.data[i].detail[0].desc;
                                // clone.querySelector(".product-card-desc").innerHTML = desc.substring(0, 50);
                            }




                            $("." + appendTo).append(clone);
                        }
                        // getSliderSettings(appendTo);
                    }
                },
                error: function(data) {},
            });
        }

        function productReview() {
            rating = $("input[name=rating]").val();
            comment = $("#comment").val();
            title = $("#title").val();
            if (rating == '') {
                toastr.error('select-ratings');
                return;
            }

            var url = "http://127.0.0.1:8000" + '/api/client/review?product_id=8&comment=' + comment +
                '&rating=' + rating + '&title=' + title;
            var appendTo = 'related';
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        toastr.success('rating-saved-successfully');
                        $("#comment").val('');
                        $("#title").val('');
                        getProductReview();
                    }
                },
                error: function(data) {
                    console.log(data);
                    if (data.status == 422) {
                        jQuery.each(data.responseJSON.errors, function(index, item) {
                            $("#" + index).parent().find('.invalid-feedback').css('display',
                                'block');
                            $("#" + index).parent().find('.invalid-feedback').html(item);
                        });
                    } else if (data.status == 401) {
                        toastr.error('some thing went wrong');
                    }
                },
            });
        }

        function getProductReview() {
            var url = "http://127.0.0.1:8000" + '/api/client/review?product_id=8';
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "1234",
                    clientsecret: "sk_1234",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        const temp2 = document.getElementById("review-rating-template");
                        $("#review-rating-show").html('');
                        for (review = 0; review < data.data.length; review++) {
                            const clone1 = temp2.content.cloneNode(true);
                            clone1.querySelector(".review-comment").innerHTML = data.data[review].comment;
                            clone1.querySelector(".review-date").innerHTML = data.data[review].date;
                            clone1.querySelector(".review-title").innerHTML = data.data[review].title;
                            if (data.data[review].rating == '5') {
                                clone1.querySelector(".review-rating5").setAttribute('checked', true);
                            } else if (data.data[review].rating == '4') {
                                clone1.querySelector(".review-rating4").setAttribute('checked', true);
                            } else if (data.data[review].rating == '3') {
                                clone1.querySelector(".review-rating3").setAttribute('checked', true);
                            } else if (data.data[review].rating == '2') {
                                clone1.querySelector(".review-rating2").setAttribute('checked', true);
                            } else if (data.data[review].rating == '1') {
                                clone1.querySelector(".review-rating1").setAttribute('checked', true);
                            }
                            $("#review-rating-show").append(clone1);
                        }
                    }
                },
                error: function(data) {
                    console.log(data);
                },
            });
        }


        function slideInital() {
            // Product SLICK
            // $('.slider-show').html('<div class="slider-for"></div><div class="slider-nav"></div>');
            // alert();
            jQuery('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: false,
                draggable: false,
                fade: true,
                asNavFor: '.slider-nav',
                reinit: true
            });
            jQuery('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                centerMode: true,
                centerPadding: '60px',
                dots: false,
                arrows: true,
                focusOnSelect: true,
                reinit: true
            });


            // Product vertical SLICK
            jQuery('.slider-for-vertical').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                infinite: false,
                draggable: false,
                fade: true,
                asNavFor: '.slider-nav-vertical'
            });
            jQuery('.slider-nav-vertical').slick({
                dots: false,
                arrows: true,
                vertical: true,
                asNavFor: '.slider-for-vertical',
                slidesToShow: 3,
                // centerMode: true,
                slidesToScroll: 1,
                verticalSwiping: true,
                focusOnSelect: true
            });

            jQuery(function() {
                // ZOOM
                jQuery('.ex1').zoom();

            });

        }
    </script>



</body>

</html>
