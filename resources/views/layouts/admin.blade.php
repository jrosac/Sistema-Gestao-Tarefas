<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Página de inicio</title>
</head>
<body>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo">Gestão-Tarefas</h2>
                <ul>
                    <li><a href="#" class="nav-link">Funcionários</a></li>
                    <li><a href="#" class="nav-link">Tarefas</a></li>
                </ul>
            </div>
        </header>

        @yield('content')

    </div>

</body>
</html>
