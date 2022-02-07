@extends('layouts.master')
@section('content')

    <!-- page Content -->
    <section class="page-area pro-content wishlist-content pro-content py-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="heading">
                        <h2>
                            My Account
                        </h2>
                        <hr>
                    </div>

                    @include('includes.side-menu')

                </div>
                <div class="col-12 col-lg-9 ">

                    <div class="col-12">
                        <div class="heading">
                            <h2>
                                {{ trans('lables.change-password') }}
                            </h2>
                            <hr>
                        </div>
                        <div class="tab-content" id="registerTabContent">
                            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                <div class="registration-process">
                                    <form id="changeForm">
                                        <div class="from-group mb-3">
                                            {{-- <div class="col-12"> <label
                                                    for="inlineFormInputGroup">{{ trans('lables.change-password-current-password') }}</label>
                                            </div> --}}
                                            {{-- <div class="input-group col-12">

                                                <input type="password" class="form-control" id="current_password"
                                                    placeholder="{{ trans('lables.change-password-current-password') }}" required>
                                            </div> --}}
                                        </div>
                                        <div class="from-group mb-3">
                                            <div class="col-12"> <label
                                                    for="inlineFormInputGroup">{{ trans('lables.change-password-new-password') }}</label>
                                            </div>
                                            <div class="col-12">
                                                <input type="password" class="form-control" name="new_password"
                                                    id="new_password"
                                                    placeholder="{{ trans('lables.change-password-new-password') }}"
                                                    required>
                                            </div>
                                            
                                        </div>

                                        <div class="from-group mb-3">
                                            <div class="col-12"> <label
                                                    for="inlineFormInputGroup">{{ trans('lables.change-password-confirm-password') }}</label>
                                            </div>
                                            <div class="col-12">

                                                <input type="password" name="confirm_password" class="form-control"
                                                    id="confirm_password"
                                                    placeholder="{{ trans('lables.change-password-confirm-password') }}"
                                                    required>

                                            </div>
                                            
                                        </div>

                                        <div class="col-12 col-sm-12">
                                            <button type="submit"
                                                class="btn btn-secondary">{{ trans('lables.change-password') }}</button>

                                        </div>
                                    </form>
                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="col-12 my-5">
                        <div class="registration-socials">
                            <div class="row align-items-center justify-content-between">

                                <div class="col-12 mb-2">
                                    {{ trans('lables.change-password-access-text') }}
                                </div>
                                <div class="col-12 ">
                                    <button type="button" class="btn btn-google"><i
                                            class="fab fa-google-plus-g"></i>&nbsp;Google</button>
                                    <button type="button" class="btn btn-facebook"><i
                                            class="fab fa-facebook-f"></i>&nbsp;Facebook</button>
                                    <button type="button" class="btn btn-twitter"><i
                                            class="fab fa-twitter"></i>&nbsp;Twitter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
@section('script')
    <script src="{{ asset('frontend/js/jquery-validate.min.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script> --}}
    <script>
        loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
        if (loggedIn != '1') {
            window.location.href = "{{ url('/') }}";
        }

        cartSession = $.trim(localStorage.getItem("cartSession"));
        if (cartSession == null || cartSession == 'null') {
            cartSession = '';
        }
        loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
        customerToken = $.trim(localStorage.getItem("customerToken"));
        customerId = $.trim(localStorage.getItem("customerId"));

        $("#changeForm").validate({
            rules: {
                new_password: "required",
                confirm_password: {
                    // required: true,
                    required: function(element){
                        return  $("#new_password").val() != ''
                    },
                    equalTo: "#new_password"
                }
            },
            messages: {
                new_password: "Enter Password",
                confirm_password: {
                    required: "Password confirmation required",
                    equalTo: "Password Confirmation doesn't match"
                },
            },
            submitHandler: function(form) {
                current_password = $("#changeForm").find("#current_password").val();
                new_password = $("#changeForm").find("#new_password").val();
                $.ajax({
                    type: 'put',
                    url: "{{ url('') }}" +
                        '/api/client/change-client-password/',
                    data: {
                        current_password: current_password,
                        new_password: new_password,
                        type: 'change-password'
                    },
                    headers: {
                        'Authorization': 'Bearer ' + customerToken,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                        clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
                    },
                    beforeSend: function() {},
                    success: function(data) {
                        // console.log(data);
                        toastr.success(data.msg);
                        $("#changeForm")[0].reset();
                        // location.href = "{{ url('/login') }}";
                    },
                    error: function(data) {
                        console.log(data);
                        // if (data.status == 422) {
                        //     jQuery.each(data.responseJSON.errors, function(index, item) {
                        //         $("#" + index).parent().find('.invalid-feedback').css('display',
                        //             'block');
                        //         $("#" + index).parent().find('.invalid-feedback').html(item);
                        //     });
                        // } else {
                        //     toastr.error('{{ trans('response.some_thing_went_wrong') }}');
                        // }
                    },
                });
            }
        });


        // $("#changeForm").submit(function(e) {
        //     e.preventDefault();
        //     current_password = $("#changeForm").find("#current_password").val();
        //     new_password = $("#changeForm").find("#new_password").val();
        //     $("#changeForm").validate({

        //     });
        //     $.ajax({
        //         type: 'put',
        //         url: "{{ url('') }}" +
        //             '/api/client/change-client-password/',
        //         data: {
        //             current_password: current_password,
        //             new_password: new_password,
        //             type: 'change-password'
        //         },
        //         headers: {
        //             'Authorization': 'Bearer ' + customerToken,
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //             clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
        //             clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
        //         },
        //         beforeSend: function() {},
        //         success: function(data) {
        //             console.log(data);
        //             toastr.success(data.msg);
        //         },
        //         error: function(data) {
        //             console.log();
        //             // if (data.status == 422) {
        //             //     jQuery.each(data.responseJSON.errors, function(index, item) {
        //             //         $("#" + index).parent().find('.invalid-feedback').css('display',
        //             //             'block');
        //             //         $("#" + index).parent().find('.invalid-feedback').html(item);
        //             //     });
        //             // } else {
        //             //     toastr.error('{{ trans('response.some_thing_went_wrong') }}');
        //             // }
        //         },
        //     });
        // });
    </script>
@endsection
