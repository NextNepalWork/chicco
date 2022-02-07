<?php
$pages = App\Models\Admin\Page::whereHas('page_detail')
    ->with([
        'page_detail' => function ($q) {
           return $q->latest()->first();
        },
    ])->get();
    
?>
<div id="busybox" class="fog_div">
    <div></div>
</div>
<section id="footer-wrapper" class="py-4">
    <div class="container">
        <div class="row text-white">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <h6 class="font-weight-bold">Phone Numbers</h6>
                <div class="row">
                    <div class="col-6">
                        <ul class="info p-0 ml-0">
                            <li>
                                Chicco Customer Care
                            </li>
                            <li>
                                Sales Inquiry </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="info p-0 ml-0">
                            <li>
                                <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <a class="text-white" href="tel:{{ getSetting()['phone_number'] ?? '+977-1-4168810' }}">
                                    {{ getSetting()['phone_number'] ?? '+977-1-4168810' }}
                                </a>
                            </li>
                            <li>
                                <span class="mr-2"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                <a class="text-white" href="tel:{{ getSetting()['phone_number'] ?? '+977-1-4168810' }}">
                                    +977-1-4168810
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="social-media font-weight-bold d-flex justify-content-end align-items-center mb-xl-2 mb-lg-2 mb-2">
                    <label class="mr-3 mb-0 font-weight-bold text-white">
                        Follow us on
                    </label>
                    <ul class="pl-0 m-0 d-flex align-items-center">
                        {{-- <li class="mr-2">
                            <a href="{{ getSetting()['google_url'] ?? '#' }}">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="{{ getSetting()['facebook_url'] ?? '#' }}">
                                <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="mr-2">
                            <a href="{{ getSetting()['instagram_url'] ?? '#' }}">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li> --}}
                        @if (isset(getSetting()['facebook_url']))
                            <li class="mr-2">
                                <a target="_blank"
                                    href="{{ isset(getSetting()['facebook_url']) ? getSetting()['facebook_url'] : '#' }}" title="{{ trans('lables.footer-facebook') }}">
                                    <i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                        @endif
                        @if (isset(getSetting()['twitter_url']))
                            <li class="mr-2"><a target="_blank" href="{{ isset(getSetting()['twitter_url']) ? getSetting()['twitter_url'] : '#' }}"
                                     data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-twitter') }}">
                                  <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                  </a></li>
                        @endif
                        
                        {{-- @if (isset(getSetting()['linkedin_url']))
                            <li class="mr-2">
                              <a target="_blank" href="{{ isset(getSetting()['google_url']) ? getSetting()['linkedin_url'] : '#' }}" data-toggle="tooltip" data-placement="bottom"
                              title="{{ trans('lables.footer-linkedin') }}">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                              </a>
                                  </li>
                        @endif --}}
                        @if (isset(getSetting()['instagram_url']))
                            <li class="mr-2">
                                <a target="_blank"
                                    href="{{ isset(getSetting()['instagram_url']) ? getSetting()['instagram_url'] : '#' }}" title="{{ trans('lables.footer-instagram') }}">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-12">
                <ul class="about bord ml-0 pl-0 pt-3 pb-3 d-flex flex-wrap">
                    <li class="circle-dot"><a href="/contact-us">Contacts</a></li>
                    <li class="circle-dot"><a href="#">Catalogs</a></li>
                    <li class="circle-dot"><a href="{{ url('/about-us') }}">Who we are</a></li>
                    @foreach ($pages as $key => $page)
                        @if ($key < 4)
                        <li class="circle-dot"><a href="{{ url('page/'.$page->slug) }}">{{ $page->lastDetail()->title }}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-xl-12 col-lg-12 col-12">
                <ul class="about p-0 d-flex m-0">
                    @foreach ($pages as $key => $page)
                        @if ($key >= 4)
                            <li class="circle-dot"><a href="{{ url('page/'.$page->slug) }}">{{ $page->lastDetail()->title }}</a></li>
                        @endif
                    @endforeach
                    {{-- <li class="circle-dot"><a href="#">Product safety warnings</a></li>
                    <li class="circle-dot"><a href="#">Declaration of conformity</a></li> --}}
                </ul>
            </div>
        </div>
    </div>
</section>
<section id="copyright-wrapper" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" style="font-size: 14px;color: white;">
                © 2022 Chicco All Rights Reserved.
                {{-- <ul class="copyright m-0 p-0 d-flex">
                    <li class="circle-dot"><a href="#">PRIVACY DISCLAIMER</a></li>
                    <li class="circle-dot"><a href="#">LEGAL NOTICES</a></li>
                    <li class="circle-dot"><a href="#">COOKIES</a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</section>

{{-- <section class="pro-content header-section">
    <!-- //footer style One -->
    <footer id="footerOne" class="footer-area footer-content footer-one d-lg-block d-xl-block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
  
                    <figure>
                        <a href="{{ url('/') }}" class="logo" data-toggle="tooltip"
                            data-placement="bottom"
                            title="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                            <img class="img-fluid"
                                src="{{ isset(getSetting()['site_logo']) ? getSetting()['site_logo'] : asset('01-logo.png') }}"
                                alt="{{ isset(getSetting()['site_name']) ? getSetting()['site_name'] : 'Logo' }}">
                        </a>
                    </figure>
                    <ul class="mail">
                        <li><a href="mailto:{{ isset(getSetting()['email']) ? getSetting()['email'] : '#' }}"
                                data-toggle="tooltip" data-placement="bottom"
                                title="{{ isset(getSetting()['email']) ? getSetting()['email'] : '#' }}">
                                <i
                                    class="fas fa-envelope"></i>{{ isset(getSetting()['email']) ? getSetting()['email'] : '#' }}</a>
                        </li>
                    </ul>
                    <p>{{ isset(getSetting()['about_us']) ? getSetting()['about_us'] : 'N/A' }}</p>
  
                    <ul class="socials">
  
                        @if (isset(getSetting()['facebook_url']))
                            <li><a href="{{ isset(getSetting()['facebook_url']) ? getSetting()['facebook_url'] : '#' }}"
                                    class="fab fb fa-facebook-square" data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-facebook') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['twitter_url']))
                            <li><a href="{{ isset(getSetting()['twitter_url']) ? getSetting()['twitter_url'] : '#' }}"
                                    class="fab tw fa-twitter-square" data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-twitter') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['google_url']))
                            <li><a href="{{ isset(getSetting()['google_url']) ? getSetting()['google_url'] : '#' }}"
                                    class="fab sk fa-google" data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-google') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['linkedin_url']))
                            <li><a href="{{ isset(getSetting()['google_url']) ? getSetting()['linkedin_url'] : '#' }}"
                                    class="fab In fa-linkedin" data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-linkedin') }}"></a></li>
                        @endif
                        @if (isset(getSetting()['instagram_url']))
                            <li><a href="{{ isset(getSetting()['instagram_url']) ? getSetting()['instagram_url'] : '#' }}"
                                    class="fab ig fa-instagram" data-toggle="tooltip" data-placement="bottom"
                                    title="{{ trans('lables.footer-instagram') }}"></a></li>
                        @endif
  
                    </ul>
                </div>
                <div class="col-12 col-lg-2">
                    <div class="single-footer">
                        <h5>
                            {{ trans('lables.footer-quick-links') }}
                        </h5>
                    </div>
                    <div class="single-footer single-footer-left">
  
                        <ul class="links-list pl-0">
                            <li> <a href="{{ url('/') }}" data-toggle="tooltip" data-placement="left"
                                    title="{{ trans('lables.footer-home') }}">{{ trans('lables.footer-home') }}</a>
                            </li>
                            <li> <a href="{{ url('/shop') }}" data-toggle="tooltip" data-placement="left"
                                    title="{{ trans('lables.footer-shop') }}">{{ trans('lables.footer-shop') }}</a>
                            </li>
                            <li> <a href="{{ url('/cart') }}" data-toggle="tooltip" data-placement="left"
                                    title="{{ trans('lables.footer-shopping-cart') }}">{{ trans('lables.footer-shopping-cart') }}</a>
                            </li>
                            <li> <a href="{{ url('/wishlist') }}" data-toggle="tooltip" data-placement="left"
                                    title="{{ trans('lables.header-wishlist') }}">{{ trans('lables.header-wishlist') }}</a>
                            </li>
                            <li> <a href="{{ url('/compare') }}" data-toggle="tooltip" data-placement="left"
                                    title="{{ trans('lables.header-compare') }}">{{ trans('lables.header-compare') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-2">
                    <div class="single-footer">
                        <h5>
                            {{ trans('lables.footer-personalization') }}
                        </h5>
                    </div>
  
                    <ul class="links-list pl-0">
                        @foreach ($data['pages'] as $page)
                            @if (isset($page->page_detail))
                                <li> <a href="{{ url('/page') . '/' . $page->slug }}" data-toggle="tooltip"
                                        data-placement="left"
                                        title="{{ $page->page_detail[0]->title }}">{{ $page->page_detail[0]->title }}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-footer">
                        <h5>
                            {{ trans('lables.footer-instagram-feed') }}
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="instagram-content">
                                {{ isset(getSetting()['instagram_embed']) ? getSetting()['instagram_embed'] : '' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="copyright-content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="footer-info">
                                ©&nbsp;{{ trans('lables.footer-company') }}
                            </div>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </section> --}}
