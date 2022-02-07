{{-- {{ dd(getSetting()['card_style']) }} --}}
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>{{ isset(getSetting()['seo_title']) ? getSetting()['seo_title'] : 'Seo Title' }}</title>
    <meta name="description"
        content="{{ isset(getSetting()['seo_description']) ? getSetting()['seo_description'] : 'Seo Description' }}">
    <meta name="keywords"
        content="{{ isset(getSetting()['seo_keywords']) ? getSetting()['seo_keywords'] : 'Seo Keywords' }}">
    <meta name="author" content="">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png"
        href="{{ isset(getSetting()['favicon']) ? getSetting()['favicon'] : '01-fav.png' }}">

    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" /> --}}
    {{-- <link href="{{ asset('frontend/css/magnific-popup.css') }}" rel="stylesheet" /> --}}
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,100;1,300;1,400;1,500&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}" />
    <!--========================================= NEW LINK START  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}" /> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <style>
        /* #busybox {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);

            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, .8) url('{{ asset('loader/loader.gif') }}') no-repeat 50%
        } */

        /* .fog_div {
            display: none;
            position: fixed;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            z-index: 100;
            background-color: rgba(30, 30, 30, 0.5);
        } */

        /* #busybox.show {
            display: block;
        } */

    </style>
</head>

<body class="animation-s1 {{ $data['direction'] === 'rtl' ? 'bodyrtl' : '' }} ">
    <div id="loading" style="background: #fff url('{{ asset('loader/loader.gif') }}') no-repeat center;"></div>
    {{-- {{   dd(getSetting()) }} --}}
    {{-- @include('extras.preloader') --}}
    {{-- @include(isset(getSetting()['header_style']) ? 'includes.headers.header-'.getSetting()['header_style'] :
    'includes.headers.header-style1') --}}
    @if (!Request::is('/'))
        <section id="page-wrapper">
            @include(isset(getSetting()['header_style']) ? 'includes.headers.header-'.getSetting()['header_style'] :
            'includes.headers.header-style1')
        </section>
    @else
        @include(isset(getSetting()['header_style']) ? 'includes.headers.header-'.getSetting()['header_style'] :
        'includes.headers.header-style1')
    @endif
    <!-- Modal -->
    <div class="modal fade w-100 p-0 position-fixed" id="searchmodal" tabindex="-1" role="dialog"
        aria-labelledby="searchmodal" aria-hidden="true">
        <div class="modal-dialog modal-xl position-relative" role="document">
            <div class="modal-content">
                <div class="modal-header text-center m-auto">
                    <h5 class="modal-title" id="modal1">
                        <img src="{{ asset('frontend/image/logo/logo.png') }}" alt="logo" class="img-fluid">
                    </h5>

                </div>
                <button type="button" class="close position-absolute" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body text-center">
                    <form>
                        <style>	
                            #searchBox .content:hover {	
                                background-color: #000c27c9;	
                                color: #fff;	
                                text-decoration: none;	
                                font-size: 20px;	
                            }	
                            #searchBox .content {	
                                color: #000;	
                                text-decoration: none;	
                                font-size: 20px;	
                            }	
                            .searchbox-wrapper {	
                                background-color: white;	
                                box-shadow: 0 16px 24px rgb(96 97 112 / 10%), 0 32px 48px rgb(0 0 0 / 15%);	
                                max-height: 400px;	
                                min-height: auto;	
                                overflow: hidden;	
                                cursor: pointer;	
                                overflow-y:scroll;	
                            }	
                            ::-webkit-scrollbar {	
                            width: 10px;	
                            }	
                            /* Track */	
                            ::-webkit-scrollbar-track {	
                            background: #f1f1f1; 	
                            }	
                            	
                            /* Handle */	
                            ::-webkit-scrollbar-thumb {	
                            background: #888; 	
                            }	
                            /* Handle on hover */	
                            ::-webkit-scrollbar-thumb:hover {	
                            background: #555; 	
                            }	
                            .img-thumbnail {	
                                padding: 0px;	
                                border: 0 !important;	
                                height: 100px;	
                            }	
                        </style>
                        <input type="search" id="search-input" placeholder="Search anything you like"	
                        class="w-75" autocomplete="off">	
                    <div class="w-75 m-auto searchbox-wrapper">	
                        <div class="searchBox" id="searchBox"> 	
                        </div>	
                    </div>
                        <button id="search_button" class="d-none">Search</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @yield('content')

    
    @include(isset(getSetting()['Footer_style']) ? 'includes.footers.footer-'.getSetting()['Footer_style'] :
    'includes.footers.footer-style1')


    {{-- <a href="javascript:void(0)" class="btn-secondary swipe-to-top" id="back-to-top" data-toggle="tooltip"
        data-placement="bottom" data-original-title="{{ trans('lables.general-backtotop') }}"
        title="{{ trans('lables.general-backtotop') }}">&uarr;</a>

    <div class="mobile-overlay"></div>

    <div class="notifications" id="notificationWishlist">Product Added To Wishlist</div> --}}



    {{-- @include('extras.settings')
    @include('modals.product-quick-view') --}}

    <!-- All custom scripts here -->
    <!-- Js link Starts -->

    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <!-- font awesome -->
    <script src="{{ asset('frontend/js/wow.js') }}"></script>
    <script src="https://kit.fontawesome.com/a26d9146a0.js" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scripts/main.js') }}"></script>
    <script src="{{ asset('frontend/js/scripts/jquery.zoom.min.js') }}"></script>
    <script>
        // if(){
            // $(document).ready(function(){
               
            // });
        // }
    </script>
    <!-- NEW LIN ============================================================ -->
    {{-- <script src="{{ asset('frontend/js/modernizr-3.5.0.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('frontend/js/jquery-1.12.4.min.js') }}"></script> --}}

    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/animated.headline.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/classie.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/cbpGridGallery.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/front/js/scripts.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    @php
        $language_id = $data['selectedLenguage'];
        $locale = session()->get('locale');
        //dd ($locale);
    @endphp

    <script>
        // $(document).ajaxComplete(function(){
        //     myFunction();
        // });
        $(document).ajaxStop(function(){
            myFunction();
        });
    </script>

    <script>
        /*   loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
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
                                        localStorage.setItem("languageId", $.trim("{{ $data['selectedLenguage'] }}"));
                                        localStorage.setItem("languageName", $.trim("{{ $data['selectedLenguageName'] }}"));
                                        $(".language-default-name").html($.trim("{{ $data['selectedLenguageName'] }}"));
                                        languageId = $.trim("{{ $data['selectedLenguage'] }}");
                                    } else {
                                        $(".language-default-name").html(localStorage.getItem("languageName"));
                                        $('.mobile-language option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
                                    }

                                    currency = localStorage.getItem("currency");
                                    currencyCode = localStorage.getItem("currencyCode");
                                    if (currencyCode == null || currencyCode == 'null') {
                                        localStorage.setItem("currency", $.trim("{{ $data['selectedCurrency'] }}"));
                                        localStorage.setItem("currencyCode", $.trim("{{ $data['selectedCurrencyName'] }}"));
                                        $("#selected-currency").html($.trim("{{ $data['selectedCurrencyName'] }}"));
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

                                     */
    </script>

<script>	
    $(document).ready(function() {	
        $(document).on('keyup', '#search-input', function() {	
            var name = $(this).val();	
            if (name.length > 0) {	
                $.ajax({	
                    url: '{{ route('search-product') }}',	
                    dataType: 'json',	
                    method: 'get',	
                    data: {	
                        name: name	
                    },	
                    success: function(response) {	
                        // console.log(response);	
                        if (response.length > 0) {	
                            $('#searchBox').html('');	
                            var results = '';	
                            $.each(response, function(i, e) {	
                                results += '<a href="/product/' + e.id + '/' + e.product_slug + '" class="w-100 d-block content p-1">' +	
                                    '<div class="d-flex align-items-center">' +	
                                        '<div class="w-25">' +	
                                            '<img src="{{ asset("/gallary") }}/' + e.gallary_name + '" class="img-thumbnail">' +	
                                        '</div>' +	
                                        '<div class="w-75 title h-100 text-left">' +	
                                            e.title +	
                                        '</div>' +	
                                    '</div>' +	
                                '</a>';	
                            });	
                            $('#searchBox').html(results);	
                            $('#searchBox').prop('hidden', false);	
                            // if (e.key === "Escape") {	
                            //     $('#searchBox').prop('hidden', true);	
                            // }	
                        } else {	
                            $('#searchBox').html('');	
                            $('#searchBox').prop('hidden', true);	
                        }	
                    },	
                    error: function(error) {	
                        console.log(error);	
                    }	
                });	
            } else {	
                $('#searchBox').html('');	
                $('#searchBox').prop('hidden', true);	
            }	
        })	
    })	
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
            localStorage.setItem("languageId", $.trim("{{ $data['selectedLenguage'] }}"));
            localStorage.setItem("languageName", $.trim("{{ $data['selectedLenguageName'] }}"));
            $(".language-default-name").html($.trim("{{ $data['selectedLenguageName'] }}"));
            languageId = $.trim("{{ $data['selectedLenguage'] }}");
        } else {
            $(".language-default-name").html(localStorage.getItem("languageName"));
            $('.mobile-language option[value="' + localStorage.getItem("languageId") + '"]').attr('selected', 'selected');
        }

        currency = localStorage.getItem("currency");
        currencyCode = localStorage.getItem("currencyCode");
        if (currencyCode == null || currencyCode == 'null') {
            localStorage.setItem("currency", $.trim("{{ $data['selectedCurrency'] }}"));
            localStorage.setItem("currencyCode", $.trim("{{ $data['selectedCurrencyName'] }}"));
            $("#selected-currency").html($.trim("{{ $data['selectedCurrencyName'] }}"));
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
                url: "{{ url('') }}" + '/api/client/wishlist',
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        if (data.data.length > 0) {
                            $(".wishlist-count").css({
                                "padding-top": "1px",
                                "padding-right": "5px",
                                "padding-bottom": "1px",
                                "padding-left": "5px",
                            });
                            $(".wishlist-count").html(data.data.length);
                        }

                    }
                },
                error: function(data) {},
            });
        }



        function addWishlist(input) {
            if (loggedIn != '1') {
                toastr.error('{{ trans('response.please_login_first') }}')
                return;
            }

            $.ajax({
                type: 'post',
                url: "{{ url('') }}" + '/api/client/wishlist?product_id=' + $(input).attr('data-id'),
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $(".wishlist-count").html(data.data.length);
                        toastr.success('{{ trans("Item added successfully in wishlist") }}')
                    }
                },
                error: function(data) {},
            });
        }


        function addCompare(input) {
            if (loggedIn != '1') {
                toastr.error('{{ trans('response.please_login_first') }}')
                return;
            }


            customerId = $.trim(localStorage.getItem("customerId"));
            $.ajax({
                type: 'post',
                url: "{{ url('') }}" + '/api/client/compare?product_id=' + $(input).attr('data-id') +
                    '&customer_id=' + customerId,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        toastr.success('{{ trans('response.compare-add-success') }}')

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
                url: "{{ url('') }}" + '/api/client/products/' + product_id +
                    '?getCategory=1&getDetail=1&language_id=' + languageId + '&currency=' + localStorage.getItem(
                        "currency"),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
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
            product_input = $.trim($(input).attr('data-input'));
            product_combination_id = '';
            if (product_type == 'variable') {
                if ($.trim($("#product_combination_id").val()) == '' || $.trim($("#product_combination_id").val()) ==
                    'null') {
                    toastr.error("{{ trans('response.select-combination') }}")
                    return;
                }
                product_combination_id = $("#product_combination_id").val();
            }
            if ($("#quantity-input").length) {
                qty = $.trim($("#quantity-input").val());
            }else{
                qty = $.trim($("#quantity"+product_input).val());
                // console.log('asdf');
            }
            // qty = $.trim($("#quantity-input").val());
            // console.log(qty);
            if (qty == '' || qty == 'undefined' || qty == null) {
                qty = 1;
            }
            addToCartFun(product_id, product_combination_id, cartSession, qty);
            toastr.success('{{ trans('response.add-to-cart-success') }}')
        }

        function addToCartFun(product_id, product_combination_id, cartSession, qty) {
            if (loggedIn == '1') {
                url = "{{ url('') }}" + '/api/client/cart?session_id=' + cartSession + '&product_id=' + product_id +
                    '&qty=' + qty + '&product_combination_id=' + product_combination_id;
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/store?session_id=' + cartSession + '&product_id=' +
                    product_id + '&qty=' + qty + '&product_combination_id=' + product_combination_id;
            }
            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        if (loggedIn != '1') {
                            localStorage.setItem("cartSession", data.data.session);
                            // console.dir(data);
                            menuCart(data.data.session);
                            menuCart(cartSession);
                            cartItem(cartSession);
                        } else {
                            // menuCart('');
                            menuCart(cartSession);
                            cartItem(cartSession);
                        }
                        // toastr.success('{{ trans('response.add-to-cart-success') }}')
                    } else if (data.status == 'Error') {

                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                },
                error: function(data) {
                    if (data.responseJSON.status == 'Error') {
                        // toastr.error(data.responseJSON.message);
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }

                },
            });
        }

        function menuCart(cartSession) {
            if (loggedIn == '1') {
                url = "{{ url('') }}" + '/api/client/cart?session_id=' + cartSession + '&currency=' + localStorage
                    .getItem("currency");
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/get?session_id=' + cartSession + '&currency=' +
                    localStorage.getItem("currency");
            }
            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data.data.length);
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
                                        $(".product-card-price2").html(data.data[i].product_price_symbol);

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
                                        ' onclick="removeCartItem(this)" style="cursor: pointer"></i>';
                                } else {
                                    clone.querySelector(".top-cart-product-qty-amount").innerHTML = data.data[i]
                                        .qty + ' x ' + discount_price + ' ' + data.data[i].currency.code +
                                        '  <i class="fas fa-trash" data-id=' + data.data[i]
                                        .product_id + ' data-combination-id=' + data
                                        .data[i].product_combination_id +
                                        '  onclick="removeCartItem(this)" style="cursor: pointer"></i>';
                                }
                            }

                            total_price = total_price + (discount_price * data.data[i].qty);

                            $(".top-cart-product-show").append(clone);
                            currrency = data.data[i].currency;
                        }
                        if (currrency != '' && currrency != 'null' && currrency != null) {
                            if (currrency.symbol_position == 'left') {
                                total_price = currrency.code + ' ' + total_price.toFixed(2);
                            } else {
                                total_price = total_price.toFixed(2) + ' ' + currrency.code;
                            }
                        }
                        if (data.data.length > 0) {
                            const temp1 = document.getElementById("top-cart-product-total-template");
                            const clone1 = temp1.content.cloneNode(true);
                            clone1.querySelector(".top-cart-product-total").innerHTML = total_price;
                            $(".top-cart-product-show1").html(clone1);
                            $(".total-menu-cart-product-count").css({
                                "padding-top": "1px",
                                "padding-right": "5px",
                                "padding-bottom": "1px",
                                "padding-left": "5px",
                            });
                            $(".total-menu-cart-product-count").html(data.data.length);
                            $(".dropdown-menu .shopping-cart-items").css({
                                'overflow-y': 'scroll',
                                'height': '350px',
                                'width': '320px',
                            });
                        } else {
                            $(".top-cart-product-show").html('{{ trans('lables.header-emptycart') }}');
                            $(".total-menu-cart-product-count").html('');
                            $(".total-menu-cart-product-count").css({
                                "padding-top": "0px",
                                "padding-right": "0px",
                                "padding-bottom": "0px",
                                "padding-left": "0px",
                            });
                        }
                    } else {
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                },
                error: function(data) {},
            });
        }

        function article_news() {
            $.ajax({
                type: 'get',
                url: "{{ url('') }}" +
                    '/api/client/blog_news?getGallaryDetail=1&limit=10&sortBy=id&language_id=1&getDetail=1&getBlogCategory=1&sortType=DESC',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    // console.log(data);
                    if (data.status == 'Success') {
                        var articles = '';
                        $.each(data.data, function(i, e) {
                            if (i % 2 == 0) {
                                articles += '<div class="col-xl-4 col-md-4 d-md-block d-none">';
                            }
                            articles += '<div class=" box-1st d-flex flex-column mb-5">' +
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
                                articles += '<div class="col-xl-4 col-md-4 col-sm-12">' +
                                    '<div class="box-3rd d-flex justify-content-center align-items-center h-100">' +
                                    '<img src="{{ asset('frontend/image/observatory/kid.jpg') }}" alt="" id="observatory-image">' +
                                    '</div>' +
                                    '</div>';
                            }
                            if (i == 3) {
                                return false;
                            }
                        });
                        $('#articles').html(articles);

                        $.ajax({
                            type: 'get',
                            url: "{{ url('') }}" +
                                '/api/client/slider?getLanguage=1&getSliderType=1&getSliderNavigation=1&getSliderGallary=1&limit=5&sortBy=id&sortType=DESC&sliderType=6&language_id=1',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                            },
                            beforeSend: function() {},
                            success: function(data) {
                                if (data.status == 'Success') {
                                    if(data.data[0].gallary){
                                        imgSrc = '{{ url('/') }}/gallary/' + data.data[0].gallary;
                                        $('#observatory-image').attr('src', imgSrc);
                                    }
                                }
                            },
                            error: function(data) {},
                        });
                    }
                },
                error: function(data) {},
            });
        }

        $('#search_button').click(function(e) {
            e.preventDefault();
            var searchInput = $('#search-input').val();
            if (searchInput == "") {
                toastr.error("{{ trans('search-input-empty') }}")
            } else {
                var url = "{{ url('/shop') }}" + '?search=' + searchInput;
                var catgory_id = $('.selected_category').attr('data-id');
                if (catgory_id != '' && catgory_id !== undefined)
                    url += "&category=" + catgory_id;
                window.location.href = url;
            }
        });
        $(document).on('click', '.quantity-plus', function() {
            var quantity = $('#quantity-input').val();
            console.log(quantity);
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
            url = "{{ url('') }}" + '/api/client/customer_logout';

            $.ajax({
                type: 'post',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
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
                url = "{{ url('') }}" + '/api/client/cart?session_id=' + cartSession + '&language_id=' + languageId +
                    '&currency=' + localStorage.getItem("currency");
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/get?session_id=' + cartSession + '&language_id=' +
                    languageId + '&currency=' + localStorage.getItem("currency");
            }

            $.ajax({
                type: 'get',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    if (data.status == 'Success') {
                        $("#cartItem-product-show").html('');
                        const templ = document.getElementById("cartItem-Template");
                        total_price = 0;
                        for (i = 0; i < data.data.length; i++) {
                            // console.log("qty =" +data.data[i].qty);
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
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
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
                url = "{{ url('') }}" + '/api/client/cart/delete?session_id=' + cartSession + '&product_id=' +
                    product_id +
                    '&product_combination_id=' + product_combination_id + '&language_id=' + languageId;
            } else {
                url = "{{ url('') }}" + '/api/client/cart/guest/delete?session_id=' + cartSession + '&product_id=' +
                    product_id + '&product_combination_id=' + product_combination_id + '&language_id=' + languageId;
            }

            $.ajax({
                type: 'DELETE',
                url: url,
                headers: {
                    'Authorization': 'Bearer ' + customerToken,
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                    clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                },
                beforeSend: function() {},
                success: function(data) {
                    var cartUrl = "{{ url('/cart') }}";
                    if (data.status == 'Success') {
                        $(input).closest('tr').remove();
                        cartItem(cartSession);
                        menuCart(cartSession);
                        toastr.success('Item removed from cart successfully');
                    } else {
                        toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                    }
                    if (window.location.href === cartUrl) {
                        if ($("#cartItem-product-show tbody tr").length === 0 || $(
                                "#cartItem-product-show tbody tr").length < 0) {
                            toastr.success('No item in cart.');
                            location.href = '/';

                        }
                    }

                },
                error: function(data) {},
            });
        }
    </script>

    {{-- <script>
        $(document).ready(function() {
            let carturl = "{{ url('/cart') }}";
            alert(window.location.href);
            alert(window.location.href === carturl);
        })
    </script> --}}

    @yield('script')
</body>

</html>
