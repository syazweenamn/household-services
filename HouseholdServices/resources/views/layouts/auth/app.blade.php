<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}"> <!--DOMAIN ICON / FAVICON -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="{{ asset('assets/libs/nouislider/nouislider.min.css') }}">
        <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('assets/js/layout.js') }}"></script>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        @include('layouts.auth.toptagbar')
        @include('layouts.auth.navbar')
        @if (Auth::user()->role->roleName == "Admin")
            <a href="../backend/index.html" class="btn btn-warning position-fixed bottom-0 start-0 m-5 z-3 btn-hover d-none d-lg-block"><i class="bi bi-database align-middle me-1"></i> Backend</a>
        @endif
        <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        @include('layouts.auth.slider')
        @yield('content')
        {{-- <div class="modal fade" id="subscribeModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content border-0">
                    <div class="modal-body p-0 bg-info-subtle rounded">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <div class="p-4 h-100">
                                    <span class="badge bg-info-subtle text-info  fs-13">GET 10% SALE OFF</span>
                                    <h2 class="display-6 mt-2 mb-3">Subscribe & Get <b>50% Special</b> Discount On Email</h2>
                                    <p class="mb-4 pb-lg-2 fs-16">Join our newsletter to receive the latest updates and promotion</p>
                                    <form action="#!">
                                        <div class="position-relative ecommerce-subscript">
                                            <input type="email" class="form-control rounded-pill border-0" placeholder="Enter your email">
                                            <button type="submit" class="btn btn-info btn-hover rounded-pill">Subscript</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-4 pb-0">
                                    <img src="../assets/images/subscribe.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- @include('layouts.auth.mycart') --}}
        @include('layouts.auth.footer')
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script>
        <script src="{{ asset('assets/libs/nouislider/nouislider.min.js') }}"></script>
        <script src="{{ asset('assets/libs/wnumb/wNumb.min.js') }}"></script>
        <script src="{{ asset('assets/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/pages/coming-soon.init.js') }}"></script>
        <script src="{{ asset('assets/js/frontend/landing-index.init.js') }}"></script>
        <script src="{{ asset('assets/js/frontend/menu.init.js') }}"></script>
        <script src="{{ asset('assets/js/pages/modal.init.js') }}"></script>
        <script src="{{ asset('assets/libs/rater-js/index.js') }}"></script>
        <script src="{{ asset('assets/js/pages/rating.init.js') }}"></script>
        <script>$('div.alert').not('.alert-dismissible').delay(5000).fadeOut(350);</script>
    </body>
</html>
