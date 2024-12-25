@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Bookings</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Bookings</a></li>
                    <li class="breadcrumb-item active">Bookings List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 d-inline">Bookings List</h5>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Category</th>
                            <th>Service Name</th>
                            <th>Worker Name</th>
                            <th>Date</th>
                            <th>Price</th>
                            <th>Payment Method</th>
                            <th>Booking Status</th>
                            <th>Service Status</th>
                            <th>Rating</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $booking->service->servicecategory->servicecategory_name }}</td>
                                <td>
                                    <span class="fw-medium">{{ $booking->service->service_name }}</span>
                                    <p class="text-muted mb-0">{{ $booking->service->service_description }}</p>
                                </td>
                                <td>{{ $booking->worker->worker_name }}</td>
                                <td>{{ $booking->date }}</td>
                                <td>{{ "RM".$booking->price }}</td>
                                <td>{{ $booking->payment_method }}</td>
                                <td><span class="badge bg-primary-subtle text-primary badge-border fs-13">{{ $booking->booking_status }}</span></td>
                                <td>
                                    @if ($booking->service_status == 'In Progress')
                                        <span class="badge bg-warning-subtle text-warning badge-border fs-13">{{ $booking->service_status }}</span>
                                    @elseif ($booking->service_status == 'Service Completed')
                                        <span class="badge bg-success-subtle text-success badge-border fs-13">{{ $booking->service_status }}</span>
                                    @elseif ($booking->service_status == 'Rated')
                                        <span class="badge bg-primary-subtle text-primary badge-border fs-13">{{ $booking->service_status }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if (!is_null($booking->booking_rating) && $booking->service_status == "Rated")
                                        {{ starRating($booking->booking_rating)." (".$booking->booking_rating.")" }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
