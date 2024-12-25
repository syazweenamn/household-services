@extends('layouts.guest.app')

@section('content')
<h4 class="mt-0">Sign In</h4>
<p class="text-muted mb-4">Enter your email address and password to access account.</p>
@include('auth.alert') 
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email" required autofocus>
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <a href="{{ route('password.request') }}" class="text-muted float-end"><small>Forgot your password?</small></a>
        <label for="password" class="form-label">Password</label>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required>
            <div class="input-group-text" data-password="false">
                <span class="password-eye"></span>
            </div>
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="text-center d-grid">
        <button class="btn btn-dark" type="submit">Log In</button>
    </div>
</form>
<footer class="footer footer-alt">
    <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-muted"><b>Sign Up</b></a></p>
</footer>
@endsection
