@extends('layouts.master')
@section('content')
    <section id="who-we-are">
        <!-- Breadcrumb Section Starts -->
        <section id="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="m-0 p-0 d-flex align-items-center">
                            <li class="font-weight-bold">Home</li><span class="mx-2"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></span>
                            <li class="">Who we are</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section Ends -->
        <!-- Things We Believe Section Starts -->
        <section id="we-believe">
            <div class="container">
                <div class="row">
                    <div class="col-10 m-auto">
                        <div class="content-wrapper text-center">
                            <div class="head">
                                <h1 class="font-weight-bold">Things we believe</h1>
                            </div>
                            <div class="content">
                                <p>
                                    Like all good things in this world, being a parent requires a lot of effort and
                                    sometimes it
                                    feels like a very bumpy
                                    road.
                                </p>
                                <p>
                                    We at Chicco try to make this fantastic adventure a little smoother by listening to
                                    the
                                    needs of parents and
                                    parents-to-be. However, we want to go further and promote the idea of parenting, a
                                    concept
                                    that
                                    embraces the wider
                                    support system of people who take care of children in different ways. Wherever there
                                    is
                                    someone
                                    caring for a child, we
                                    are by their side.
                                </p>
                                <p class="text-uppercase">
                                    #PARENTMORE
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Things We Believe Section Ends -->
        <!-- Slick Slider Starts -->
        <section id="slider">
            <div class="slider1 bg-light py-5">
                <div class="container">
                    <div class="slick-w4">
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50 mb-xl-0 mb-md-3 mb-3">
                                <img src="{{ asset('frontend/image/who-we-are/img1.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">Who we are</h3>
                                </div>
                                <p>We are now present in more than 120 countries and for over 60 years we have been discovering and listening to the stories of generations of new parents, something we will never give up doing.  With the same passion as ever we are proud to continue to design innovative products that meet the new needs of parents but it doesn’t stop there.  Nowadays we don’t just speak only to mums and dads but to all those who take care of children.  After all, aren't we all parents in some way now?</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50 mb-xl-0 mb-md-3 mb-3">
                                <img src="{{ asset('frontend/image/who-we-are/img2.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">60 Years between understanding and innovation</h3>
                                </div>
                                <p>We capitalize on a long-term expertise in parents’ and children’s needs, providing products that embed innovation in every market segment, also thank's to the Chicco Research Center. Every step of our story highlights something that reshaped its related category.</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50 mb-xl-0 mb-md-3 mb-3">
                                <img src="{{ asset('frontend/image/who-we-are/img3.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">Our History</h3>
                                </div>
                                <p>Young entrepreneur Pietro Catelli became a father in 1958. His baby son Enrico was affectionately nick-named Chicco. Pietro soon found out what it meant to be a parent and that’s when he had the visionary idea to create a brand specialising in all areas of parenting. This would cater for the needs of children from birth to 36 months and, above all, make life easier for their parents.</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="slider2 py-5">
                <div class="container">
                    <div class="slick-w4">
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50">
                                <img src="{{ asset('frontend/image/who-we-are/img6.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">Innovation</h3>
                                </div>
                                
                                <p>Our sights are always turned to the future. We keep focused not only on the needs of parents today but also what their needs will be tomorrow. We are always listening and understanding that parental needs can evolve to suit day to day life. Taking this on board, we then develop technologically advanced solutions to make their lives as easy as possible. We can never take their place, but we are by their side, every day.</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50">
                                <img src="{{ asset('frontend/image/who-we-are/img7.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">Sustainability</h3>
                                </div>
                                <p>Our ongoing commitment is to act responsibly with respect for people and the environment, since taking care of children also means taking care of the world in which they will grow up.</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50">
                                <img src="{{ asset('frontend/image/who-we-are/img4.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">Parenting</h3>
                                </div>
                                <p>There is no word for this in Italian, but it sums up the philosophy of Chicco. It means taking care of those you love, the way parents do. It’s a value shared by grandparents, aunts and uncles, care givers and babysitters. Furthermore, it extends to anyone who takes care of children.</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>
                        <div class="items d-flex align-items-center">
                            <div class="image mr-4 w-50">
                                <img src="{{ asset('frontend/image/who-we-are/img5.jpg') }}" class="img-fluid">
                            </div>
                            <div class="content w-50">
                                <div class="head ">
                                    <h3 class="font-weight-bold">Expertise</h3>
                                </div>
                                <p>We have more than 60 years’ experience of every aspect of parental life and, as always, we continue to seek out new solutions. Our basic principles remain the same: a clear focus on quality and compliance with the highest safety standards.</p>
                                <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row bg-light py-5">
                <div class="container">
                    <div class="items d-flex align-items-center py-3">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 content order-md-1 order-2">
                            <div class="head">
                                <h3 class="font-weight-bold">Sustainability for us</h3>
                            </div>
                            <p>Caring is in our DNA is: care for you, for your children, and for the people you care about.<br>This is why we are committed every day to safeguarding childhood and the future of those here now and those who soon will be.</p>
                            
                            <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 image  order-md-2 order-1 mb-2 mr-4">
                            <img src="{{ asset('frontend/image/who-we-are/7') }}.jpg" class="img-fluid">
                        </div>

                    </div>
                    <div class="items d-flex align-items-center py-3">

                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 image order-md-1 order-1 mb-2 mr-4">
                            <img src="{{ asset('frontend/image/who-we-are/8') }}.jpg" class="img-fluid">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-12 content order-md-2 order-2">
                            <div class="head">
                                <h3 class="font-weight-bold">Quality</h3>
                            </div>
                            <p>Competence, commitment and passion guide us every day in pursuing ambitious quality objectives; this can be seen in everything we do, from listening carefully to our customers, to the study and development of concrete solutions, to the synergy of our processes: a team made up of people who care about people.</p>
                            <!--<a href="#" class="text-uppercase font-weight-bold">Find out more</a>-->
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- Slick Slider Ends -->
        <!-- Newsletter Section Starts -->
        <section id="newsletter" class="bg-light py-5 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-12 text-center">
                        <div class="bg-img d-flex align-items-center justify-content-center">
                            <h2 class="font-weight-bold m-0">Contacts</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 mt-xl-2 mt-md-3 mt-4">
                        <div class="number d-flex flex-column justify-content-center h-100">
                            <h4 class="font-weight-bold">Phone Numbers</h4>
                            <div class="row num-1">
                                <div class="col-xl-8 col-lg-8 col-6 col-12 d-flex align-items-center">
                                    <span class="mr-3">
                                        <i class="fa fa-phone" aria-hidden="true"></i></span>
                                    <label for="icon" class="m-0">Chicco
                                        Customer Care</label>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-6 col-12 d-flex align-items-center justify-content-end">
                                    <a class="font-weight-bold m-0" href="tel:{{ getSetting()['phone_number'] ?? '1800 102 6702' }}">{{ getSetting()['phone_number'] ?? '1800 102 6702' }}</a>
                                    <!--<p class="font-weight-bold m-0">{{ getSetting()['phone_number'] ?? '1800 102 6702' }}</p>-->
                                </div>
                            </div>
                            <!--<div class="row num-2">-->
                            <!--    <div class="col-xl-8 col-lg-8 col-6 col-12 d-flex align-items-center">-->
                            <!--        <span class="mr-3">-->
                            <!--            <i class="fa fa-phone" aria-hidden="true"></i></span>-->
                            <!--        <label for="icon" class="m-0">Artsana-->
                            <!--            Customer Service</label>-->
                            <!--    </div>-->
                            <!--    <div class="col-xl-4 col-lg-4 col-6 col-12 d-flex align-items-center justify-content-end">-->
                            <!--        <p class="font-weight-bold m-0">1800-102-6702</p>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-12 text-center mt-xl-2 mt-md-3 mt-4">
                        <div class="email d-flex justify-content-center align-items-center h-100">
                            <a href="{{ url('contact-us') }}" class="font-weight-bold">Send an email</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section Ends -->
        <!-- Cards Section Starts -->
        <section id="cards" class="py-5">
            <div class="container">
                <div class="row" id="blogs">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-md-2 mb-3">
                        <div class="card">
                            <div class="card-head">
                                <img class="card-img-top" src="{{ asset('frontend/image/who-we-are/9') }}.jpg"
                                    alt="Card image cap">
                                <h5 class="card-title text-white font-weight-bold text-center w-100">Social
                                    responsability</h5>
                            </div>
                            <div class="card-body">

                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="text-uppercase font-weight-bold">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-md-2 mb-3">
                        <div class="card">
                            <div class="card-head">
                                <img class="card-img-top" src="{{ asset('frontend/image/who-we-are/1') }}0.jpg"
                                    alt="Card image cap">
                                <h5 class="card-title text-white font-weight-bold text-center w-100">Artsana Group</h5>
                            </div>
                            <div class="card-body">

                                <p class="card-text">We meet current needs, by hearing and heeding your comments, and
                                    we
                                    try to anticipate future needs at our Chicco
                                    Research Center, where we consult various professionals, organizations and
                                    associations. We rely on the best - to give
                                    you the best.</p>
                                <a href="#" class="text-uppercase font-weight-bold">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-md-2 mb-3">
                        <div class="card">
                            <div class="card-head">
                                <img class="card-img-top" src="{{ asset('frontend/image/who-we-are/1') }}1.jpg"
                                    alt="Card image cap">
                                <h5 class="card-title text-white font-weight-bold text-center w-100">Chicco Research
                                    Center</h5>
                            </div>
                            <div class="card-body">

                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the
                                    bulk of
                                    the
                                    card's
                                    content.</p>
                                <a href="#" class="text-uppercase font-weight-bold">Find out more</a>
                            </div>
                        </div>
                    </div>
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
            console.log(data);
            if (data.status == 'Success') {
                var blogs = '';
                $.each(data.data, function(i, e) {
                    if(typeof e.category !== "undefined" && typeof e.category !== "" && e.category.blog_category_slug=="About"){
                    blogs += '<div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-xl-2 mb-md-2 mb-3">' +
                        '<div class="card">' +
                            '<div class="card-head">' +
                                '<img class="card-img-top" src="{{ asset('gallary/') }}/' + e.gallary.gallary_name + '" alt="Card image cap">' +
                                '<h5 class="card-title text-white font-weight-bold text-center w-100">' + e.detail[0].name + '</h5>' +
                            '</div>' +
                            '<div class="card-body">' +
                                '<p class="card-text">' + e.detail[0].description.replace(/<[^>]*>?/gm, '').substring(0, 150) + '...</p>' +
                                '<a href="/blog-detail/' + e.slug + '" class="text-uppercase font-weight-bold">Find out more</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>';

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
