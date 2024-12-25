@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Workers</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('workers.index') }}">Workers</a></li>
                    <li class="breadcrumb-item active">Workers List</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0 d-inline">Workers List</h5>
                <a href="{{ route('workers.create') }}" class="btn btn-success float-end">New Worker</a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Worker Name</th>
                            <th>Worker Rating</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($workers as $worker)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $worker->worker_name }}</td>
                            <td>{{ starRating($worker->worker_rating)." (".$worker->worker_rating.")" }}</td>
                            {{-- <td>
                                <i class="ri-star-half-line text-warning align-bottom"></i>
                                <i class="ri-star-half-line text-warning align-bottom"></i>
                                <i class="ri-star-half-line text-warning align-bottom"></i>
                                <i class="ri-star-half-line text-warning align-bottom"></i>
                                <i class="ri-star-half-line text-warning align-bottom"></i>
                            </td> --}}
                            <td>
                                <a href="{{ route('workers.edit', ['worker' => $worker->id]) }}" class="btn btn-warning" title="Edit"><i class="mdi mdi-pencil"></i></a>
                                <form action="{{ route('workers.destroy', ['worker' => $worker->id]) }}" method="post" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger" onclick="return confirm('Are you sure to delete this worker?')" title="Delete">
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
