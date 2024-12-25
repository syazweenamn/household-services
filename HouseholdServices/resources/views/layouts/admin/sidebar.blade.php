<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="32">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="38">
            </span>
        </a>
        <a href="#" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="32">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="38">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link menu-link {{ active_class(['dashboard']) }}"> <i class="bi bi-speedometer2"></i> <span data-key="t-dashboard">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('services.index') }}" class="nav-link menu-link {{ active_class(['services*']) }}"> <i class="bi bi-grid"></i> <span data-key="t-dashboard">Services</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('workers.index') }}" class="nav-link menu-link {{ active_class(['workers*']) }}"> <i class="bi bi-people"></i> <span data-key="t-dashboard">Workers</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('booking.index') }}" class="nav-link menu-link {{ active_class(['booking*']) }}"> <i class="bi bi-list-task"></i> <span data-key="t-dashboard">Bookings</span></a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">
                        <i class="bi bi-cart4"></i> <span data-key="t-orders">Orders</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarOrders">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="orders-list-view.html" class="nav-link" data-key="t-list-view">List View</a>
                            </li>
                            <li class="nav-item">
                                <a href="orders-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                            </li>
                        </ul>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>
