@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold text-center mt-8">Página de boas-vindas</h1>

<div class="mt-6 text-center text-gray-700 max-w-2xl mx-auto px-4">
    <p class="mb-4 text-xl ">
        Seja bem-vindo ao nosso sistema de gerenciamento! Aqui você pode cadastrar, visualizar, editar
        e acompanhar todas as informações sobre funcionários e tarefas de forma prática e organizada.
    </p>
    <p class="mb-4 text-xl">
        Nosso objetivo é facilitar o seu trabalho, oferecendo ferramentas simples e eficientes para manter
        tudo sob controle. Através desta plataforma, você pode centralizar informações importantes e
        melhorar o fluxo de trabalho da sua equipe.
    </p>
    <p class="mb-4 text-xl">
        Para começar, escolha uma das opções abaixo e inicie o cadastro.
        É rápido, seguro e você terá acesso a todos os registros sempre que precisar.
    </p>
</div>

<div class="mt-8 flex flex-col items-center gap-4">
    <a href="{{ route('funcionario.create') }}"
       class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-600 transition ">
        Cadastrar Funcionário
    </a>

    <a href="{{ route('tarefa.create') }}"
       class="bg-green-500 text-white px-11 py-2 rounded-lg hover:bg-green-600 transition  ">
        Cadastrar Tarefa
    </a>
</div>



@endsection
