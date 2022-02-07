<section id="product-listing">
    <!-- Navigation Section Ends -->
    <!-- Breadcrumb Section Starts -->
    <section id="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="m-0 p-0 d-flex align-items-center">
                        <li class="font-weight-bold">Home</li><span class="mx-2"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                        <li class="">Product Listing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        
    </div>
</section>
<!-- Things We Believe Section Ends -->
<!-- Filter Section Starts -->
<section id="filter-section" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-4 mb-2">
                <a class="mb-2 rotate-icon" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <span class="icon mr-2 ">
                        <i class="rotate fa fa-plus" aria-hidden="true"></i> </span> Filter
                </a>

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-8">
                <div class="sort d-flex justify-content-end align-items-center">
                    <form class="w-100"> 
                        <label for="sorting" class="m-0">Sort by:</label>
                        <select class="custom-select w-50 mb-0 ml-3 sortBy">
                            <option value="">choose</option>
                            <option disabled><b>Price</b></option>
                            <option value="low-high" data-sort-by="price" data-sort-type="asc">Low To High</option>
                            <option value="high-to" data-sort-by="price" data-sort-type="desc">High To Low</option>
                            <option disabled><b>Name</b></option>
                            <option value="A-Z" data-sort-by="title" data-sort-type="asc">A-Z</option>
                            <option value="Z-A" data-sort-by="title" data-sort-type="desc">Z-A</option>
                        </select>
                    </form>
                </div>

            </div>
            
            <form class="w-100">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-4">
                    <div class="collapse" id="collapse1">
                        {{-- <div class="card card-body border-0 px-0">
                            <select class="custom-select">
                                <option value="">choose</option>
                                <option disabled><b>Price</b></option>
                                <option value="low-high" data-sort-by="price" data-sort-type="asc">Low To High</option>
                                <option value="high-to" data-sort-by="price" data-sort-type="desc">High To Low</option>
                                <option disabled><b>Name</b></option>
                                <option value="A-Z" data-sort-by="title" data-sort-type="asc">A-Z</option>
                                <option value="Z-A" data-sort-by="title" data-sort-type="desc">Z-A</option>
                            </select>
                        </div> --}}
                        <div class="top-bar">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="row align-items-center">
                                        <div class="col-12 d-flex flex-wrap">
                                            
                                            {{-- <form class="form-inline justify-content-center"> --}}
                                                <div class="form-group col-xl-2 col-lg-4 col-md-6 col-6 ">
                                                    <label>{{ trans('lables.shop-category') }}</label>
                                                    <div class="select-control">
                                                        <select class="form-control category-filter" name="category">
                                                            <option value="">choose</option>
                                                            @foreach ($data['category'] as $category)
                                                                @if (isset($_GET['category']) && $_GET['category'] == $category->id)
                                                                    <option selected value="{{ $category->id }}">
                                                                        {{ $category->detail[0]->category_name }}</option>
                                                                @else
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->detail[0]->category_name }}</option>
                                                                @endif
                
                                                            @endforeach
                                                        </select>
                                                    </div>
                
                                                </div>
                
                
                                                <div class="form-group col-xl-2 col-lg-4 col-md-6 col-6 ">
                                                    <label>{{ trans('lables.shop-price') }}</label>
                                                    <div class="select-control">
                                                        <select class="form-control price-filter" name="price">
                                                            <option value="">choose</option>
                                                            @foreach ($data['price_range'] as $price_range)
                                                                @if (isset($_GET['price']) && $_GET['price'] == $price_range)
                                                                    <option selected value="{{ $price_range }}">{{ $price_range }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $price_range }}">{{ $price_range }}</option>
                                                                @endif
                
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                
                
                                                @foreach ($data['attribute'] as $key => $attribute)
                                                    <div class="form-group col-xl-2 col-lg-4 col-md-6 col-6 ">
                                                        <label>{{ $attribute->attribute_detail[0]->name }}</label>
                                                        <input type="hidden" name="attribute[]" value="{{ $attribute->id }}" />
                                                        <div class="select-control">
                                                            <select class="form-control variaion-filter" name="variation[]"
                                                                data-attribute-id="{{ $attribute->id }}"
                                                                data-attribute-name="{{ $attribute->attribute_detail[0]->name }}">
                                                                <option value="">choose</option>
                                                                @foreach ($attribute->variation as $variation)
                                                                    @if (isset($_GET['variation_id']) && in_array($variation->variation_detail[0]->variation_id, explode(',', $_GET['variation_id'])))
                                                                        <option selected
                                                                            value="{{ $variation->variation_detail[0]->variation_id }}"
                                                                            data-variation-name={{ $variation->variation_detail[0]->name }}>
                                                                            {{ $variation->variation_detail[0]->name }}</option>
                                                                    @else
                                                                        <option
                                                                            value="{{ $variation->variation_detail[0]->variation_id }}"
                                                                            data-variation-name={{ $variation->variation_detail[0]->name }}>
                                                                            {{ $variation->variation_detail[0]->name }}</option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                @endforeach
                
                
                                                {{-- <div class="form-group ">
                                                    <button class="btn-secondary" type="button" id="filter">filter</button>
                                                </div> --}}
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="collapse text-center" id="collapse1">
                        <a href="#" id="filter" class="btn-blue px-5 py-3 text-white font-weight-bold">Apply Now</a>
                    </div>
                </div>
            </form>

        </div>

    </div>
</section>
<!-- Filter Section Ends -->
<!-- Product List Starts -->
<section id="product-list" class="bg-light py-5">
    <div class="container">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 title mb-2">
                    <h6>
                        Products
                    </h6>
                </div>
                @include(isset(getSetting()['card_style']) ?
                    'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
                

            </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center loader-small">
            <img src="{{ asset('loader/loader.gif') }}" alt="asdf">
            
        </div>
        <div class="pagination justify-content-between ">


        </div>
    </div>
</section>
<!-- Product List Ends -->



