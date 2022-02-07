@extends('layouts.master')
@section('content')
    <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">{{ trans('lables.bread-crumb-home') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                </ol>
            </div>
        </nav>
    </div>

    <!-- login Content -->
    <section class="page-area pro-content">
        <div class="container">


            <div class="row">

                <div class="col-12 col-sm-12 col-md-6">

                    <div class="heading">
                        <h2>
                            Reset Password
                        </h2>
                        <hr>
                    </div>
                    <div class="col-12 registration-process">
                        <div class="error_msg text-danger"></div>
                        <form id="form" action="{{ route('customer.postPasswordResetForm') }}" method="GET">
                            {{-- @csrf --}}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="row">
                                <div class="from-group mb-3 col-12">
                                    <label for="inlineFormInputGroup">{{ trans('lables.login-email') }}</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" value="{{ $email }}"
                                            placeholder="Enter your email address" readonly>
                                    </div>
                                    <div class="require email text-danger"></div>

                                </div>
                                <div class="from-group mb-3 col-12">
                                    <label for="inlineFormInputGroup">Password</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="password">
                                    </div>
                                    <div class="require password text-danger"></div>

                                </div>
                                <div class="from-group mb-3 col-12">
                                    <label for="inlineFormInputGroup">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="password_confirmation">
                                    </div>
                                    <div class="require password_confirmation text-danger"></div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 ">
                                    <button type="button" onclick="submitForm(event);"
                                        class="btn btn-secondary swipe-to-top">Reset Password</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-sm-12 my-5">

                </div>
            </div>

        </div>
    </section>



@endsection
@section('script')
    <script>
        $(function() {
            $(".error_msg").css('display', 'none');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function submitForm(e) {
            e.preventDefault();
            $('.require').css('display', 'none');
            let url = $("#form").attr("action");
            $.ajax({
                url: url,
                type: 'post',
                data: $("#form").serialize(),

                success: function(data) {
                    if (data.error_msg) {
                        $(".error_msg").css('display', 'block');
                        $(".error_msg").html(data.error_msg);
                    } else if (data.errors) {
                        var error_html = "";
                        $.each(data.errors, function(key, value) {
                            error_html = '<div>' + value + '</div>';
                            $('.' + key).css('display', 'block').html(error_html);
                        });
                    } else if (!data.errors && !data.error_msg) {
                        $(".error_msg").css('display', 'block');
                        $(".error_msg").html(data.msg);
                        location.href = data.redirectRoute;
                    }

                }
            });
        }
    </script>
@endsection
