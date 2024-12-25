@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Services</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                    <li class="breadcrumb-item active">Edit Service</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Edit Service</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('services.update', ['service' => $service->id]) }}" method="post">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="servicecategory_id" class="form-label">Service Category</label>
                                <select class="form-select @error('servicecategory') is-invalid @enderror" id="servicecategory_id" name="servicecategory_id" required>
                                    <option selected hidden>Select Service Category</option>
                                    @foreach ($servicecategories as $servicecategory)
                                        <option value="{{ $servicecategory->id }}" @selected(old('servicecategory_id', 
                                        $service->servicecategory->id) == $servicecategory->id)>{{ $servicecategory->servicecategory_name }}</option>
                                    @endforeach
                                </select>
                                @error('servicecategory_id')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="service_name">Service Name</label>
                                <input type="text" class="form-control @error('service_name') is-invalid @enderror" id="service_name" name="service_name" 
                                value="{{ old('service_name', $service->service_name) }}" required>
                                @error('service_name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="service_description">Service Description</label>
                                <input type="text" class="form-control @error('service_description') is-invalid @enderror" id="service_description" name="service_description" 
                                value="{{ old('service_description', $service->service_description) }}" required>
                                @error('service_description')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label" for="price">Price (RM)</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Enter price without RM" 
                                value="{{ old('price', $service->price) }}" required>
                                @error('price')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-sm">Submit</button>
                    <a href="{{ route('services.index') }}" class="btn btn-light w-sm">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
