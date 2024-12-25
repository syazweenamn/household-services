@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-content text-center mb-5">
                    <h2 class="title fw-normal text-capitalize"><span class="section-title d-inline-block section-title-primary"><span class="fw-semibold">Booking List</span></h2>
                </div>
            </div>
        </div>
        <div class="row col-xl-12">
            <div class="row">
                <div class="col-lg-12">
                    @include('auth.alert')
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Booking List</h5>
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
                                                @elseif ($booking->service_status == "Service Completed")
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#rateModal">Rate</button>
                                                    <div id="rateModal" class="modal fade" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true" style="display: none;">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="rateModalLabel">Rate Booking</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                                                                </div>
                                                                <form action="{{ route('rateBooking', ['booking' => $booking->id]) }}" method="post">
                                                                    @method('put')
                                                                    @csrf
                                                                    <div class="modal-body">
                                                                        <select class="form-select" id="booking_rating" name="booking_rating" required>
                                                                            <option value="" selected disabled>Choose Rating</option>
                                                                            <option value="1">1 Star</option>
                                                                            <option value="1.5">1.5 Star</option>
                                                                            <option value="2">2 Star</option>
                                                                            <option value="2.5">2.5 Star</option>
                                                                            <option value="3">3 Star</option>
                                                                            <option value="3.5">3.5 Star</option>
                                                                            <option value="4">4 Star</option>
                                                                            <option value="4.5">4.5 Star</option>
                                                                            <option value="5">5 Star</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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
        </div>
    </div>
</section>
@endsection
