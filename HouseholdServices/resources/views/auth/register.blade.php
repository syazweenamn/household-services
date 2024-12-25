@extends('layouts.guest.app')

@section('content')
<h4 class="mt-0">Sign Up</h4>
<p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute</p>
<form action="{{ route('register') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your name" required autofocus>
        @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="phone_no" class="form-label">Phone Number</label>
        <input type="number" class="form-control @error('phone_no') is-invalid @enderror" id="phone_no" name="phone_no" value="{{ old('phone_no') }}" placeholder="Enter your phone number" required>
        @error('phone_no')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control @error('address') is-invalid @enderror" id="address" name="address" rows="2" placeholder="Enter email address" required>{{ old('address') }}</textarea>
        @error('address')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Enter your password" required>
            <div class="input-group-text" data-password="false">
                <span class="password-eye"></span>
            </div>
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="mb-3">
        <label for="password-confirm" class="form-label">Confirm Password</label>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-confirm" name="password_confirmation" placeholder="Confirm your password" required>
            <div class="input-group-text" data-password="false">
                <span class="password-eye"></span>
            </div>
            @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>
    </div>
    <div class="text-center d-grid">
        <button class="btn btn-dark waves-effect waves-light" type="submit">Sign Up</button>
    </div>
</form>
<footer class="footer footer-alt">
    <p class="text-muted">Already have account? <a href="{{ route('login') }}" class="text-muted"><b>Log In</b></a></p>
</footer>
@endsection
