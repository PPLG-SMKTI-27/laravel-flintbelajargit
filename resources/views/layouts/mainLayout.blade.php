<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PortfolioDev')</title>
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
        
        /* Di CSS portfolio.blade.php */
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

        /* Auto-hide pesan setelah 5 detik */
        .login-success-message {
            animation: fadeIn 0.5s ease, fadeOut 0.5s ease 5s forwards;
        }

        @keyframes fadeOut {
            to { opacity: 0; transform: translateY(-10px); }
        }

        /* Tambahkan di CSS portfolio.blade.php */
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
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Efek hover untuk tombol login di navigasi */
        nav a[href*="login"]:hover {
            color: var(--primary-purple) !important;
        }

        nav a[href*="login"]::after {
            background: linear-gradient(90deg, var(--light-purple), var(--primary-purple));
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
        
        /* Profil section */
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
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px var(--glow-color);
        }
        
        .cta-button:active {
            transform: translateY(0);
        }
        
        .cta-button::after {
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
        
        .cta-button:hover::after {
            opacity: 1;
        }
        
        /* Foto profil bundar */
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
            box-shadow: 
                0 0 60px var(--glow-color),
                inset 0 0 30px rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(138, 43, 226, 0.3);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
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
        
        /* Efek tambahan */
        .purple-glow {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            box-shadow: inset 0 0 50px rgba(138, 43, 226, 0.2);
            z-index: 2;
            pointer-events: none;
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
        
        @media (max-width: 576px) {
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

        
    </style>
    @stack('styles')
</head>
<body>
    @yield('background-effects')
    
    <div class="container">
        @yield('header')
        
        <main>
            @yield('content')
        </main>
        
        @yield('footer')
    </div>
    
    @stack('scripts')
</body>
</html>