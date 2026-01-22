@extends('layouts.projectLayout')

@section('title', 'Proyek Saya')

@section('content')
    <!-- Judul halaman -->
    <section class="page-header">
        <h1 class="page-title">Proyek Saya</h1>
        <p class="page-subtitle">Berikut adalah beberapa proyek yang telah saya kerjakan, mencakup pengembangan web, aplikasi, dan solusi digital lainnya.</p>
        
        <a href="{{ url('/') }}" class="back-button">
            <span>← Kembali ke Beranda</span>
        </a>
    </section>
    
    <!-- Grid proyek -->
    <section class="projects-grid">
        @foreach($projects as $project)
        <div class="project-card">
            <div class="project-image">
                <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}">
            </div>
            <div class="project-content">
                <span class="project-category">{{ $project['category'] }}</span>
                <h3 class="project-title">{{ $project['title'] }}</h3>
                <p class="project-description">
                    {{ $project['description'] }}
                </p>
                <div class="project-tech">
                    @foreach($project['technologies'] as $tech)
                    <span class="tech-tag">{{ $tech }}</span>
                    @endforeach
                </div>
                <!-- TOMBOL TIDAK DITAMPILKAN SESUAI PERMINTAAN -->
            </div>
        </div>
        @endforeach
    </section>
@endsection