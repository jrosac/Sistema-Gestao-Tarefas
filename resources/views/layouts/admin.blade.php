<!DOCTYPE html>
<html lang="{{ str_replace("_","-",app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>Sistema Gestão de tarefas</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="main-container">
        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{route("home")}}">Gestão-Tarefas</a></h2>
                <ul class="list-nav-link">
                    <li><a href="{{route("funcionario.index")}}" class="nav-link">Funcionários</a></li>
                    <li><a href="{{route("tarefa.index")}}" class="nav-link">Tarefas</a></li>

                </ul>

            </div>

        </header>
      @yield('content')
    </div>
</body>
</html>
