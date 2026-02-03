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
        @forelse($projects as $project)
        <div class="project-card">
            <div class="project-image">
                <img src="{{ $project->image ?? 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80' }}" 
                     alt="{{ $project->title }}" 
                     onerror="this.src='https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80'">
            </div>
            <div class="project-content">
                <span class="project-category">{{ $project->category }}</span>
                <h3 class="project-title">{{ $project->title }}</h3>
                <p class="project-description">
                    {{ $project->description }}
                </p>
                <div class="project-tech">
                    @if(is_array($project->technologies))
                        @foreach($project->technologies as $tech)
                            <span class="tech-tag">{{ $tech }}</span>
                        @endforeach
                    @else
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">PHP</span>
                    @endif
                </div>
                <!-- TOMBOL TIDAK DITAMPILKAN SESUAI PERMINTAAN -->
            </div>
        </div>
        @empty
        <div style="grid-column: 1 / -1; text-align: center; padding: 40px;">
            <h3 style="color: var(--text-gray);">Belum ada proyek yang tersedia</h3>
            <p style="color: var(--text-gray); margin-top: 10px;">Proyek akan segera ditambahkan.</p>
        </div>
        @endforelse
    </section>
@endsection