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
<section class="profile-section">
    <!-- Konten profil... -->
</section>
@endsection