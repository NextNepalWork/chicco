@extends('layouts.master')
@section('content')
<style>
    .defualtthank{
        color: #1c3583;
    }
</style>
    <!-- About-us Content -->
    <section class="pro-content empty-content">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <div class="pro-empty-page">
                        <h2 style="font-size: 150px;"><i class="far fa-check-circle defualtthank"></i></h2>
                        <h1>{{  trans('lables.thank-you-title') }}</h1>
                        <p>
                            {{ trans('lables.thank-you-message') }} <a href="{{ url('/orders') }}" class="btn-link"><b>{{ 
                                trans('lables.thank-you-order-page') }}</b></a>.
                        </p>
                    </div>
                    </p>
                </div>
            </div>

        </div>


    </section>

@endsection
@section('script')
@endsection
