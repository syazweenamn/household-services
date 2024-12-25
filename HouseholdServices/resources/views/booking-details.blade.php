@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-content text-center mb-5">
                    <h2 class="title fw-normal text-capitalize"><span class="section-title d-inline-block section-title-primary"><span class="fw-semibold">Booking Details</span></h2>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                        <div class="avatar-sm">
                            <div class="avatar-title rounded-circle bg-light text-primary fs-20">
                                <i class="bi bi-list-ul"></i>
                            </div>
                        </div>
                    </div>
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-1">Booking Details</h5>
                        <p class="text-muted mb-0">Please make sure all the details are correct before you proceed to pay</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="phone_no">Phone Number</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no" value="{{ Auth::user()->phone_no }}" readonly>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{ Auth::user()->address }}" readonly>
                        </div>
                    </div>
                </div>
                <form action="{{ route('placeBooking') }}" method="post">
                    @csrf
                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
                    <input type="hidden" class="form-control" id="service_id" name="service_id" value="{{ $service->id }}" readonly>
                    <input type="hidden" class="form-control" id="worker_id" name="worker_id" value="{{ $worker->id }}" readonly>
                    <input type="hidden" class="form-control" id="date" name="date" value="{{ $date }}" readonly>
                    <input type="hidden" class="form-control" id="price" name="price" value="{{ $service->price }}" readonly>
                    <div class="col-lg-12">
                        {{-- <div class="card-body p-4"> --}}
                            <div class="table-responsive mt-3">
                                <table class="table table-borderless text-center table-nowrap align-middle mb-0">
                                    <thead>
                                        <tr class="table-active">
                                            <th scope="col" style="width: 50px;">#</th>
                                            <th scope="col">Service Category</th>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Worker Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col" class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody id="products-list">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>{{ $servicecategory->servicecategory_name }}</td>
                                            <td>
                                                <span class="fw-medium">{{ $service->service_name }}</span>
                                                <p class="text-muted mb-0">{{ $service->service_description }}</p>
                                            </td>
                                            <td>{{ $worker->worker_name }}</td>
                                            <td>{{ $date }}</td>
                                            <td class="text-end">{{ "RM".$service->price }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="border-top border-top-dashed mt-2">
                                <table class="table table-borderless table-nowrap align-middle mb-0 ms-auto" style="width:250px">
                                    <tbody>
                                        <tr class="border-top border-top-dashed fs-15">
                                            <th scope="row">Total Price</th>
                                            <th class="text-end">{{ "RM".$service->price }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label for="choices-payment-type" class="form-label text-muted text-uppercase fw-semibold">Payment Details</label>
                                        <select class="form-select" id="payment_method" name="payment_method" required>
                                            <option value="" selected disabled>Payment Method</option>
                                            <option value="Credit/Debit Card">Credit/Debit Card</option>
                                            <option value="E-Wallet">E-Wallet</option>
                                            <option value="Cash">Cash</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        {{-- </div> --}}
                    </div>
                    <button type="submit" class="btn btn-success w-sm mt-3">Place Booking & Pay</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
