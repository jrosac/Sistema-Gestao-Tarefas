@extends('layouts.admin')

@section('content')

<div class="flex justify-center  bg-gray-100 mt-18" >
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-4xl">

        <!-- Título Principal -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Página de Atualização de Dados
        </h1>

        <!-- Formulário -->
        <form action="" class="space-y-6">
            @csrf

            <!-- Subtítulo -->
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Formulário de Edição</h2>
            </div>

            <!-- Campos em duas colunas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Coluna Esquerda -->
                <div class="space-y-4">
                    <div>
                        <label for="nome" class="block text-sm font-medium text-gray-700">Digite seu nome:</label>
                        <input type="text" name="nome" placeholder="Ex: Fábio dos Santos"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="data-nascimento" class="block text-sm font-medium text-gray-700">Selecione sua data de nascimento:</label>
                        <input type="date" name="data-nascimento"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="cpf" class="block text-sm font-medium text-gray-700">Digite seu CPF:</label>
                        <input type="text" name="cpf" placeholder="Ex: 000.000.000-00"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="nome-cargo" class="block text-sm font-medium text-gray-700">Digite seu cargo:</label>
                        <input type="text" name="nome-cargo" placeholder="Ex: Desenvolvedor Front-end"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>
                </div>

                <!-- Coluna Direita -->
                <div class="space-y-4">
                    <div>
                        <label for="logradouro" class="block text-sm font-medium text-gray-700">Logradouro:</label>
                        <input type="text" name="logradouro" placeholder="Ex: Rua Major Santos Guedes"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="numero" class="block text-sm font-medium text-gray-700">Número:</label>
                        <input type="text" name="numero" placeholder="Ex: 941"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade:</label>
                        <input type="text" name="cidade" placeholder="Ex: Aracaju"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="estado" class="block text-sm font-medium text-gray-700">Estado:</label>
                        <input type="text" name="estado" placeholder="Ex: Sergipe"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>
                </div>

            </div>

            <!-- Botão de Enviar -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer">
                    <a href="{{route("funcionario.listagem")}}">Atualizar</a>
                </button>
            </div>
        </form>

    </div>
</div>
@endsection
