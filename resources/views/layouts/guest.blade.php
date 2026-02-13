<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PortfolioDev') }} - Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Custom CSS Portfolio (Tetap pakai tema hitam-ungu) -->
    <style>
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
        
        body {
            background-color: var(--primary-dark);
            color: var(--text-light);
        }
        
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
            top: 20%;
            right: 20%;
        }
        
        .bg-purple-circle-2 {
            position: absolute;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, var(--light-purple), transparent 70%);
            filter: blur(60px);
            opacity: 0.1;
            bottom: 20%;
            left: 10%;
        }
        
        .auth-card {
            background: var(--card-bg);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        
        .auth-header .logo {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-decoration: none;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Efek background portfolio -->
    <div class="bg-effect">
        <div class="bg-purple-circle"></div>
        <div class="bg-purple-circle-2"></div>
    </div>
    
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="auth-header mb-6 text-center">
            <a href="/" class="logo">
                PortfolioDev
            </a>
        </div>

        <div class="auth-card w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
        
        <div class="text-center mt-6 text-gray-400 text-sm">
            © {{ date('Y') }} PortfolioDev • 
            <a href="{{ url('/') }}" class="text-purple-400 hover:text-purple-300">
                Kembali ke Beranda
            </a>
        </div>
    </div>
</body>
</html>