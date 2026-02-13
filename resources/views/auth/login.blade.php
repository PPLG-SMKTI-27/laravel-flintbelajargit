@extends('layouts.authLayout')

@section('title', 'Login - Portfolio')

@section('auth-header')
<h1>Masuk ke Portfolio</h1>
<p>Silakan login untuk mengakses fitur eksklusif</p>
@endsection

@section('content')
<div class="auth-card">
    <!-- Session Status -->
    @if (session('status'))
        <div class="success-message">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" 
                   placeholder="contoh@email.com">
            @error('email')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" 
                   placeholder="Masukkan password">
            @error('password')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check">
            <label for="remember_me">
                <input id="remember_me" type="checkbox" name="remember">
                <span>Ingat saya</span>
            </label>
        </div>

        <div class="form-actions">
            <button type="submit" class="submit-button">
                <span>Masuk</span>
                <span>🔐</span>
            </button>
            
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="forgot-password">
                    Lupa password?
                </a>
            @endif
        </div>
    </form>
    
    <div class="login-info">
        <p><strong>Akun demo:</strong></p>
        <p>Email: test@example.com</p>
        <p>Password: password</p>
    </div>
</div>
@endsection