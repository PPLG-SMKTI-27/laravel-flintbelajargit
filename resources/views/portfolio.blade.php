@extends('layouts.mainLayout')

@section('title', 'Portfolio - Beranda')

@section('background-effects')
<!-- Efek latar belakang -->
<div class="bg-effect">
    <div class="bg-purple-circle"></div>
    <div class="bg-purple-circle-2"></div>
</div>
@endsection

@section('header')
<!-- Header dengan navigasi -->
<header>
    <a href="{{ url('/') }}" class="logo">PortfolioDev</a>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Beranda</a></li>
            <li><a href="{{ url('/about') }}">Tentang</a></li>
            <li><a href="{{ url('/about') }}#skills">Keahlian</a></li>
            <li><a href="{{ url('/contact') }}">Kontak</a></li>
            <li><a href="{{ url('/projects') }}">Proyek</a></li>
            
            <!-- Authentication Links dengan Breeze -->
            @auth
                <li class="nav-item">
                    <a href="#" class="user-name">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">
                            Dashboard
                        </a>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item" style="background: none; border: none; width: 100%; text-align: left; cursor: pointer;">
                                Logout
                            </button>
                        </form>
                    </div>
                </li>
            @else
                <li><a href="{{ route('login') }}" style="color: var(--light-purple);">🔐 Login</a></li>
                <li><a href="{{ route('register') }}" style="color: var(--light-purple);">📝 Register</a></li>
            @endauth
        </ul>
    </nav>
</header>
@endsection

@section('content')
<!-- Pesan sukses login -->
@if(session('status'))
    <div class="login-success-message">
        <div class="success-content">
            <span style="margin-right: 10px;">✅</span>
            {{ session('status') }}
            <button class="close-success" onclick="this.parentElement.parentElement.style.display='none'">×</button>
        </div>
    </div>
@endif

<!-- Profil section -->
<section class="profile-section">
    <div class="profile-content">
        <p class="profile-greeting">Halo, {{ $user }}</p>
        <h1 class="profile-name">Flint'S</h1>
        <h2 class="profile-title">{{ $title }}</h2>
        <p class="profile-description">
            {{ $description }}
        </p>
        <a href="{{ url('/projects') }}" class="cta-button">Lihat Proyek Saya</a>
    </div>
    
    <div class="profile-image-container">
        <div class="profile-image">
            <img src="{{ asset('images/me.jpg') }}" alt="Foto Profil">
            <div class="purple-glow"></div>
        </div>
    </div>
</section>

<style>
/* CSS untuk profile section */
.profile-section {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 80px 0;
    min-height: calc(100vh - 100px);
}

.profile-content {
    flex: 1;
    max-width: 600px;
}

.profile-greeting {
    font-size: 1.2rem;
    color: var(--primary-purple);
    margin-bottom: 10px;
    font-weight: 500;
}

.profile-name {
    font-size: 3.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    line-height: 1.2;
    background: linear-gradient(90deg, var(--text-light), var(--light-purple));
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
}

.profile-title {
    font-size: 1.8rem;
    color: var(--text-gray);
    margin-bottom: 25px;
    font-weight: 500;
}

.profile-description {
    font-size: 1.1rem;
    color: var(--text-gray);
    margin-bottom: 40px;
    max-width: 500px;
}

.cta-button {
    display: inline-block;
    background: linear-gradient(90deg, var(--primary-purple), var(--accent-purple));
    color: white;
    padding: 15px 35px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1.1rem;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px var(--glow-color);
}

.cta-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px var(--glow-color);
}

.profile-image-container {
    flex: 1;
    display: flex;
    justify-content: flex-end;
    position: relative;
}

.profile-image {
    width: 400px;
    height: 400px;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
    box-shadow: 0 0 60px var(--glow-color), inset 0 0 30px rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(138, 43, 226, 0.3);
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

.profile-image::before {
    content: '';
    position: absolute;
    top: -10px;
    left: -10px;
    right: -10px;
    bottom: -10px;
    background: linear-gradient(45deg, var(--primary-purple), var(--light-purple), var(--primary-purple));
    border-radius: 50%;
    z-index: -1;
    opacity: 0.4;
    filter: blur(20px);
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.purple-glow {
    position: absolute;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    box-shadow: inset 0 0 50px rgba(138, 43, 226, 0.2);
    z-index: 2;
    pointer-events: none;
}

.login-success-message {
    background: linear-gradient(90deg, rgba(46, 204, 113, 0.2), rgba(46, 204, 113, 0.1));
    border: 1px solid rgba(46, 204, 113, 0.3);
    color: #2ecc71;
    padding: 15px 25px;
    border-radius: 10px;
    margin: 20px auto;
    text-align: center;
    font-weight: 500;
    max-width: 600px;
    animation: fadeIn 0.5s ease;
    backdrop-filter: blur(10px);
    box-shadow: 0 5px 15px rgba(46, 204, 113, 0.1);
    position: relative;
}

.success-content {
    display: flex;
    align-items: center;
    justify-content: center;
}

.close-success {
    background: none;
    border: none;
    color: #2ecc71;
    font-size: 1.5rem;
    cursor: pointer;
    margin-left: 15px;
    padding: 0 5px;
    line-height: 1;
}

.close-success:hover {
    color: #27ae60;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsif */
@media (max-width: 992px) {
    .profile-section {
        flex-direction: column-reverse;
        text-align: center;
        padding: 50px 0;
    }
    
    .profile-content {
        max-width: 100%;
        margin-top: 50px;
    }
    
    .profile-name {
        font-size: 2.8rem;
    }
    
    .profile-image {
        width: 300px;
        height: 300px;
    }
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        gap: 20px;
    }
    
    nav ul {
        gap: 15px;
    }
    
    .profile-name {
        font-size: 2.2rem;
    }
    
    .profile-title {
        font-size: 1.4rem;
    }
    
    .profile-image {
        width: 250px;
        height: 250px;
    }
}

@media (max-width: 576px) {
    nav ul {
        flex-wrap: wrap;
        justify-content: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctaButton = document.querySelector('.cta-button');
    
    if (ctaButton) {
        ctaButton.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        ctaButton.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    }
});
</script>
@endsection