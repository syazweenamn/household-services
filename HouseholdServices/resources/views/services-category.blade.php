@extends('layouts.auth.app')

@section('content')
    <section class="section">
        <div class="container-fluid container-custom">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-content text-center mb-5">
                        <h2 class="title fw-normal text-capitalize"><span class="section-title d-inline-block section-title-primary"><span class="fw-semibold">Services Category</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($servicecategories as $servicecategory)
                            <div class="col-lg-4">
                                <div class="category-widgets-main card border-0 shadow-none bg-light">
                                    <div class="effect">
                                        <img src="{{ asset('assets/images/categories/'.strtolower(trim($servicecategory->servicecategory_name, " Services")).'.jpg') }}" alt="" class="img-fluid">
                                        <!-- <img src="{{ asset('assets/images/pink.jpg') }}" alt="pink" class="img-fluid"> -->

                                        <div class="widgets-wrapper position-absolute text-center">
                                            <a href="{{ route('serviceList', ['servicecategory' => $servicecategory->id]) }}" class="btn btn-dark w-md rounded-0 stretched-link">
                                                {{ $servicecategory->servicecategory_name }}</a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
