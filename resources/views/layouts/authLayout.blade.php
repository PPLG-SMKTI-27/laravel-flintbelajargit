<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login - Portfolio')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <style>
        /* CSS TEMA HITAM UNGU (sama seperti sebelumnya) */
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
        
        main {
            width: 100%;
        }
        
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
        
        .auth-card {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
        }
        
        .error-message {
            background: rgba(255, 71, 87, 0.2);
            border: 1px solid rgba(255, 71, 87, 0.5);
            color: #ff4757;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
        }
        
        .success-message {
            background: rgba(46, 204, 113, 0.2);
            border: 1px solid rgba(46, 204, 113, 0.5);
            color: #2ecc71;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 500;
        }
        
        .login-form {
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
        
        .form-group input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px 20px;
            color: var(--text-light);
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: var(--primary-purple);
            box-shadow: 0 0 0 3px rgba(138, 43, 226, 0.1);
            background: rgba(255, 255, 255, 0.07);
        }
        
        .field-error {
            color: #ff4757;
            font-size: 0.85rem;
            margin-top: 5px;
            display: block;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        
        .form-check label {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-gray);
            cursor: pointer;
        }
        
        .form-check input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: var(--primary-purple);
        }
        
        .form-actions {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }
        
        .submit-button {
            background: linear-gradient(90deg, var(--primary-purple), var(--accent-purple));
            color: white;
            padding: 18px 40px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px var(--glow-color);
            font-weight: 600;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .submit-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px var(--glow-color);
        }
        
        .forgot-password {
            color: var(--text-gray);
            text-align: center;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s ease;
        }
        
        .forgot-password:hover {
            color: var(--light-purple);
        }
        
        .login-info {
            margin-top: 30px;
            padding: 20px;
            background: rgba(138, 43, 226, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(138, 43, 226, 0.2);
        }
        
        .login-info p {
            color: var(--text-gray);
            margin-bottom: 5px;
            font-size: 0.9rem;
        }
        
        .login-info strong {
            color: var(--text-light);
        }
        
        @media (max-width: 576px) {
            .auth-card {
                padding: 30px 20px;
            }
            
            .auth-header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
    @stack('styles')
</head>
<body>
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
            <p>© {{ date('Y') }} PortfolioDev • 
                <a href="{{ url('/') }}">Kembali ke Beranda</a>
            </p>
        </div>
    </div>
</body>
</html>