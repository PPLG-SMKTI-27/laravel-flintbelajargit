<header>
    <a href="{{ url('/') }}" class="logo">PortfolioDev</a>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}" {{ request()->routeIs('home') ? 'style=color:var(--primary-purple);font-weight:600;' : '' }}>Beranda</a></li>
            <li><a href="{{ url('/about') }}" {{ request()->routeIs('about') ? 'style=color:var(--primary-purple);font-weight:600;' : '' }}>Tentang</a></li>
            <li><a href="{{ url('/about') }}#skills">Keahlian</a></li>
            <li><a href="{{ url('/contact') }}" {{ request()->routeIs('contact') ? 'style=color:var(--primary-purple);font-weight:600;' : '' }}>Kontak</a></li>
            <li><a href="{{ url('/projects') }}" {{ request()->routeIs('projects.*') ? 'style=color:var(--primary-purple);font-weight:600;' : '' }}>Proyek</a></li>
            
            @auth
                <li class="nav-item">
                    <a href="#" class="user-name">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('dashboard') }}" class="dropdown-item">
                            📊 Dashboard
                        </a>
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">
                            👤 Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item" style="background: none; border: none; width: 100%; text-align: left; cursor: pointer;">
                                🚪 Logout
                            </button>
                        </form>
                    </div>
                </li>
            @else
                <li><a href="{{ route('login') }}" style="color: var(--light-purple);">🔐 Login</a></li>
                <li><a href="{{ route('register') }}" style="color: var(--light-purple);">📝 Register</a></li>
            @endauth
        </ul>
    </nav>
</header>