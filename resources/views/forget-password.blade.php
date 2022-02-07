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
                        {{-- <div class="error_msg text-danger"></div> --}}
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <span class="error_msg">Your password has been reset</span>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="form" action="{{ route('customer.sendresetlink') }}" method="GET">

                            {{-- @csrf --}}
                            <div class="row">
                                <div class="from-group mb-3 col-12">
                                    <label for="inlineFormInputGroup">{{ trans('lables.login-email') }}</label>
                                    <div class="input-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Enter your email address">
                                    </div>
                                    <div class="require email text-danger"></div>

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
            $(".alert-warning").css('display', 'none');
        });

        // $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // });
        function submitForm(e) {
            e.preventDefault();
            $('.require').css('display', 'none');
            let url = $("#form").attr("action");
            var data = $("#form").serialize();
            // var data = $("#form").serialize() + "&_token=" + '{{ csrf_token() }}';
            // var data = new FormData($("#form")[0]);
            // data.append('_token', '{{ csrf_token() }}');
            $.ajax({
                url: url,
                type: 'GET',
                // data: data + "&_token=" + $('meta[name="csrf-token"]').attr('content'),
                data: data,
                success: function(data) {
                    console.log(data);
                    if (data.error_msg) {
                        $(".alert-warning").css('display', 'block');
                        $(".error_msg").html(data.error_msg);
                    } else if (data.errors) {
                        var error_html = "";
                        $.each(data.errors, function(key, value) {
                            error_html = '<div>' + value + '</div>';
                            $('.' + key).css('display', 'block').html(error_html);
                        });
                    } else if (!data.errors && !data.error_msg) {
                        $(".alert-warning").css('display', 'block');
                        $(".error_msg").html(data.msg);
                        $("input[name='email']").val("");
                    }

                }
            });
        }
    </script>
@endsection
