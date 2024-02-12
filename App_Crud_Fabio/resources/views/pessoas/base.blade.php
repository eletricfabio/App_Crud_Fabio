<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=chrome">
    {{-- Pegando as variáveis de ambiente --}}
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>Teste Fábio - Laravel - CRUD</h1>
        </header>
        <nav>
            <ul>
                {{-- Links para o cadastro --}}
                <li><a href="/pessoass">Início</a></li>
                <li><a href="/pessoas/create">Cadastro de Pessoas</a></li>
            </ul>
        </nav>
        <div class="content">
            @yield('content')
        </div>
        <footer>
            <div>
                <p>Teste Fábio</p>
            </div>
        </footer>
    </div>
</body>
</html>