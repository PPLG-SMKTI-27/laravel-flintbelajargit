@extends('layouts.authLayout')

@section('title', 'Login - Portfolio')

@section('auth-header')
<h1>Masuk ke Portfolio</h1>
<p>Silakan login untuk mengakses halaman admin</p>
@endsection

@section('content')
<div class="auth-card">
    <!-- Pesan error dari session -->
    @if(session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
    @endif
    
    <!-- Pesan sukses -->
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif
    
    <!-- Validasi errors dari Laravel -->
    @if($errors->any())
        <div class="error-message">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- Atau jika ingin format yang Anda minta -->
    @if(session('errors'))
        <p style="color: red; text-align: center; margin-bottom: 20px; padding: 10px; background: rgba(255, 0, 0, 0.1); border-radius: 5px; border-left: 3px solid red;">
            {{ session('errors')->first() }}
        </p>
    @endif
    
    <form action="{{ route('login.post') }}" method="POST" class="login-form">
        @csrf
        
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="contoh@email.com" value="{{ old('email') }}" required>
            @error('email')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>
            @error('password')
                <span class="field-error">{{ $message }}</span>
            @enderror
        </div>
        
        <button type="submit" class="submit-button">
            <span>Masuk</span>
            <span>🔐</span>
        </button>
    </form>
    
    <div class="login-info">
        <p><strong>Akun untuk testing:</strong></p>
        <p>Email: admin@portfolio.dev</p>
        <p>Password: password123</p>
    </div>
</div>
@endsection

@section('auth-footer')
<p>© {{ date('Y') }} PortfolioDev • 
    <a href="{{ url('/') }}">Kembali ke Beranda</a>
</p>
@endsection

@push('styles')
<style>
    .auth-card {
        background: var(--card-bg);
        border-radius: 15px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.05);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        backdrop-filter: blur(10px);
    }
    
    .error-message {
        background: rgba(255, 71, 87, 0.2);
        border: 1px solid rgba(255, 71, 87, 0.5);
        color: #ff4757;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 500;
    }
    
    .success-message {
        background: rgba(46, 204, 113, 0.2);
        border: 1px solid rgba(46, 204, 113, 0.5);
        color: #2ecc71;
        padding: 15px;
        border-radius: 10px;
        margin-bottom: 20px;
        text-align: center;
        font-weight: 500;
    }
    
    .field-error {
        color: #ff4757;
        font-size: 0.85rem;
        margin-top: 5px;
        display: block;
    }
    
    .login-form {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }
    
    .form-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }
    
    .form-group label {
        color: var(--text-light);
        font-weight: 500;
        font-size: 0.95rem;
    }
    
    .form-group input {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        padding: 15px 20px;
        color: var(--text-light);
        font-size: 1rem;
        transition: all 0.3s ease;
    }
    
    .form-group input:focus {
        outline: none;
        border-color: var(--primary-purple);
        box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
        background: rgba(255, 255, 255, 0.07);
    }
    
    /* Highlight input yang error */
    .form-group input:invalid {
        border-color: #ff4757;
    }
    
    .form-group input::placeholder {
        color: var(--text-gray);
        opacity: 0.7;
    }
    
    .submit-button {
        background: linear-gradient(90deg, var(--primary-purple), var(--accent-purple));
        color: white;
        padding: 18px 40px;
        border-radius: 12px;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 5px 15px var(--glow-color);
        position: relative;
        overflow: hidden;
        z-index: 1;
        font-weight: 600;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
    }
    
    .submit-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 20px var(--glow-color);
    }
    
    .submit-button:active {
        transform: translateY(0);
    }
    
    .submit-button::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, var(--accent-purple), var(--primary-purple));
        z-index: -1;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .submit-button:hover::after {
        opacity: 1;
    }
    
    .login-info {
        margin-top: 30px;
        padding: 20px;
        background: rgba(138, 43, 226, 0.1);
        border-radius: 10px;
        border: 1px solid rgba(138, 43, 226, 0.2);
    }
    
    .login-info p {
        color: var(--text-gray);
        margin-bottom: 5px;
        font-size: 0.9rem;
    }
    
    .login-info strong {
        color: var(--text-light);
    }
    
    /* Animasi untuk pesan error */
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
        20%, 40%, 60%, 80% { transform: translateX(5px); }
    }
    
    .error-shake {
        animation: shake 0.5s ease;
    }
    
    /* Responsif */
    @media (max-width: 576px) {
        .auth-card {
            padding: 30px 20px;
        }
        
        .auth-header h1 {
            font-size: 1.8rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const submitButton = document.querySelector('.submit-button');
        const loginForm = document.querySelector('.login-form');
        const errorMessage = document.querySelector('.error-message');
        
        // Efek hover tombol
        if (submitButton) {
            submitButton.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });
            
            submitButton.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        }
        
        // Animasi saat submit form
        if (loginForm) {
            loginForm.addEventListener('submit', function() {
                submitButton.innerHTML = '<span>Memproses...</span> <span>⏳</span>';
                submitButton.disabled = true;
            });
        }
        
        // Efek shake untuk error message
        if (errorMessage) {
            errorMessage.classList.add('error-shake');
        }
        
        // Auto-hide error message setelah 5 detik
        setTimeout(function() {
            const errorMsg = document.querySelector('.error-message');
            if (errorMsg) {
                errorMsg.style.opacity = '0';
                errorMsg.style.transition = 'opacity 0.5s ease';
                setTimeout(() => errorMsg.remove(), 500);
            }
        }, 5000);
    });
</script>
@endpush