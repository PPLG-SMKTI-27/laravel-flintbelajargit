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
            <li><a href="#skills">Keahlian</a></li>
            <li><a href="{{ url('/contact') }}">Kontak</a></li>
            <li><a href="{{ url('/projects') }}">Proyek</a></li>
        </ul>
    </nav>
</header>
@endsection

@section('content')
<!-- Profil section -->
<div class="container">
    <!-- Profil section -->
    <section class="profile-section">
            <div class="profile-content">
                <p class="profile-greeting">Halo, {{ $user }}</p>
                <h1 class="profile-name">Nama Developer</h1>
                <h2 class="profile-title">Full Stack Web Developer</h2>
                <p class="profile-description">
                    Saya seorang developer dengan spesialisasi dalam Laravel, PHP, dan teknologi web modern. 
                    Saya membuat aplikasi web yang responsif, cepat, dan efisien dengan fokus pada pengalaman pengguna yang optimal.
                </p>
                <a href="{{ url('/projects') }}" class="cta-button">Lihat Proyek Saya</a>
            </div>
            
            <div class="profile-image-container">
                <div class="profile-image">
                    <!-- Ganti dengan foto profil Anda -->
                    <img src="images/me.jpg" alt="Foto Profil">
                    <div class="purple-glow"></div>
                </div>
            </div>
        </section>
</div>

    <script>
        // Tambahkan efek interaktif pada tombol
        document.addEventListener('DOMContentLoaded', function() {
            const ctaButton = document.querySelector('.cta-button');
            
            ctaButton.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });
            
            ctaButton.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    </script>
</section>
@endsection