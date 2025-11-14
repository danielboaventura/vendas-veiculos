<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'AutoCarros - Loja de Veículos')</title>

    {{-- SEO simples --}}
    <meta name="description" content="@yield('description', 'Loja de veículos com as melhores ofertas.')">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .navbar {
            padding: 1rem 0;
        }

        .hero {
            background: url('https://images.unsplash.com/photo-1503376780353-7e6692767b70') center/cover no-repeat;
            height: 360px;
            border-radius: 12px;
        }

        .hero-overlay {
            background: rgba(0,0,0,.55);
            border-radius: 12px;
            height: 100%;
        }

        footer {
            margin-top: 60px;
        }
    </style>

    @stack('styles')
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('site.home') }}">AutoCarros</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.home') ? 'active' : '' }}" 
                       href="{{ route('site.home') }}">Início</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('site.veiculos') ? 'active' : '' }}" 
                       href="{{ route('site.veiculos') }}">Veículos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login">Área Admin</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<footer class="text-center py-4 bg-dark text-white mt-5">
    <p class="mb-0">AutoCarros © {{ date('Y') }}</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>
