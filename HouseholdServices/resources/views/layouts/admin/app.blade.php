<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-body-image="none">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
        <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">
        <script src="{{ asset('assets/js/layout.js') }}"></script>
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="layout-wrapper">
            @include('layouts.admin.toptagbar')
            @include('layouts.admin.header')
            @include('layouts.admin.sidebar')
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        @include('flash::message')
                        @yield('content')
                    </div>
                </div>
                @include('layouts.admin.footer')
            </div>
        </div>
        <button onclick="topFunction()" class="btn btn-info btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        {{-- to enable light or dark theme changes --}}
        <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
            <div class="offcanvas-body p-0">
                <div data-simplebar class="h-100">
                    <div class="p-4">
                        <div class="colorscheme-cardradio">
                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="layout-mode-light">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Light</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check card-radio dark customize-widget">
                                        <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-xl w-100 bg-dark" for="layout-mode-dark">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light bg-opacity-10 d-block p-1"></span>
                                                        <span class="bg-light bg-opacity-10 d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Dark</h5>
                                </div>
                            </div>
                        </div>
                        <div id="layout-width">
                            <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Layout Width</h6>
                            <p class="text-muted">Choose Fluid or Boxed layout.</p>
                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget" data-bs-toggle="collapse" data-bs-target="#collapseLayoutWidth.show">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="layout-width-fluid">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Fluid</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayoutWidth">
                                        <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="layout-width-boxed">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Boxed</h5>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseLayoutWidth">
                            <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Boxed Layout Body Images</h6>
                            <p class="text-muted">Choose image.</p>

                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-none" value="none">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-none">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3">
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">None</h5>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-1" value="img-1">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-1">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('../assets/images/sidebar/body-light-1.png');">
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Img 1</h5>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-2" value="img-2">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-2">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('../assets/images/sidebar/body-light-2.png');">
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Img 2</h5>
                                </div><!--end col-->
                                <div class="col-6">
                                    <div class="form-check card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-body-image" id="data-body-image-3" value="img-3">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="data-body-image-3">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 border-start border-end px-3" style="background-image: url('../assets/images/sidebar/body-light-3.png');">
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Img 3</h5>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                        <div id="layout-position">
                            <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Layout Position</h6>
                            <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                            <div class="btn-group radio" role="group">
                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                                <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                                <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                                <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                            </div>
                        </div>
                        <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Topbar Color</h6>
                        <p class="text-muted">Choose Light or Dark Topbar Color.</p>
                        <div class="row gy-3">
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-light">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-dark">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-dark d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Dark</h5>
                            </div>

                            <div class="col-6">
                                <div class="form-check card-radio customize-widget">
                                    <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-brand" value="brand">
                                    <label class="form-check-label p-0 avatar-xl w-100" for="topbar-color-brand">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-primary d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-14 text-center mt-2">Brand</h5>
                            </div>
                        </div>
                        <div id="sidebar-size">
                            <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar Size</h6>
                            <p class="text-muted">Choose a size of Sidebar.</p>

                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-default">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Default</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-compact">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Compact</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-small">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Small (Icon View)</h5>
                                </div>

                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-size-small-hover">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1">
                                                        <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Small Hover View</h5>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar-view">
                            <h6 class="mt-4 mb-1 fs-15 fw-semibold text-uppercase">Sidebar View</h6>
                            <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-view-default">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Default</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget">
                                        <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-view-detached">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                    <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                    <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                                </span>
                                                <span class="d-flex gap-1 h-100 p-1 px-2">
                                                    <span class="flex-shrink-0">
                                                        <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                            <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        </span>
                                                    </span>
                                                </span>
                                                <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Detached</h5>
                                </div>
                            </div>
                        </div>
                        <div id="sidebar-color">
                            <div class="row gy-3">
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-color-light">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Light</h5>
                                </div>
                                <div class="col-6">
                                    <div class="form-check sidebar-setting card-radio customize-widget" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                        <label class="form-check-label p-0 avatar-xl w-100" for="sidebar-color-dark">
                                            <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                                <span class="d-flex align-items-center gap-1 ps-1">
                                                    <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                    <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                                </span>
                                            </span>
                                            <span class="d-flex gap-1 h-100">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-dark d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-light bg-opacity-10"></span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1">
                                                    <span class="d-flex h-100 flex-column">
                                                        <span class="bg-light d-block p-1"></span>
                                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <h5 class="fs-14 text-center mt-2">Dark</h5>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-link avatar-xl w-100 p-0 overflow-hidden border collapsed customize-widget" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                        <span class="customize-penal-main w-100 d-block d-flex align-items-center">
                                            <span class="d-flex align-items-center gap-1 ps-1">
                                                <span class="d-inline-block badge p-0 text-bg-danger rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-success rounded-circle"></span>
                                                <span class="d-inline-block badge p-0 text-bg-warning rounded-circle"></span>
                                            </span>
                                        </span>
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-light bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </button>
                                    <h5 class="fs-14 text-center mt-2">Gradient</h5>
                                </div>
                            </div>
                            <div class="collapse" id="collapseBgGradient">
                                <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                        </label>
                                    </div>
                                    <div class="form-check sidebar-setting card-radio">
                                        <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                        <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                            <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script>$('div.alert').not('.alert-dismissible').delay(5000).fadeOut(350);</script>
    </body>
</html>
