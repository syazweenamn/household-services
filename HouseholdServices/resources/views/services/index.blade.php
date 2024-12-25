@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Services</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('services.index') }}">Services</a></li>
                    <li class="breadcrumb-item active">Services List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 d-inline">Services List</h5>
                <a href="{{ route('services.create') }}" class="btn btn-success float-end">New Service</a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Category</th>
                            <th>Service Name</th>
                            <th>Service Description</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $service->servicecategory->servicecategory_name }}</td>
                            <td>{{ $service->service_name }}</td>
                            <td>{{ $service->service_description }}</td>
                            <td>{{ $service->price }}</td>
                            <td>
                                <a href="{{ route('services.edit', ['service' => $service->id]) }}" class="btn btn-warning" title="Edit"><i class="mdi mdi-pencil"></i></a>
                                <form action="{{ route('services.destroy', ['service' => $service->id]) }}" method="post" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this service?')" title="Delete">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </form>
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
