@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <div class="mb-4">
        <h2 class="fw-bold mb-2" style="color: #1f2937;">Welcome Back 👋</h2>
        <p class="text-muted mb-0">
            Sign in to manage your hotel rooms, bookings, guests, and daily operations.
        </p>
    </div>

    <form method="POST" action="{{ route('login.submit') }}">
        @csrf

        {{-- Email --}}
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input
                type="email"
                name="email"
                id="email"
                class="form-control @error('email') is-invalid @enderror"
                placeholder="Enter your email"
                value="{{ old('email') }}"
                required
                autofocus
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Password --}}
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="position-relative">
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control pe-5 @error('password') is-invalid @enderror"
                    placeholder="Enter your password"
                    required
                >
                <span
                    onclick="togglePassword('password')"
                    style="position:absolute; right:15px; top:50%; transform:translateY(-50%); cursor:pointer; font-size:18px;"
                >
                    👁
                </span>
            </div>
            @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror
        </div>

        {{-- Remember Me + Forgot Password --}}
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember"
                    id="remember"
                    {{ old('remember') ? 'checked' : '' }}
                >
                <label class="form-check-label auth-footer-text" for="remember">
                    Remember me
                </label>
            </div>

            <a href="{{ route('forgot.password') }}" class="auth-link">
                Forgot Password?
            </a>
        </div>

        {{-- Login Button --}}
        <button type="submit" class="btn btn-primary w-100 mb-3">
            Sign In
        </button>

        {{-- Register Link --}}
        <div class="text-center">
            <span class="auth-footer-text">Don’t have an account?</span>
            <a href="{{ route('register') }}" class="auth-link">Create one</a>
        </div>
    </form>

@endsection
