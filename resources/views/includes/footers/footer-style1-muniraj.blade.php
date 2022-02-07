
<section id="footer-wrapper" class="py-4">
    <div class="container">
        <div class="row text-white">
            <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                <h6 class="font-weight-bold">Phone Numbers</h6>
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-12">
                        <ul class="info p-0 ml-0">
                            <li>
                                Artsana customer service
                            </li>
                            <li>
                                Operational assistance for Chicco Shop </li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-md-6 col-12">
                        <ul class="info p-0 ml-0">
                            <li>
                                <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                1800
                                102
                                6702
                            </li>
                            <li>
                                <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                1800
                                102
                                6702
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 col-sm-12 col-12">
                <div
                    class="social-media font-weight-bold d-flex justify-content-end align-items-center mb-xl-2 mb-md-2 mb-2">
                    <label class="mr-3 mb-0 font-weight-bold text-white">
                        Follow us on
                    </label>
                    <ul class="p-0 m-0 d-flex align-items-center">
                        
                        @if (isset(getSetting()['facebook_url']))
                            <li class="mr-2">
                                <a
                                    href="{{ isset(getSetting()['facebook_url']) ? getSetting()['facebook_url'] : '#' }}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                        @endif
                        @if (isset(getSetting()['twitter_url']))
                            <li class="mr-2"><a href="{{ isset(getSetting()['twitter_url']) ? getSetting()['twitter_url'] : '#' }}"
                                     data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-twitter') }}">
                                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                  </a></li>
                        @endif
                        
                        @if (isset(getSetting()['linkedin_url']))
                            <li class="mr-2">
                              <a href="{{ isset(getSetting()['google_url']) ? getSetting()['linkedin_url'] : '#' }}" data-toggle="tooltip" data-placement="bottom"
                              title="{{ trans('lables.footer-linkedin') }}">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                              </a>
                                  </li>
                        @endif
                        @if (isset(getSetting()['instagram_url']))
                            <li class="mr-2">
                                <a
                                    href="{{ isset(getSetting()['instagram_url']) ? getSetting()['instagram_url'] : '#' }}">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <ul class="about bord ml-0 pl-0 pt-3 pb-3 d-flex">
                    <li class="circle-dot"><a href="#">Contacts</a></li>
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
