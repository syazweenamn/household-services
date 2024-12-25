@extends('layouts.guest.app')

@section('content')
<h4 class="mt-0">Reset Password</h4>
<p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>
@if (session('status'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
        <button type="button"
            class="btn-close btn-close-white"
            data-bs-dismiss="alert"
            aria-label="Close">
        </button>
    {{ session('status') }}
    </div>
@endif
<form action="{{ route('password.email') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required autofocus>
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="text-center d-grid">
        <button class="btn btn-dark waves-effect waves-light" type="submit">Send Password Reset Link</button>
    </div>
</form>
<footer class="footer footer-alt">
    <p class="text-muted">Back to <a href="{{ route('login') }}" class="text-muted"><b>Log in</b></a></p>
</footer>
@endsection
