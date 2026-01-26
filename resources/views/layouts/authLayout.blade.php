<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login - Portfolio')</title>
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
            display: flex;
            align-items: center;
            justify-content: center;
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
        
        .container {
            width: 100%;
            max-width: 500px;
            padding: 0 20px;
        }
        
        /* Header navigasi */
        .auth-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .auth-header .logo {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(90deg, var(--primary-purple), var(--light-purple));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-decoration: none;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .auth-header h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            color: var(--text-light);
        }
        
        .auth-header p {
            color: var(--text-gray);
            font-size: 1rem;
        }
        
        /* Konten utama */
        main {
            width: 100%;
        }
        
        /* Footer */
        .auth-footer {
            text-align: center;
            margin-top: 40px;
            color: var(--text-gray);
            font-size: 0.9rem;
        }
        
        .auth-footer a {
            color: var(--light-purple);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .auth-footer a:hover {
            color: var(--primary-purple);
            text-decoration: underline;
        }
    </style>
    @stack('styles')
</head>
<body>
    <!-- Efek latar belakang -->
    <div class="bg-effect">
        <div class="bg-purple-circle"></div>
        <div class="bg-purple-circle-2"></div>
    </div>
    
    <div class="container">
        <div class="auth-header">
            <a href="{{ url('/') }}" class="logo">PortfolioDev</a>
            @yield('auth-header')
        </div>
        
        <main>
            @yield('content')
        </main>
        
        <div class="auth-footer">
            @yield('auth-footer')
        </div>
    </div>
    
    @stack('scripts')
</body>
</html>