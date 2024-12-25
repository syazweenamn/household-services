@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-xxl-12 col-lg-6 order-first">
        <div class="row row-cols-xxl-4 row-cols-1">
            <div class="col">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="vr rounded bg-secondary opacity-50" style="width: 4px;"></div>
                            <div class="flex-grow-1 ms-3">
                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Users</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="{{ $total_users }}">0</span></h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-primary-subtle text-primary rounded fs-3">
                                    <i class="ph-user-circle"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="vr rounded bg-warning opacity-50" style="width: 4px;"></div>
                            <div class="flex-grow-1 ms-3">
                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Services</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="{{ $total_service }}">0</span></h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-secondary-subtle text-secondary rounded fs-3">
                                    <i class="ph-list-checks-fill"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="vr rounded bg-primary opacity-50" style="width: 4px;"></div>
                            <div class="flex-grow-1 ms-3">
                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Workers</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="{{ $total_worker }}">0</span></h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-warning-subtle text-warning rounded fs-3">
                                    <i class="ph-users"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card card-animate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div class="vr rounded bg-info opacity-50" style="width: 4px;"></div>
                            <div class="flex-grow-1 ms-3">
                                <p class="text-uppercase fw-medium text-muted fs-14 text-truncate">Total Bookings</p>
                                <h4 class="fs-22 fw-semibold mb-3"><span class="counter-value" data-target="{{ $total_bookings }}">0</span></h4>
                            </div>
                            <div class="avatar-sm flex-shrink-0">
                                <span class="avatar-title bg-success-subtle text-success rounded fs-3">
                                    <i class="ph-stack"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
