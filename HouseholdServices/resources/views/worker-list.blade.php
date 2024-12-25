@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-content text-center mb-5">
                    <h2 class="title fw-normal text-capitalize"><span class="section-title d-inline-block section-title-primary"><span class="fw-semibold">
                        {{ $servicecategory->servicecategory_name }}</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5">
                <div class="category-widgets-main card card-height-100 border-0 shadow-none bg-light btn-6">
                    <div class="effect h-100">
                        <img src="{{ asset('assets/images/categories/'.trim($servicecategory->servicecategory_name," Services").'.jpg') }}" alt="" class="img-fluid h-100 object-fit-cover">
                        <div class="widgets-wrapper position-absolute text-center">
                            <a href="{{ route('serviceList', ['servicecategory' => $servicecategory->id]) }}" class="btn btn-dark w-md rounded-0 stretched-link">{{ $servicecategory->servicecategory_name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <section class="section pt-0">
                    <div class="container">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">Selected Service</h5>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="element-item col-sm-4 seller hot arrival" data-category="hot arrival">
                                        <div class="card overflow-hidden">
                                            <div class="bg-primary-subtle rounded-top py-4">
                                                <div class="gallery-product">
                                                    <img src="{{ asset('assets/images/services/'.strtolower(trim($servicecategory->servicecategory_name," Services")).'-services.png') }}" alt=""
                                                     style="max-height: 180px;max-width: 100%;" class="mx-auto d-block">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <h6 class="fs-15 lh-base text-truncate mb-0">{{ $service->service_name }}</h6>
                                                <p class="text-muted mt-2">{{ $service->service_description }}</p>
                                                <h5 class="mb-0">{{ "RM".$service->price }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0 d-inline">Worker List</h5>
                            </div>
                            <div class="card-header">
                                <form class="pt-2" action="{{ route('workerList', ['servicecategory' => $servicecategory->id, 'service' => $service->id]) }}" method="get">
                                    @csrf
                                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{ request()->get('date') ?? $date }}" 
                                    title="Filter Worker List by date available" onchange="this.form.submit();" min="{{ date('Y-m-d', strtotime('+1 day')) }}">
                                    @error('date')<small class="text-danger">{{ $message }}</small>@enderror
                                </form>
                            </div>
                            <div class="card-body">
                                @if (!App\Models\Worker::exists())
                                    <div class="row text-center">
                                        <h6>Worker list is empty</h6>
                                    </div>
                                @else
                                    @if (!$workers->isEmpty())
                                        <div class="row" id="product-grid">
                                            @foreach ($workers as $worker)
                                                <div class="col-xxl-3 col-lg-4 col-md-6">
                                                    <div class="card ecommerce-product-widgets border-0 rounded-0 shadow-none overflow-hidden">
                                                        <div class="bg-warning bg-opacity-50 rounded py-4 position-relative">
                                                            <img src="{{ asset('assets/images/workers.png') }}" alt="" style="max-height: 180px;max-width: 100%;" class="mx-auto d-block rounded-2">
                                                        </div>
                                                        <div class="pt-4">
                                                            <div>
                                                                <a href="#!"><h6 class="text-capitalize fs-15 lh-base text-truncate mb-0">{{ $worker->worker_name }}</h6></a>
                                                                <div class="mt-2">
                                                                    <p class="text-muted">
                                                                        {{ starRating($worker->worker_rating)." (".$worker->worker_rating.")" }}
                                                                    </p>
                                                                </div>
                                                                <div class="tn mt-3">
                                                                    <a href="{{ route('bookingDetails', ['servicecategory' => $servicecategory->id, 'service' => $service->id, 
                                                                        'worker' => $worker->id, 'date' => $date]) }}" 
                                                                    class="btn btn-primary btn-hover w-100 add-btn">Select</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="row text-center">
                                            <h6>No available workers on the selected date</h6>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
