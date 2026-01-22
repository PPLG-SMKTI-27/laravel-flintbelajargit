<?php

namespace App\Http\Controllers;
 
use Illuminate\View\View;
 
class projectController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function portfolio(): \Illuminate\View\View
    {
        return view('portfolio', [
            'user' => 'Flint',
            'title' => 'Full Stack Developer',
            'description' => 'Spesialis Laravel & PHP dengan pengalaman 5+ tahun'
        ]);
    }

    public function index()
    {
        // Data proyek dari controller (bisa dari database nanti)
        $projects = [
            [
                'id' => 1,
                'title' => 'Laravel E-Shop Platform',
                'category' => 'E-commerce',
                'description' => 'Platform e-commerce lengkap dengan sistem pembayaran, manajemen produk, keranjang belanja, dan dashboard admin.',
                'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1674&q=80',
                'technologies' => ['Laravel', 'MySQL', 'JavaScript', 'Bootstrap'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 2,
                'title' => 'Analytics Dashboard',
                'category' => 'Dashboard',
                'description' => 'Dashboard analitik real-time dengan visualisasi data, grafik interaktif, dan sistem pelaporan otomatis.',
                'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['Laravel', 'Livewire', 'Chart.js', 'Tailwind CSS'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 3,
                'title' => 'Task Management App',
                'category' => 'Mobile App',
                'description' => 'Aplikasi manajemen tugas dengan sinkronisasi cloud, notifikasi, kolaborasi tim, dan pelacakan progres.',
                'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['React Native', 'Laravel API', 'Firebase', 'Redux'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 4,
                'title' => 'Laravel Blog Platform',
                'category' => 'Blog Platform',
                'description' => 'Platform blog modern dengan sistem multi-penulis, editor WYSIWYG, komentar, dan SEO optimization.',
                'image' => 'https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['Laravel', 'Vue.js', 'Markdown', 'Redis'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 5,
                'title' => 'Custom Content Management System',
                'category' => 'CMS',
                'description' => 'Sistem manajemen konten yang dapat disesuaikan dengan berbagai tipe konten, peran pengguna, dan kontrol akses.',
                'image' => 'https://images.unsplash.com/photo-1555949963-aa79dcee981c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['Laravel', 'Alpine.js', 'MySQL', 'File Storage'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 6,
                'title' => 'RESTful API Service',
                'category' => 'API',
                'description' => 'Layanan API RESTful dengan autentikasi JWT, rate limiting, dokumentasi Swagger, dan sistem cache yang optimal.',
                'image' => 'https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['Laravel', 'JWT', 'Swagger', 'Redis'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 7,
                'title' => 'Event Booking System (Terbaru! paling baru!)',
                'category' => 'Booking System',
                'description' => 'Sistem pemesanan acara dengan kalender interaktif, pembayaran online, dan manajemen tiket.',
                'image' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['Laravel', 'Vue.js', 'Stripe API', 'FullCalendar'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 8,
                'title' => 'Online Learning Platform TERBARUUUUU',
                'category' => 'Learning Platform',
                'description' => 'Platform pembelajaran online dengan sistem kursus interaktif, pelacakan kemajuan, dan sistem penilaian.',
                'image' => 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1770&q=80',
                'technologies' => ['Laravel', 'Vue.js', 'Stripe API', 'WebRTC'],
                'demo_url' => '#',
                'source_url' => '#'
            ],
            [
                'id' => 9,
                'title' => 'Social Networking Site',
                'category' => 'Social Network',
                'description' => 'Situs jejaring sosial dengan fitur profil pengguna, pertemanan, pesan instan, dan umpan berita.',
                'image' => 'images/awwa.avif',
                'technologies' => ['Laravel', 'React', 'WebSockets', 'MySQL'],
                'demo_url' => '#',
                'source_url' => '#'
            ]
        ];

        return view('projects.index', compact('projects'));
    }

    /**
     * Menampilkan detail proyek
     */
    public function show($id)
    {
        // Logika untuk menampilkan detail proyek
        // Bisa ditambahkan nanti jika diperlukan
        return view('projects.show', ['id' => $id]);
    }
}