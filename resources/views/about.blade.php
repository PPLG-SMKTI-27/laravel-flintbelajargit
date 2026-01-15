<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - Perjalanan Karir</title>
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
        
        /* Profil singkat */
        .profile-summary {
            display: flex;
            align-items: center;
            gap: 40px;
            background: var(--card-bg);
            border-radius: 15px;
            padding: 40px;
            margin-bottom: 60px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .profile-summary-image {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            overflow: hidden;
            flex-shrink: 0;
            border: 3px solid rgba(138, 43, 226, 0.3);
            box-shadow: 0 0 30px var(--glow-color);
        }
        
        .profile-summary-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .profile-summary-content h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .profile-summary-content .title {
            font-size: 1.2rem;
            color: var(--primary-purple);
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .profile-summary-content p {
            color: var(--text-gray);
            margin-bottom: 20px;
        }
        
        .contact-info {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-gray);
        }
        
        .contact-item i {
            color: var(--primary-purple);
            font-size: 1.2rem;
        }
        
        /* Timeline perjalanan karir */
        .timeline-section {
            margin-bottom: 80px;
        }
        
        .section-title {
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 50px;
            color: var(--text-light);
            position: relative;
        }
        
        .section-title::after {
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
        
        .timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 3px;
            height: 100%;
            background: linear-gradient(to bottom, var(--primary-purple), var(--light-purple));
            border-radius: 3px;
        }
        
        .timeline-item {
            display: flex;
            justify-content: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        .timeline-item:nth-child(odd) {
            flex-direction: row;
        }
        
        .timeline-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        
        .timeline-content {
            width: 45%;
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--glow-color);
            border-color: rgba(138, 43, 226, 0.3);
        }
        
        .timeline-year {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(90deg, var(--primary-purple), var(--accent-purple));
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-weight: 600;
            z-index: 2;
            box-shadow: 0 5px 15px var(--glow-color);
            min-width: 120px;
            text-align: center;
        }
        
        .timeline-content h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .timeline-content .company {
            color: var(--primary-purple);
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }
        
        .timeline-content p {
            color: var(--text-gray);
            margin-bottom: 15px;
        }
        
        .timeline-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        
        .skill-tag {
            background: rgba(138, 43, 226, 0.2);
            color: var(--light-purple);
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 0.85rem;
            border: 1px solid rgba(138, 43, 226, 0.3);
        }
        
        /* Keahlian section */
        .skills-section {
            margin-bottom: 80px;
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .skill-category {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .skill-category:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--glow-color);
            border-color: rgba(138, 43, 226, 0.3);
        }
        
        .skill-category h3 {
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: var(--text-light);
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .skill-category h3 i {
            color: var(--primary-purple);
        }
        
        .skill-item {
            margin-bottom: 15px;
        }
        
        .skill-name {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            color: var(--text-gray);
        }
        
        .skill-bar {
            height: 8px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
        }
        
        .skill-level {
            height: 100%;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            border-radius: 4px;
        }
        
        /* Pendidikan section */
        .education-section {
            margin-bottom: 80px;
        }
        
        .education-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 25px;
        }
        
        .education-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 25px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }
        
        .education-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px var(--glow-color);
            border-color: rgba(138, 43, 226, 0.3);
        }
        
        .education-card h3 {
            font-size: 1.4rem;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .education-card .institution {
            color: var(--primary-purple);
            font-weight: 600;
            margin-bottom: 10px;
            display: block;
        }
        
        .education-card .period {
            color: var(--text-gray);
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .education-card p {
            color: var(--text-gray);
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
            .profile-summary {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-summary-image {
                width: 180px;
                height: 180px;
            }
            
            .contact-info {
                justify-content: center;
            }
            
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                flex-direction: row !important;
                justify-content: flex-start;
                padding-left: 60px;
            }
            
            .timeline-content {
                width: 100%;
            }
            
            .timeline-year {
                left: 30px;
                transform: translateX(0);
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
                font-size: 2.5rem;
            }
            
            .skills-grid, .education-cards {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 576px) {
            .page-title {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .profile-summary {
                padding: 25px;
            }
            
            .profile-summary-content h2 {
                font-size: 1.6rem;
            }
        }
    </style>
</head>
<body>
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
                    <li><a href="{{ url('/about') }}" style="color: var(--primary-purple); font-weight: 600;">Tentang</a></li>
                    <li><a href="{{ url('/about') }}#skills">Keahlian</a></li>
                    <li><a href="{{ url('/contact') }}">Kontak</a></li>
                    <li><a href="{{ url('/projects') }}">Proyek</a></li>
                </ul>
            </nav>
        </header>
        
        <!-- Judul halaman -->
        <section class="page-header">
            <h1 class="page-title">Tentang Saya</h1>
            <p class="page-subtitle">Perjalanan karir, pendidikan, dan keahlian yang saya miliki sebagai seorang Full Stack Developer.</p>
            
            <a href="{{ url('/') }}" class="back-button">
                <span>← Kembali ke Beranda</span>
            </a>
        </section>
        
        <!-- Profil singkat -->
        <section class="profile-summary">
            <div class="profile-summary-image">
                <img src="images/me.jpg" alt="Foto Profil">
            </div>
            <div class="profile-summary-content">
                <h2 class="profile-name">Flint'S</h2>
                <div class="title">Full Stack Web Developer</div>
                <p>
                    Saya adalah seorang Full Stack Developer dengan pengalaman lebih dari 5 tahun dalam pengembangan web. 
                    Saya memiliki passion untuk membuat solusi teknologi yang inovatif, efisien, dan user-friendly. 
                    Selama perjalanan karir saya, saya telah mengerjakan berbagai proyek mulai dari startup hingga perusahaan besar.
                </p>
                <div class="contact-info">
                    <div class="contact-item">
                        <i>✉️</i>
                        <span>24_flintrevel@student.smkti.net</span>
                    </div>
                    <div class="contact-item">
                        <i>📱</i>
                        <span>+62 13 3355 1127</span>
                    </div>
                    <div class="contact-item">
                        <i>📍</i>
                        <span>Samarinda, Kaltim, Indonesia</span>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Perjalanan Karir Timeline -->
        <section class="timeline-section">
            <h2 class="section-title">Perjalanan Karir</h2>
            
            <div class="timeline">
                <!-- Item 1 -->
                <div class="timeline-item">
                    <div class="timeline-year">2022 - Sekarang</div>
                    <div class="timeline-content">
                        <h3>Senior Full Stack Developer of Airlangga Corporation</h3>
                        <span class="company">Tech Solutions Airlangga Inc.</span>
                        <p>
                            Memimpin tim pengembangan dalam membangun aplikasi enterprise-scale untuk klien multinasional.
                            Bertanggung jawab atas arsitektur sistem, code review, dan implementasi best practices.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">Laravel</span>
                            <span class="skill-tag">Vue.js</span>
                            <span class="skill-tag">AWS</span>
                            <span class="skill-tag">Docker</span>
                            <span class="skill-tag">Microservices</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 2 -->
                <div class="timeline-item">
                    <div class="timeline-year">2020 - 2022</div>
                    <div class="timeline-content">
                        <h3>Full Stack Developer</h3>
                        <span class="company">Digital Creative Flint'S Agency</span>
                        <p>
                            Mengembangkan berbagai aplikasi web dan mobile untuk berbagai klien dari berbagai industri.
                            Berkolaborasi dengan tim desain dan produk untuk menciptakan pengalaman pengguna yang optimal.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">React</span>
                            <span class="skill-tag">Node.js</span>
                            <span class="skill-tag">MongoDB</span>
                            <span class="skill-tag">REST API</span>
                            <span class="skill-tag">Agile</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 3 -->
                <div class="timeline-item">
                    <div class="timeline-year">2018 - 2020</div>
                    <div class="timeline-content">
                        <h3>Web Developer</h3>
                        <span class="company">Startup E-commerce Besar</span>
                        <p>
                            Berkontribusi dalam pengembangan platform e-commerce dari nol hingga launch.
                            Mengimplementasikan fitur-fitur utama seperti sistem pembayaran, keranjang belanja, dan dashboard admin.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">PHP</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">MySQL</span>
                            <span class="skill-tag">Bootstrap</span>
                            <span class="skill-tag">Git</span>
                        </div>
                    </div>
                </div>
                
                <!-- Item 4 -->
                <div class="timeline-item">
                    <div class="timeline-year">2017 - 2018</div>
                    <div class="timeline-content">
                        <h3>Professional Web Developer</h3>
                        <span class="company">Web Development Visual Studio Code</span>
                        <p>
                            Memulai karir sebagai Senior Professional developer dengan fokus pada frontend development VSC.
                            Membantu dalam pengembangan website dan aplikasi VSC untuk klien besar.
                        </p>
                        <div class="timeline-skills">
                            <span class="skill-tag">HTML/CSS</span>
                            <span class="skill-tag">JavaScript</span>
                            <span class="skill-tag">jQuery</span>
                            <span class="skill-tag">WordPress</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Keahlian Section -->
        <section id="skills" class="skills-section">
            <h2 class="section-title">Keahlian Teknis</h2>
            
            <div class="skills-grid">
                <!-- Frontend -->
                <div class="skill-category">
                    <h3><i>🖥️</i> Frontend Development</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>HTML5 / CSS3</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 95%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>JavaScript / ES6+</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Vue.js / React</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 85%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Responsive Design</span>
                            <span>95%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 95%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Backend -->
                <div class="skill-category">
                    <h3><i>⚙️</i> Backend Development</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>PHP / Laravel</span>
                            <span>92222222222.1%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 92%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Node.js / Express</span>
                            <span>80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 80%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>RESTful API</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Database Design</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
                
                <!-- Tools & Lainnya -->
                <div class="skill-category">
                    <h3><i>🔧</i> Tools & Lainnya</h3>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Git / Version Control</span>
                            <span>90%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Docker / DevOps</span>
                            <span>75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>AWS / Cloud Services</span>
                            <span>70%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="skill-item">
                        <div class="skill-name">
                            <span>Agile / Scrum</span>
                            <span>85%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Pendidikan Section -->
        <section class="education-section">
            <h2 class="section-title">Pendidikan</h2>
            
            <div class="education-cards">
                <!-- Pendidikan 1 -->
                <div class="education-card">
                    <h3>Sarjana Teknik Informatika Tertinggi yang Tertinggi</h3>
                    <span class="institution">Universitas Indonesia Plus</span>
                    <div class="period">2013 - 2017</div>
                    <p>
                        Lulus dengan predikat cum laude. Fokus studi pada pengembangan perangkat lunak, 
                        arsitektur sistem, dan kecerdasan buatan. Aktif dalam organisasi mahasiswa dan
                        berbagai kompetisi pemrograman.
                    </p>
                </div>
                
                <!-- Pendidikan 2 -->
                <div class="education-card">
                    <h3>Sertifikasi AWS Developer</h3>
                    <span class="institution">Amazon Established by Flint's Web Services</span>
                    <div class="period">2021</div>
                    <p>
                        Sertifikasi resmi AWS Certified Developer - Associate. Mencakup pengembangan,
                        deployment, dan debugging aplikasi berbasis cloud di lingkungan AWS.
                    </p>
                </div>
                
                <!-- Pendidikan 3 -->
                <div class="education-card">
                    <h3>Bootcamp Full Stack Development by Hermansyah</h3>
                    <span class="institution">Hacktiv8</span>
                    <div class="period">2018</div>
                    <p>
                        Program intensif selama 3 bulan yang fokus pada pengembangan aplikasi web full stack
                        menggunakan teknologi modern seperti JavaScript, React, Node.js, dan database.
                    </p>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer>
            <p>&copy; 2023 PortfolioDev. Semua hak dilindungi.</p>
        </footer>
    </div>
    
    <script>
        // Animasi timeline saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            const timelineItems = document.querySelectorAll('.timeline-content');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });
            
            timelineItems.forEach(item => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(item);
            });
            
            // Animasi skill bars
            const skillBars = document.querySelectorAll('.skill-level');
            
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                
                setTimeout(() => {
                    bar.style.transition = 'width 1.5s ease-in-out';
                    bar.style.width = width;
                }, 300);
            });
        });
    </script>
</body>
</html>