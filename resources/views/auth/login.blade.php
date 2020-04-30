@extends('metronic.layouts.app')
@push('css')
<!--begin::Page Custom Styles(used by this page) -->
<link href="{{asset('metronic/css/pages/login/login-2.css')}}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
<!-- begin:: Page -->
<div class="kt-grid kt-grid--ver kt-grid--root kt-page">
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor"
            style="background-image: url({{asset('metronic/media/bg/bg-1.jpg')}});">
            <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                <div class="kt-login__container">
                    <div class="kt-login__logo">
                        <a href="#">
                            <img src="{{asset('img/logo_n.png')}}" width="30%">
                        </a>
                    </div>
                    <div class="kt-login__signin">
                        <div class="kt-login__head">
                            <h3 class="kt-login__title">Sign In</h3>
                        </div>
                        <form class="kt-form" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                    placeholder="Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="input-group">
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="row kt-login__extra">
                                <div class="col">
                                    <label class="kt-checkbox">
                                        <input type="checkbox" name="remember" /> Remember me
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col kt-align-right">
                                    <a href="javascript:;" id="kt_login_forgot" class="kt-link kt-login__link">Forget
                                        Password ?</a>
                                </div>
                            </div>
                            <div class="kt-login__actions">
                                <button id="kt_login_signin_submit"
                                    class="btn btn-brand btn-elevate kt-login__btn-primary" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="kt-login__account">
                        <span class="kt-login__account-msg">
                            Don't have an account yet ? </span>&nbsp;&nbsp;
                        <a href="{{ route('register') }}" id=""
                            class="kt-link kt-link--light kt-login__account-link">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end:: Page -->
@endsection
@push('scripts')
<script src="{{asset('metronic/js/pages/custom/login/login-general.js')}}" type="text/javascript"></script>

<script>
    "use strict";

// Class Definition
var KTLoginGeneral = function() {

    var login = $('#kt_login');

    var showErrorMsg = function(form, type, msg) {
        var alert = $('<div class="alert alert-' + type + ' alert-dismissible" role="alert">\
			<div class="alert-text">'+msg+'</div>\
			<div class="alert-close">\
                <i class="flaticon2-cross kt-icon-sm" data-dismiss="alert"></i>\
            </div>\
		</div>');

        form.find('.alert').remove();
        alert.prependTo(form);
        //alert.animateClass('fadeIn animated');
        KTUtil.animateClass(alert[0], 'fadeIn animated');
        alert.find('span').html(msg);
    }

    var displaySignInForm = function() {
        login.removeClass('kt-login--forgot');
        login.removeClass('kt-login--signup');

        login.addClass('kt-login--signin');
        KTUtil.animateClass(login.find('.kt-login__signin')[0], 'flipInX animated');
        //login.find('.kt-login__signin').animateClass('flipInX animated');
    }

    var handleSignInFormSubmit = function() {
        $('#kt_login_signin_submit').click(function(e) {
            e.preventDefault();
            var btn = $(this);
            var form = $(this).closest('form');

            form.validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true
                    }
                }
            });

            if (!form.valid()) {
                return;
            }

            btn.addClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', true);

            form.ajaxSubmit({
                url: "{{ route('login') }}",
                success: function(response, status, xhr, $form) {
                    window.location = "{{ route('home') }}";
                },
                error: function(response,status,xhr,$form){
                    var errorMessage = JSON.parse(response.responseText);
                	// similate 2s delay
                	setTimeout(function() {
	                    btn.removeClass('kt-spinner kt-spinner--right kt-spinner--sm kt-spinner--light').attr('disabled', false);
	                    showErrorMsg(form, 'danger', errorMessage.errors.email);
                    }, 1000);
                }
            });
        });
    }

    // Public Functions
    return {
        // public functions
        init: function() {
            handleSignInFormSubmit();
        }
    };
}();

// Class Initialization
jQuery(document).ready(function() {
    KTLoginGeneral.init();
});

</script>
@endpush