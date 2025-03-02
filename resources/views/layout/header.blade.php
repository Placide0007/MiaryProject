<header class="navbar navbar-expand-md bg-light navbar-light sticky-top px-5 py-2 py-md-0  border border-bottom shadow">

    <!-- Logo -->
    <a class="navbar-brand" href="">
        <span class="fs-6">Lorem ipsum dolor!</span>
    </a>

    <!-- Bouton de menu (mobile) -->
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#content">
        <i class="navbar-toggler-icon"></i>
    </button>

    <!-- Menu de navigation -->
    <nav class="collapse navbar-collapse" id="content">
        <ul class="navbar-nav ms-auto me-auto">
            <!-- Liens principaux -->
            <li class="nav-item">
                <a href="{{ route('cultures.index') }}" class="px-3 px-md-2 nav-link {{ request()->routeIs('cultures.index') ? 'active-link' : 'hover' }}">Accueil</a>
            </li>
            <lin class="nav-item ms-md-5">
                <a href="{{ route('posts.index') }}" class="nav-link hover {{ request()->routeIs('posts.index') ? 'active-link' : 'hover' }}">Forum</a>
            </lin>
            <li class="nav-item ms-md-5">
                <a href="" class="nav-link hover">A propos</a>
            </li>
        </ul>

        @auth
            <div class="dropdown ms-md-5">
                <a class="nav-item nav-link   border fw-bold px-3 py-2 bg-primary text-light rounded" href="#"
                    role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ ucfirst(auth()->user()->name) }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="dropdownMenuLink" style="width: 10px;">
                    <li><a class="dropdown-item" href="{{ route('profil') }}">Mon Profil</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item">Déconnexion</button>
                        </form>
                    </li>
                </ul>
            </div>
        @endauth

        {{-- header non-authentifier --}}
        @guest
            <div class="btn-group ">
                <a href="{{ route('login') }}" class="btn btn-primary">Connexion</a>
                <a href="{{ route('register') }}" class="btn btn-outline-dark">Inscription</a>
            </div>
        @endguest

    </nav>

</header>


