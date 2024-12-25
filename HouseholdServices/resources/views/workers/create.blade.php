@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Workers</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('workers.index') }}">Workers</a></li>
                    <li class="breadcrumb-item active">New Worker</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">New Worker</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('workers.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="worker_name" class="form-label">Worker Name</label>
                                <input type="text" class="form-control @error('worker_name') is-invalid @enderror" id="worker_name" name="worker_name" value="{{ old('worker_name') }}" required>
                                @error('worker_name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-sm">Submit</button>
                    <a href="{{ route('workers.index') }}" class="btn btn-light w-sm">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
