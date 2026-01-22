@extends('layouts.projectLayout')
@section('title', 'Portofolio Saya')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek Saya</title>
    <style>
        /* CSS INTERNAL - TEMA HITAM UNGU */
        :root {
            --primary-dark: #0a0a0a;
            --secondary-dark: #121212;
            --primary-purple: #8a2be2;
            --light-purple: #9d4edd;
            --accent-purple: #7b2cbf;
            --text-light: #f0f0f0;
            --text-gray: #b0b0b0;
            --glow-color: rgba(138, 43, 226, 0.4);
            --card-bg: rgba(25, 25, 35, 0.7);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: var(--primary-dark);
            color: var(--text-light);
            min-height: 100vh;
            overflow-x: hidden;
            line-height: 1.6;
        }
        
        /* Efek latar belakang */
        .bg-effect {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
        }
        
        .bg-purple-circle {
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--primary-purple), transparent 70%);
            filter: blur(60px);
            opacity: 0.15;
            top: 10%;
            left: 10%;
        }
        
        .bg-purple-circle-2 {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--light-purple), transparent 70%);
            filter: blur(60px);
            opacity: 0.1;
            bottom: 10%;
            right: 5%;
        }
        
        /* Container utama */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        /* Header dan navigasi */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 30px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-decoration: none;
            letter-spacing: 1px;
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }
        
        nav a {
            color: var(--text-gray);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 5px 0;
        }
        
        nav a:hover {
            color: var(--text-light);
        }
        
        nav a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            transition: width 0.3s ease;
        }
        
        nav a:hover::after {
            width: 100%;
        }
        
        /* Judul halaman */
        .page-header {
            text-align: center;
            padding: 60px 0 40px;
        }
        
        .page-title {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
            background: linear-gradient(90deg, var(--text-light), var(--light-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .page-subtitle {
            font-size: 1.2rem;
            color: var(--text-gray);
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* Grid proyek */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            padding: 40px 0 80px;
        }
        
        .project-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px var(--glow-color);
            border-color: rgba(138, 43, 226, 0.3);
        }
        
        .project-image {
            height: 220px;
            width: 100%;
            overflow: hidden;
        }
        
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .project-card:hover .project-image img {
            transform: scale(1.05);
        }
        
        .project-content {
            padding: 25px;
        }
        
        .project-category {
            display: inline-block;
            background: rgba(138, 43, 226, 0.2);
            color: var(--light-purple);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 15px;
            border: 1px solid rgba(138, 43, 226, 0.3);
        }
        
        .project-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .project-description {
            color: var(--text-gray);
            margin-bottom: 20px;
            font-size: 1rem;
        }
        
        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }
        
        .tech-tag {
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-gray);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .project-links {
            display: flex;
            gap: 15px;
        }
        
        .project-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(90deg, var(--primary-purple), var(--accent-purple));
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            flex: 1;
            text-align: center;
        }
        
        .project-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px var(--glow-color);
        }
        
        .project-link.secondary {
            background: transparent;
            border: 1px solid var(--primary-purple);
            color: var(--primary-purple);
        }
        
        .project-link.secondary:hover {
            background: rgba(138, 43, 226, 0.1);
        }
        
        /* Tombol kembali */
        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: transparent;
            color: var(--text-gray);
            padding: 12px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: 30px;
        }
        
        .back-button:hover {
            color: var(--text-light);
            border-color: var(--primary-purple);
            background: rgba(138, 43, 226, 0.05);
        }
        
        /* Footer */
        footer {
            text-align: center;
            padding: 30px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            color: var(--text-gray);
            font-size: 0.9rem;
        }
        
        /* Responsif */
        @media (max-width: 992px) {
            .projects-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
            
            .page-title {
                font-size: 2.5rem;
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
            
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .page-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 576px) {
            .project-links {
                flex-direction: column;
            }
            
            .page-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    @section('Content')
    <!-- Efek latar belakang -->
    <div class="bg-effect">
        <div class="bg-purple-circle"></div>
        <div class="bg-purple-circle-2"></div>
    </div>
    
    <div class="container">
        <!-- Header dengan navigasi -->
        <header>
            <a href="{{ url('/') }}" class="logo">PortfolioDev</a>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('/about') }}">Tentang</a></li>
                    <li><a href="{{ url('/about') }}#skills">Keahlian</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    <li><a href="{{ url('/projects') }}" style="color: var(--primary-purple); font-weight: 600;">Proyek</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- Judul halaman -->
        <section class="page-header">
            <h1 class="page-title">Proyek Saya</h1>
            <p class="page-subtitle">Berikut adalah beberapa proyek yang telah saya kerjakan, mencakup pengembangan web, aplikasi, dan solusi digital lainnya.</p>
            
            <a href="{{ url('/') }}" class="back-button">
                <span>← Kembali ke Beranda</span>
            </a>
        </section>
        @endsection
        <!-- Grid proyek -->
        @section('CardGrid')
        <section class="projects-grid">
            <!-- Proyek 1 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80" alt="Proyek E-commerce">
                </div>
                <div class="project-content">
                    <span class="project-category">E-commerce</span>
                    <h3 class="project-title">Laravel E-Shop Platform</h3>
                    <p class="project-description">
                        Platform e-commerce lengkap dengan sistem pembayaran, manajemen produk, keranjang belanja, dan dashboard admin.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">Bootstrap</span>
                    </div>
                </div>
            </div>
            
            <!-- Proyek 2 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Proyek Dashboard">
                </div>
                <div class="project-content">
                    <span class="project-category">Dashboard</span>
                    <h3 class="project-title">Analytics Dashboard</h3>
                    <p class="project-description">
                        Dashboard analitik real-time dengan visualisasi data, grafik interaktif, dan sistem pelaporan otomatis.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Livewire</span>
                        <span class="tech-tag">Chart.js</span>
                        <span class="tech-tag">Tailwind CSS</span>
                    </div>
                </div>
            </div>
            
            <!-- Proyek 3 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Proyek Mobile App">
                </div>
                <div class="project-content">
                    <span class="project-category">Mobile App</span>
                    <h3 class="project-title">Task Management App</h3>
                    <p class="project-description">
                        Aplikasi manajemen tugas dengan sinkronisasi cloud, notifikasi, kolaborasi tim, dan pelacakan progres.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">Laravel API</span>
                        <span class="tech-tag">Firebase</span>
                        <span class="tech-tag">Redux</span>
                    </div>
                </div>
            </div>
            
            <!-- Proyek 4 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Proyek Blog">
                </div>
                <div class="project-content">
                    <span class="project-category">Blog Platform</span>
                    <h3 class="project-title">Laravel Blog Platform</h3>
                    <p class="project-description">
                        Platform blog modern dengan sistem multi-penulis, editor WYSIWYG, komentar, dan SEO optimization.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Vue.js</span>
                        <span class="tech-tag">Markdown</span>
                        <span class="tech-tag">Redis</span>
                    </div>
                </div>
            </div>
            
            <!-- Proyek 5 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Proyek CMS">
                </div>
                <div class="project-content">
                    <span class="project-category">CMS</span>
                    <h3 class="project-title">Custom Content Management System</h3>
                    <p class="project-description">
                        Sistem manajemen konten yang dapat disesuaikan dengan berbagai tipe konten, peran pengguna, dan kontrol akses.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">Alpine.js</span>
                        <span class="tech-tag">MySQL</span>
                        <span class="tech-tag">File Storage</span>
                    </div>
                </div>
            </div>
            
            <!-- Proyek 6 -->
            <div class="project-card">
                <div class="project-image">
                    <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80" alt="Proyek API">
                </div>
                <div class="project-content">
                    <span class="project-category">API</span>
                    <h3 class="project-title">RESTful API Service</h3>
                    <p class="project-description">
                        Layanan API RESTful dengan autentikasi JWT, rate limiting, dokumentasi Swagger, dan sistem cache yang optimal.
                    </p>
                    <div class="project-tech">
                        <span class="tech-tag">Laravel</span>
                        <span class="tech-tag">JWT</span>
                        <span class="tech-tag">Swagger</span>
                        <span class="tech-tag">Redis</span>
                    </div>
                </div>
            </div>
        </section>
        @endsection
        
        <!-- Footer -->
        <footer>
            <p>&copy; 2023 PortfolioDev. Dibuat dengan Laravel dan ❤️.</p>
        </footer>
    </div>
    
    <script>
        // Efek hover untuk kartu proyek
        document.addEventListener('DOMContentLoaded', function() {
            const projectCards = document.querySelectorAll('.project-card');
            
            projectCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>