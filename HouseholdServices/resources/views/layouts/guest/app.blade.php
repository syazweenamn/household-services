<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/guest/images/favicon.png') }}">
		<script src="{{ asset('assets/guest/js/head.js') }}"></script>
		<link href="{{ asset('assets/guest/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
		<link href="{{ asset('assets/guest/css/app.min.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/guest/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body class="auth-fluid-pages pb-0">
        <div class="auth-fluid">
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="p-3">
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-brand">
                                <a href="#" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('assets/guest/images/logo-dark.png') }}" alt="" height="80">
                                    </span>
                                </a>
                                <a href="#" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset('assets/guest/images/logo-light.png') }}" alt="" height="80">
                                    </span>
                                </a>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/guest/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/guest/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/guest/js/pages/authentication.init.js') }}"></script>
    </body>
</html>
