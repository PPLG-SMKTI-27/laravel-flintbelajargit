<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PortfolioDev') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Custom CSS Portfolio -->
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
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
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
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
            align-items: center;
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
        
        .nav-item {
            position: relative;
        }
        
        .dropdown-menu {
            position: absolute;
            right: 0;
            top: 100%;
            margin-top: 10px;
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 10px 0;
            min-width: 200px;
            backdrop-filter: blur(10px);
            display: none;
            z-index: 1000;
        }
        
        .nav-item:hover .dropdown-menu {
            display: block;
        }
        
        .dropdown-item {
            display: block;
            padding: 8px 20px;
            color: var(--text-gray);
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .dropdown-item:hover {
            background: rgba(138, 43, 226, 0.1);
            color: var(--light-purple);
        }
        
        .user-name {
            color: var(--light-purple);
            font-weight: 600;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <!-- Efek background -->
    <div class="bg-effect">
        <div class="bg-purple-circle"></div>
        <div class="bg-purple-circle-2"></div>
    </div>
    
    <div class="container">
        <!-- Navigation -->
        <nav>
            @include('layouts.navigation')
        </nav>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        
        <!-- Footer -->
        <footer class="text-center py-8 text-gray-500 border-t border-gray-800 mt-12">
            <p>&copy; {{ date('Y') }} PortfolioDev. Dibuat dengan Laravel dan ❤️.</p>
        </footer>
    </div>
    
    @vite(['resources/js/app.js'])
</body>
</html>