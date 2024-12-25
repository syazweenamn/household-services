@extends('layouts.auth.app')

@section('content')
<section class="section">
    <div class="container-fluid container-custom">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-content text-center mb-5">
                    <h2 class="title fw-normal text-capitalize"><span class="section-title d-inline-block section-title-primary">
                        <span class="fw-semibold">{{ $servicecategory->servicecategory_name }}</span></h2>
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
                                <h5 class="card-title mb-0">Service List</h5>
                            </div>
                            <div class="card-body">
                                {{-- <form action=""> --}}
                                    @if (!$services->isEmpty())
                                        <div class="row gallery-wrapper">
                                            {{-- disabled temporary --}}
                                            {{-- <div class="element-item col-sm-4 seller hot arrival">
                                                <div class="card overflow-hidden">
                                                    <div class="bg-danger-subtle rounded-top py-4">
                                                        <div class="gallery-product">
                                                            <img src="{{ asset('assets/images/services/cleaning-services.png') }}" alt="" style="max-height: 180px;max-width: 100%;" class="mx-auto d-block">
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="form-check">
                                                            <input class="form-check-input border-primary" type="checkbox" id="formCheck6" name>
                                                            <label class="form-check-label" for="formCheck6">
                                                                <h6 class="fs-15 lh-base">Man Relaxed Fit T-shirt</h6>
                                                            </label>
                                                        </div>
                                                        <p class="text-muted mt-2">cleaning house bla bla bla</p>
                                                        <h5 class="mb-0">$199.00</h5>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            @foreach ($services as $service)
                                                <div class="element-item col-sm-4 seller hot arrival">
                                                    <div class="card overflow-hidden">
                                                        <div class="bg-primary-subtle rounded-top py-4">
                                                            <div class="gallery-product">
                                                                <img src="{{ asset('assets/images/services/'.strtolower(trim($servicecategory->servicecategory_name," Services")).'-services.png') }}" alt="" 
                                                                style="max-height: 180px;max-width: 100%;" class="mx-auto d-block">
                                                            </div>
                                                            <div class="product-btn px-3">
                                                                <a href="{{ route('workerList', ['servicecategory' => $servicecategory->id, 'service' => $service->id]) }}" 
                                                                class="btn btn-primary btn-sm w-75 add-btn">Select</a>
                                                            </div>
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="fs-15 lh-base">{{ $service->service_name }}</h6>
                                                            <p class="text-muted mt-2">{{ $service->service_description }}</p>
                                                            <h5 class="mb-0">{{ "RM".$service->price }}</h5>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <div class="row text-center">
                                            <h6>Service list is empty</h6>
                                        </div>
                                    @endif
                                    {{-- <button type="submit" class="btn btn-success w-sm">Choose Worker</button> --}}
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
