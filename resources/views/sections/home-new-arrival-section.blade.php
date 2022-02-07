  <!-- NEW Arrival -->
  {{-- <section class="new-products-content pro-content" >
    <div class="container">
      <div class="products-area">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-6">
            <div class="pro-heading-title">
              <h2> {{ trans('lables.home-new-arrival-title') }}
              </h2>
              <p>{{ trans('lables.home-new-arrival-description') }}</p>
            </div>
          </div>
        </div>
        @include(isset(getSetting()['card_style']) ?
              'includes.cart.product_card_'.getSetting()['card_style'] : "includes.cart.product_card_style1")
        <div class="new-arrival row">                          

        </div>
      </div>
    </div>  
</section>  --}}


<section id="welcome-wrapper" class="bg-light py-5">
  <div class="container">
      <div class="heading text-center">
          <h2 class="font-weight-bold">
              A big welcome from chicco
          </h2>
          <p class="my-5">
              We are by your side - you who look after children every day. You do so with enthusiasm but you have
              concerns and
              questions. We want to take care of you, and those you care about, with exciting new solutions
              designed for every need.
          </p>
      </div>
      <div class="content-wrapper">
          <div class="row">
              <div class="col-12">
                  <div class="slick-w3">
                      <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                          <div class="image mb-3">
                              <img src="{{ asset('frontend/image/welcome/1 (1).png ') }}" class="img-fluid" alt="image-1">
                          </div>
                          <div class="heading m-auto">
                              <a href="#">
                                  <h5 class="font-weight-bold">
                                      Pocket Meal Highchair
                                  </h5>
                              </a>
                              <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                          </div>
                      </div>
                      <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                          <div class="image mb-3">
                              <img src="{{ asset('frontend/image/welcome/1 (2).png ') }}" class="img-fluid" alt="image-1">
                          </div>
                          <div class="heading m-auto">
                              <a href="#">
                                  <h5 class="font-weight-bold">
                                      Pocket Meal Highchair
                                  </h5>
                              </a>
                              <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                          </div>
                      </div>
                      <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                          <div class="image mb-3">
                              <img src="{{ asset('frontend/image/welcome/1 (3).png ') }}" class="img-fluid" alt="image-1">
                          </div>
                          <div class="heading m-auto">
                              <a href="#">
                                  <h5 class="font-weight-bold">
                                      Pocket Meal Highchair
                                  </h5>
                              </a>
                              <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                          </div>
                      </div>
                      <div class="content d-flex flex-column justify-content-center align-items-center mx-3">
                          <div class="image mb-3">
                              <img src="{{ asset('frontend/image/welcome/1 (4).png ') }}" class="img-fluid" alt="image-1">
                          </div>
                          <div class="heading m-auto">
                              <a href="#">
                                  <h5 class="font-weight-bold">
                                      Pocket Meal Highchair
                                  </h5>
                              </a>
                              <h6 class="text-uppercase text-center mb-3">Summer Green</h6>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
</section>