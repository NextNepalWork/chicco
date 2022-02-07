@extends('layouts.master')
@section('content')

@if(isset($page->page_detail))

<style>
    .page-title{	
        background-repeat: no-repeat;
        background-size: cover;
        padding: 25px 0;
        color: white;
    }
</style>
<br />

<br />
<div class="container">
    <section id="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="m-0 p-0 d-flex align-items-center">
                        <li class="font-weight-bold">Home
                            </li><span class="mx-2"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></span>
                        <li class="">{{ $page->page_detail[0]->title }}</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </section>
</div>
<div class="page-title" style="background-image: url({{ asset('frontend/image/welcome/product_listing_banner.jpg') }});">
    <div class="container">
        <h2>{{ $page->page_detail[0]->title }}</h2>
    </div>
</div>
<div class="" style="margin-top:10px">
    <div class="container">
        {!! $page->page_detail[0]->description !!}
    </div>
</div>

@else
<h2>comming soon</h2>
@endif

@endsection
@section('script')
@endsection
