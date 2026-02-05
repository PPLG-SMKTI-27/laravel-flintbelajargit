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
    
    <!-- Statistik kecil (opsional) -->
    <div class="project-stats">
        <span class="stat-item">
            <strong>{{ $projects->count() }}</strong> Proyek
        </span>
        <span class="stat-item">
            <strong>{{ $projects->unique('category')->count() }}</strong> Kategori
        </span>
    </div>
    
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
                <!-- Akses method dari model (opsional) -->
                <div class="project-meta">
                    <small>ID: {{ $project->id }} • Dibuat: {{ $project->created_at->format('d M Y') }}</small>
                </div>
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

@push('styles')
<style>
    .project-stats {
        display: flex;
        gap: 20px;
        justify-content: center;
        margin: 20px 0 40px;
    }
    
    .stat-item {
        background: rgba(138, 43, 226, 0.1);
        padding: 10px 20px;
        border-radius: 10px;
        border: 1px solid rgba(138, 43, 226, 0.2);
    }
    
    .stat-item strong {
        color: var(--primary-purple);
        font-size: 1.2rem;
    }
    
    .project-meta {
        margin-top: 15px;
        padding-top: 15px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        color: var(--text-gray);
        font-size: 0.85rem;
    }
</style>
@endpush