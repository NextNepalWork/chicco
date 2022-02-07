@extends('layouts.master')
@section('content')
    <section id="research-center-wrapper">
        <!-- Breadcrumb Section Starts -->
        <section id="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="m-0 p-0 d-flex align-items-center">
                            <li class="font-weight-bold">Home</li><span class="mx-2"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></span>
                            <li class="">Research center</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section Ends -->
        <!-- Banner Section Starts -->
        <section id="banner-wrapper" class="py-3">
            <div class="image">
                <img src="{{ asset('frontend/image/who-we-are/img17.jpg') }}" class="img-fluid">
            </div>
        </section>
        <!-- Banner Section Ends -->
        <!--Research Center Section Starts -->
        <section id="research-center-custom2" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-10 m-auto">
                        <div class="content-wrapper ">
                            <div class="head text-center">
                                <h1 class="font-weight-bold">Chicco Research Centre</h1>
                                <h6>Where experts and parents meet</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row py-5">
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="content">
                            <p>
                                The Chicco Research Centre is located in Italy but has an international outlook. It focuses on the needs of children and encourages the direct involvement of parents. It also draws on the expertise of medical professionals and academics.
                            </p>
                            <!--<p>-->
                            <!--    We at Chicco try to make this fantastic adventure a little smoother by-->
                            <!--    listening to-->
                            <!--    the-->
                            <!--    needs of parents and-->
                            <!--    parents-to-be. However, we want to go further and promote the idea of-->
                            <!--    parenting, a-->
                            <!--    concept-->
                            <!--    that-->
                            <!--    embraces the wider-->
                            <!--    support system of people who take care of children in different ways.-->
                            <!--    Wherever there-->
                            <!--    is-->
                            <!--    someone-->
                            <!--    caring for a child, we-->
                            <!--    are by their side.-->
                            <!--</p>-->

                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12">
                        <div class="content">
                            <p>
                                The contribution of external partners enables us to widen our knowledge of all facets of parenting, anything in fact that concerns the care of children and the well-being of the parents. Our constant dialogue with parents gives us a better understanding of the needs of parents and children. We are then better placed to offer innovative solutions and help them in everyday life through advice and constant support.
                            </p>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Research Center Section Ends -->
        <!-- Filter Section Starts -->
        <!--<section id="filter" class="py-2 bg-light">-->
        <!--    <div class="container">-->
        <!--        <div class="row py-2">-->
        <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-12 m-auto">-->
        <!--                <a class="mb-2 rotate-icon" data-toggle="collapse" href="#collapse1" role="button"-->
        <!--                    aria-expanded="false" aria-controls="collapseExample">-->
        <!--                    <span class="icon mr-2 ">-->
        <!--                        <i class="rotate fa fa-plus" aria-hidden="true"></i> </span> Filter-->
        <!--                </a>-->

        <!--            </div>-->
        <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-12 m-auto">-->
        <!--                <div class="collapse" id="collapse1">-->
        <!--                    <div class="card card-body border-0 px-0 bg-light">-->
        <!--                        <select class="custom-select" id="ages">-->
        <!--                            <option selected>All ages</option>-->
        <!--                            <option value="1">0-6 months</option>-->
        <!--                            <option value="2">6-12 months</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-12 m-auto">-->
        <!--                <div class="collapse" id="collapse1">-->
        <!--                    <div class="card card-body border-0 px-0 bg-light">-->
        <!--                        <select class="custom-select" id="ages">-->
        <!--                            <option selected>All ages</option>-->
        <!--                            <option value="1">0-6 months</option>-->
        <!--                            <option value="2">6-12 months</option>-->
        <!--                        </select>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="col-xl-3 col-lg-3 col-md-6 col-12 m-auto">-->
        <!--                <div class="collapse text-center" id="collapse1">-->
        <!--                    <a href="#" class="btn-blue px-5 py-2 text-white font-weight-bold">Apply Now</a>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!-- Filter Section Ends -->

        <!-- Cards Section Starts -->
        <section id="cards" class="py-5">
            <div class="container">
                <div class="row" id="blogs">
</div>
            </div>
        </section>
        
        <!-- Cards Section Ends -->
    </section>


@endsection
@section('script')
<script>
$(document).ready(function(){
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
            if (data.status == 'Success') {
                var blogs = '';
                $.each(data.data, function(i, e) {
            console.log(e.category);
                    if(typeof e.category !== "undefined" && typeof e.category !== "" && e.category.blog_category_slug=="Research"){
                    blogs += '<div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-md-2 mb-3">' +
                        '<div class="card">' +
                            '<div class="card-head">' +
                                '<img class="card-img-top" src="{{ asset('gallary/') }}/' + e.gallary.gallary_name + '" alt="Card image cap">' +
                                '<h5 class="card-title text-white font-weight-bold text-center w-100" style="background: #42596e;">' + e.detail[0].name + '</h5>' +
                            '</div>' +
                            '<div class="card-body">' +
                                '<p class="card-text">' + e.detail[0].description.replace(/<[^>]*>?/gm, '').substring(0, 150) + '...</p>' +
                                '<a href="/blog-detail/' + e.slug + '" class="text-uppercase font-weight-bold">Find out more</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>';
                        // 
                    }
                    // if(i == 2){
                    //     return false;
                    // }
                });
                $('#blogs').html(blogs);
            }
        },
        error: function(data) {},
    });
})
</script>
@endsection
