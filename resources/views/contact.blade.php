<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Hubungi Saya</title>
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
            right: 10%;
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
            left: 5%;
        }
        
        .bg-purple-circle-3 {
            position: absolute;
            width: 250px;
            height: 250px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--accent-purple), transparent 70%);
            filter: blur(60px);
            opacity: 0.1;
            top: 60%;
            right: 20%;
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
        
        /* Konten utama */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 1.5fr;
            gap: 50px;
            margin-bottom: 80px;
        }
        
        /* Informasi kontak */
        .contact-info {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            height: fit-content;
        }
        
        .contact-info h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--text-light);
            position: relative;
            padding-bottom: 15px;
        }
        
        .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            border-radius: 3px;
        }
        
        .contact-info p {
            color: var(--text-gray);
            margin-bottom: 30px;
        }
        
        .contact-methods {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .contact-method {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--primary-purple), var(--accent-purple));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            flex-shrink: 0;
            box-shadow: 0 5px 15px var(--glow-color);
            transition: all 0.3s ease;
        }
        
        .contact-method:hover .contact-icon {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--glow-color);
        }
        
        .contact-details h3 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: var(--text-light);
        }
        
        .contact-details p {
            color: var(--text-gray);
            margin-bottom: 5px;
            font-size: 0.95rem;
        }
        
        .contact-link {
            color: var(--light-purple);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: all 0.3s ease;
        }
        
        .contact-link:hover {
            color: var(--primary-purple);
            text-decoration: underline;
        }
        
        /* Sosial media */
        .social-media {
            margin-top: 40px;
        }
        
        .social-media h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: var(--text-light);
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-light);
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .social-icon:hover {
            background: var(--primary-purple);
            transform: translateY(-5px);
            box-shadow: 0 8px 15px var(--glow-color);
        }
        
        /* Form kontak */
        .contact-form-container {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .contact-form-container h2 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--text-light);
            position: relative;
            padding-bottom: 15px;
        }
        
        .contact-form-container h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            border-radius: 3px;
        }
        
        .contact-form {
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
        
        .form-group input,
        .form-group textarea {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px 20px;
            color: var(--text-light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
            background: rgba(255, 255, 255, 0.07);
        }
        
        .form-group input::placeholder,
        .form-group textarea::placeholder {
            color: var(--text-gray);
            opacity: 0.7;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .submit-button {
            background: linear-gradient(90deg, var(--primary-purple), var(--accent-purple));
            color: white;
            padding: 18px 40px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px var(--glow-color);
            position: relative;
            overflow: hidden;
            z-index: 1;
            margin-top: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
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
        
        /* Peta lokasi */
        .map-section {
            margin-bottom: 80px;
        }
        
        .map-section h2 {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 40px;
            color: var(--text-light);
            position: relative;
        }
        
        .map-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            border-radius: 3px;
        }
        
        .map-container {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .map-placeholder {
            height: 300px;
            background: linear-gradient(135deg, rgba(138, 43, 226, 0.1), rgba(157, 78, 221, 0.05));
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--text-gray);
            border: 2px dashed rgba(138, 43, 226, 0.3);
        }
        
        .map-placeholder i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: var(--primary-purple);
        }
        
        /* Jam kerja */
        .hours-section {
            margin-bottom: 80px;
        }
        
        .hours-section h2 {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 40px;
            color: var(--text-light);
            position: relative;
        }
        
        .hours-section h2::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            border-radius: 3px;
        }
        
        .hours-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        
        .hour-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            text-align: center;
        }
        
        .hour-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--glow-color);
            border-color: rgba(138, 43, 226, 0.3);
        }
        
        .hour-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .hour-card p {
            color: var(--text-gray);
            margin-bottom: 5px;
        }
        
        .hour-card .time {
            color: var(--light-purple);
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 10px;
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
            .contact-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }
            
            .page-title {
                font-size: 2.5rem;
            }
            
            .hours-grid {
                grid-template-columns: repeat(2, 1fr);
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
            
            .page-title {
                font-size: 2.2rem;
            }
            
            .hours-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-info,
            .contact-form-container {
                padding: 30px;
            }
        }
        
        @media (max-width: 576px) {
            .page-title {
                font-size: 2rem;
            }
            
            .contact-method {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .social-icons {
                justify-content: center;
            }
            
            .contact-form-container h2,
            .contact-info h2,
            .map-section h2,
            .hours-section h2 {
                font-size: 1.6rem;
            }
        }
        
        /* Animasi form */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
</head>
<body>
    <!-- Efek latar belakang -->
    <div class="bg-effect">
        <div class="bg-purple-circle"></div>
        <div class="bg-purple-circle-2"></div>
        <div class="bg-purple-circle-3"></div>
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
                    <li><a href="{{ url('/contact') }}" style="color: var(--primary-purple); font-weight: 600;">Kontak</a></li>
                    <li><a href="{{ url('/projects') }}">Proyek</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- Judul halaman -->
        <section class="page-header">
            <h1 class="page-title">Hubungi Saya</h1>
            <p class="page-subtitle">Mari berkolaborasi! Hubungi saya melalui formulir atau informasi kontak di bawah ini.</p>
            
            <a href="{{ url('/') }}" class="back-button">
                <span>← Kembali ke Beranda</span>
            </a>
        </section>
        
        <!-- Konten utama -->
        <div class="contact-content">
            <!-- Informasi kontak -->
            <div class="contact-info animate-fade-in">
                <h2>Informasi Kontak</h2>
                <p>Saya terbuka untuk peluang kerja sama, proyek freelance, atau sekadar berdiskusi tentang teknologi. Jangan ragu untuk menghubungi saya!</p>
                
                <div class="contact-methods">
                    <!-- Email -->
                    <div class="contact-method">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>Respon dalam 24 jam</p>
                            <a href="mailto:24_flintrevel@student.smkti.net" class="contact-link">24_flintrevel@student.smkti.net</a>
                        </div>
                    </div>
                    
                    <!-- Telepon -->
                    <div class="contact-method">
                        <div class="contact-icon">📱</div>
                        <div class="contact-details">
                            <h3>Telepon / WhatsApp</h3>
                            <p>Senin - Jumat, 9:00 - 17:00</p>
                            <a href="tel:+6281234567890" class="contact-link">+62 813 3355 1127</a>
                        </div>
                    </div>
                    
                    <!-- Lokasi -->
                    <div class="contact-method">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <h3>Lokasi</h3>
                            <p>Samarinda, Kaltim, Indonesia</p>
                            <p class="contact-link">Bersedia untuk remote atau onsite</p>
                        </div>
                    </div>
                </div>
                
                <!-- Sosial media -->
                <div class="social-media">
                    <h3>Ikuti Saya</h3>
                    <div class="social-icons">
                        <a href="https://github.com/flintbelajargit" target="_blank" class="social-icon" title="GitHub">GH</a>
                    </div>
                </div>w
            </div>
            
            <!-- Form kontak -->
            <div class="contact-form-container animate-fade-in" style="animation-delay: 0.2s;">
                <h2>Kirim Pesan</h2>
                <form class="contact-form" id="contactForm">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" name="email" placeholder="nama@email.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <input type="text" id="subject" name="subject" placeholder="Tentang apa?" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-button">
                        <span>Kirim Pesan</span>
                        <span>✉️</span>
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Peta lokasi -->
        <section class="map-section">
            <h2>Lokasi Saya</h2>
            <div class="map-container">
                <div class="map-placeholder">
                    <div>📍</div>
                    <p>Samarinda, Kaltim, Indonesia</p>
                    <p style="font-size: 0.9rem; margin-top: 10px;">Bersedia untuk kerja remote atau onsite di area Jakarta</p>
                </div>
            </div>
        </section>
        
        <!-- Jam kerja -->
        <section class="hours-section">
            <h2>Jam Kerja & Ketersediaan</h2>
            <div class="hours-grid">
                <div class="hour-card">
                    <h3>Senin - Jumat</h3>
                    <p>Hari Kerja</p>
                    <div class="time">09:00 - 17:00</div>
                </div>
                
                <div class="hour-card">
                    <h3>Sabtu</h3>
                    <p>Kerja Paruh Waktu</p>
                    <div class="time">10:00 - 14:00</div>
                </div>
                
                <div class="hour-card">
                    <h3>Minggu</h3>
                    <p>Hari Libur</p>
                    <div class="time">Tidak Tersedia</div>
                </div>
                
                <div class="hour-card">
                    <h3>Waktu Respons</h3>
                    <p>Email & Pesan</p>
                    <div class="time">≤ 24 Jam</div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer>
            <p>&copy; 2023 PortfolioDev. Siap untuk kolaborasi dan proyek menarik! Siap langsung Sukses! Win Rate 100%!</p>
        </footer>
    </div>
    
    <script>
        // Animasi elemen saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi untuk elemen dengan class animate-fade-in
            const animatedElements = document.querySelectorAll('.animate-fade-in');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animationPlayState = 'running';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            animatedElements.forEach(el => {
                el.style.animationPlayState = 'paused';
                observer.observe(el);
            });
            
            // Form submission handling
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Dapatkan nilai form
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                // Validasi sederhana
                if (!name || !email || !subject || !message) {
                    alert('Harap lengkapi semua field!');
                    return;
                }
                
                // Simulasi pengiriman form
                const submitButton = contactForm.querySelector('.submit-button');
                const originalText = submitButton.innerHTML;
                
                // Tampilkan loading state
                submitButton.innerHTML = '<span>Mengirim...</span> <span>⏳</span>';
                submitButton.disabled = true;
                
                // Simulasi delay pengiriman
                setTimeout(() => {
                    // Reset form
                    contactForm.reset();
                    
                    // Tampilkan pesan sukses
                    submitButton.innerHTML = '<span>Pesan Terkirim!</span> <span>✅</span>';
                    
                    // Kembalikan ke state semula setelah 2 detik
                    setTimeout(() => {
                        submitButton.innerHTML = originalText;
                        submitButton.disabled = false;
                    }, 2000);
                    
                    // Tampilkan notifikasi
                    alert('Terima kasih! Pesan Anda telah berhasil dikirim. Saya akan membalasnya dalam waktu 24 jam.');
                }, 1500);
            });
            
            // Efek hover untuk kartu jam kerja
            const hourCards = document.querySelectorAll('.hour-card');
            
            hourCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Efek hover untuk ikon sosial media
            const socialIcons = document.querySelectorAll('.social-icon');
            
            socialIcons.forEach(icon => {
                icon.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                icon.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Efek hover untuk ikon kontak
            const contactIcons = document.querySelectorAll('.contact-icon');
            
            contactIcons.forEach(icon => {
                icon.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-5px)';
                });
                
                icon.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
        
        // Validasi email real-time
        document.addEventListener('DOMContentLoaded', function() {
            const emailInput = document.getElementById('email');
            
            emailInput.addEventListener('blur', function() {
                const email = this.value;
                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                if (email && !emailPattern.test(email)) {
                    this.style.borderColor = '#ff4757';
                    this.style.boxShadow = '0 0 0 3px rgba(255, 71, 87, 0.1)';
                } else {
                    this.style.borderColor = 'rgba(255, 255, 255, 0.1)';
                    this.style.boxShadow = 'none';
                }
            });
            
            // Reset validasi saat fokus
            emailInput.addEventListener('focus', function() {
                this.style.borderColor = 'var(--primary-purple)';
                this.style.boxShadow = '0 0 0 3px rgba(138, 43, 226, 0.1)';
            });
        });
    </script>
</body>
</html>