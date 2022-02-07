<?php

$prod = App\Models\Admin\Product::where('id', $product)
    ->with('productDetail')
    ->with('productGallaryDetail')
    ->with('product_combination')
    ->first();

$gallary_id = [];
if (!$prod->productGallaryDetail->isEmpty()) {
    foreach ($prod->productGallaryDetail as $gallaryDetail) {
        $gallary_id[] = $gallaryDetail->gallary_id;
    }
}
if (!$prod->product_combination->isEmpty()) {
    foreach ($prod->product_combination as $prod_combination) {
        $gallary_id[] = $prod_combination->gallary_id;
    }
}
$gallaryIds = array_unique($gallary_id);
$galleries = App\Models\Admin\Gallary::whereIn('id', $gallaryIds)
    ->get()
    ->toArray();

$newgalleries = array_chunk($galleries, 4, true);

// foreach ($newgalleries as $key => $newgallery) {
//     foreach ($newgallery as $gal) {
//         echo '<pre>';
//         print_r($gal['name']);
//         echo '</pre>';
//     }
//     // echo "<pre>";
//     // print_r($newgallery);
// }
// die();

// dd($newgalleries);
?>
<link rel="stylesheet" href="{{ asset('frontend/css/slider2.css') }}">

<template id="product-detail-section">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>

    <script>
        function toggleActiveClass(id) {
            $(".currentSlider").find(".")
        }
    </script>
    <section id="product-detail-slider-wrapper" class="py-4">
        <div class="container">
            <div class="row py-4">
                <div class="col-xl-8 col-lg-8 col-12">
                    <div class="row carousel-gallery-wrapper">
                        <div class="col-xl-3 col-lg-3 col-12 _boxzoom d-flex align-items-center justify-content-between order-lg-1 order-md-2 order-2">
                            <!-- Carousel Navigatiom -->
                            <div class="zoom-thumb">
                                <div class="product-detail-slider d-flex position-relative">
                                    <?php
                                    $i = 0;
                                    $id = [];
                                    // $j = 1;
                                    ?>
                                    @foreach ($newgalleries as $key => $newgallery)
                                        @foreach ($newgallery as $v => $gal)
                                            <div class="slider_item position-relative" data-target="#carousel"
                                                data-slide-to="{{ $v }}">
                                                <img src="{{ asset('gallary/large' . $gal['name']) }}" class="img-fluid">
                                            </div>
                                        @endforeach
                                    @endforeach
                                </div>
                                {{-- <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
                                    <span class="icon-prv">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
                                    <span class="icon-nxt">
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a> --}}
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-12 order-lg-2 order-md-1 order-1">
                            <!-- Carousel -->
                            <div id="carousel" class="carousel slide gallery">
                                <div class="carousel-inner">
                                    {{-- zoom" id="{{ $loop->first ? 'ex1' : '' }}" --}}
                                    @foreach ($galleries as $v => $gallery)
                                        <div class="carousel-item this-image {{ $loop->first ? 'active' : '' }}">
                                            <img src="{{ asset('gallary/large' . $gallery['name']) }}" class="img-fluid w-100 "/>
                                        </div>
                                    @endforeach
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-12">
                    <input type="hidden" id="product_combination_id" />
                    <div class="d-flex flex-column">
                        <h1 class="font-weight-bold pro-title mt-3" style="font-size: 25px">
    
                        </h1>
                        <h3 class="font-weight-bold">
                            {{-- <span class="product-card-price"></span> --}}
                            <span class="price product-card-price2"></span>
                        </h3>
                        <p class="description">
    
                        </p>
                        {{-- <div class="share ml-auto">
                            <a><i class=" fa fa-share-alt fa-2x" aria-hidden="true"></i></a>
                        </div> --}}
                    </div>
                    <div class="pro-counter mt-2">
                        <div class="input-group custom_width item-quantity">
    
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
    
                     
                        <button type="button" class="btn  wishlist-icon btn-secondary swipe-to-top mt-2">Add to Wishlist</button>
                        <button type="button" class="btn btn-secondary swipe-to-top add-to-cart mt-2">Add to Cart</button>
    
    
    
                    </div>
                    <div class="pro-options mt-4">
    
                    </div>
                </div>
    
            </div>
            
            <div class="row py-5">
    
            </div>
        </div>
    </section>

</template>
<script>
</script>