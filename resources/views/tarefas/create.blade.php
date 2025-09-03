@extends('layouts.admin')

@section('content')



<div class="flex justify-center  bg-gray-100 mt-18" >
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-4xl">

        <!-- Título Principal -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Página de cadastro de tarefas
        </h1>

        <!-- Formulário -->
        <x-alert />
<form action="{{ route('tarefa.store') }}" method="POST" class="space-y-6">
    @csrf
    <div class="text-center mb-6">
        <h2 class="text-xl font-semibold text-gray-700">Formulário de Cadastro</h2>
    </div>

    <div class="space-y-4">

        <!-- Título -->
        <div>
            <label for="titulo" class="block text-sm font-medium text-gray-700">Digite o título da tarefa</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}" placeholder="Ex: Fazer upload do banco de dados"
                class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
        </div>

        <!-- Descrição -->
        <div>
            <label for="descricao" class="block text-sm font-medium text-gray-700">Digite os detalhes da tarefa:</label>
            <input type="text" name="descricao" value="{{ old('descricao') }}" placeholder="Ex: faça um CRUD utilizando tal tecnologia"
                class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
        </div>

        <!-- Status -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">
                Selecione um status para a tarefa:
            </label>

            <div class="flex flex-col gap-2">
                <label class="inline-flex items-center">
                    <input type="radio" name="status_id" value="1"
                        class="text-blue-600 focus:ring-blue-500 border-gray-300"
                        {{ old('status_id') == 1 ? 'checked' : '' }}>
                    <span class="ml-2 text-sm">A fazer</span>
                </label>

                <label class="inline-flex items-center">
                    <input type="radio" name="status_id" value="2"
                        class="text-blue-600 focus:ring-blue-500 border-gray-300"
                        {{ old('status_id') == 2 ? 'checked' : '' }}>
                    <span class="ml-2 text-sm">Fazendo</span>
                </label>

                <label class="inline-flex items-center">
                    <input type="radio" name="status_id" value="3"
                        class="text-blue-600 focus:ring-blue-500 border-gray-300"
                        {{ old('status_id') == 3 ? 'checked' : '' }}>
                    <span class="ml-2 text-sm">Feito</span>
                </label>
            </div>
        </div>

<div>
    <label for="funcionarios" class="block text-sm font-medium text-gray-700 mb-1">Selecione os funcionários:</label>

    <select name="funcionarios[]" id="funcionario1"
        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 bg-white text-gray-700 mb-3">
        <option value="" disabled selected >Escolha um funcionário...</option>
        @foreach ($funcionarios as $funcionario)
            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
        @endforeach
    </select>

        <select name="funcionarios[]" id="funcionario2"
        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 bg-white text-gray-700 mb-3">
        <option value="" disabled selected >Escolha um funcionário...</option>
        @foreach ($funcionarios as $funcionario)
            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
        @endforeach
    </select>

        <select name="funcionarios[]" id="funcionario3"
        class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 bg-white text-gray-700 mb-3">
        <option value="" disabled selected >Escolha um funcionário...</option>
        @foreach ($funcionarios as $funcionario)
            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
        @endforeach
    </select>
</div>


        <!-- Data de Entrega -->
        <div>
            <label for="data_entrega" class="block text-sm font-medium text-gray-700">Digite a data de entrega:</label>
            <input type="date" name="data_entrega" value="{{ old('data_entrega') }}"
                class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
        </div>

    </div>

    <!-- Botão de Enviar -->
    <div class="flex justify-center">
        <button type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer">
            Cadastrar
        </button>
    </div>
</form>


    </div>
</div>
@endsection
