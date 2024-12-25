<nav class="navbar navbar-expand-lg ecommerce-navbar" id="navbar">
    <div class="container">
        <a class="navbar-brand d-none d-lg-block" href="#">
            <div class="logo-dark">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="45">
            </div>
            <div class="logo-light">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="45">
            </div>
        </a>
        <button class="btn btn-soft-primary btn-icon d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-20"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0" id="navigation-menu">
                <li class="nav-item d-block d-lg-none">
                    <a class="d-block p-3 h-auto text-center" href="#">
                        <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="45" class="card-logo-dark mx-auto">
                        <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="45" class="card-logo-light mx-auto">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ active_class(['services*']) }}" href="{{ route('servicesCategory') }}" data-key="t-contact">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ active_class(['booking-list']) }}" href="{{ route('bookingList') }}" data-key="t-contact">Booking List</a>
                </li>
            </ul>
        </div>
        <div class="bg-overlay navbar-overlay" data-bs-toggle="collapse"  data-bs-target="#navbarSupportedContent.show"></div>
        <div class="d-flex align-items-center">
            {{-- <div class="topbar-head-dropdown ms-1 header-item">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="offcanvas" data-bs-target="#ecommerceCart" aria-controls="ecommerceCart">
                    <i class="ph-shopping-cart fs-18"></i>
                    <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-danger">4</span>
                </button>
            </div> --}}
            <div class="dropdown topbar-head-dropdown ms-2 header-item dropdown-hover-end">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle text-muted" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-sun align-middle fs-20"></i>
                </button>
                <div class="dropdown-menu p-2 dropdown-menu-end" id="light-dark-mode">
                    <a href="#!" class="dropdown-item" data-mode="light"><i class="bi bi-sun align-middle me-2"></i> Default (light mode)</a>
                    <a href="#!" class="dropdown-item" data-mode="dark"><i class="bi bi-moon align-middle me-2"></i> Dark</a>
                    <a href="#!" class="dropdown-item" data-mode="auto"><i class="bi bi-moon-stars align-middle me-2"></i> Auto (system default)</a>
                </div>
            </div>
            <div class="dropdown header-item dropdown-hover-end">
                <button type="button" class="btn btn-icon btn-topbar btn-ghost-dark rounded-circle" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ph-user-circle" style="font-size: 30px;color: #6d7790;"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <h6 class="dropdown-header" style="font-size: 14px;">Welcome, {{ Auth::user()->name." (".Auth::user()->role->roleName.")" }}</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
