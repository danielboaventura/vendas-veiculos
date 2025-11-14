<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Painel Admin</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f5f5;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .container-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #ccc;
        }
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Admin</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('marcas.index') }}">Marcas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('modelos.index') }}">Modelos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cores.index') }}">Cores</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('veiculos.index') }}">Veículos</a>
                    </li>

                </ul>

                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn-danger">Sair</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="container-box">
            <h2 class="mb-4">@yield('title')</h2>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
