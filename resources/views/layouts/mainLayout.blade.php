    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'PortfolioDev')</title>
        <!-- Tambahkan CSRF Token untuk Breeze -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
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
            
            /* Dropdown untuk user (Breeze) */
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
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
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
                cursor: pointer;
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