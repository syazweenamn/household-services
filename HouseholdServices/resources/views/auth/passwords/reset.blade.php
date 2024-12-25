@extends('layouts.guest.app')

@section('content')
<h4 class="mt-0">Reset Password</h4>
<p class="text-muted mb-4">Enter the following details to reset your password.</p>
<form action="{{ route('password.update') }}" method="post">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $email ?? old('email') }}" required autofocus>
        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
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
        <button class="btn btn-dark waves-effect waves-light" type="submit">Reset Password</button>
    </div>
</form>
<footer class="footer footer-alt">
    <p class="text-muted">Back to <a href="{{ route('login') }}" class="text-muted"><b>Log in</b></a></p>
</footer>
@endsection
