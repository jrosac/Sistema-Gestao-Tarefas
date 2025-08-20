@extends('layouts.admin')

@section('content')

<div class="flex justify-center  bg-gray-100 mt-18" >
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-4xl">

        <!-- Título Principal -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Página de cadastro de tarefas
        </h1>

        <!-- Formulário -->
        <form action="" class="space-y-6">
            @csrf

            <!-- Subtítulo -->
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Formulário de Cadastro</h2>
            </div>


                <div class="space-y-4">
                    <div>
                        <label for="no" class="block text-sm font-medium text-gray-700">Digite o nome da tarefa</label>
                        <input type="text" name="nome" placeholder="Ex: Fábio dos Santos"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="detalhe" class="block text-sm font-medium text-gray-700">Digite os detalhes da tarefa:</label>
                        <input type="text"  placeholder="Ex: faça um crud utilzando tal tenologia e teste em tal ambiente" name="detalhe"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                   <div>
                     <label class="block text-sm font-medium text-gray-700 mb-2">
                       Selecione um status para a tarefa:
                     </label>

                     <div class="flex flex-col gap-2">
                       <label class="inline-flex items-center">
                         <input type="radio" name="status" value="a fazer"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                         <span class="ml-2 text-sm">A fazer</span>
                       </label>

                       <label class="inline-flex items-center">
                         <input type="radio" name="status" value="fazendo"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                         <span class="ml-2 text-sm">Fazendo</span>
                       </label>

                       <label class="inline-flex items-center">
                         <input type="radio" name="status" value="feito"
                           class="text-blue-600 focus:ring-blue-500 border-gray-300">
                         <span class="ml-2 text-sm">Feito</span>
                       </label>
                     </div>
                   </div>


                    <div>
                        <label for="data-entrega" class="block text-sm font-medium text-gray-700">Digite a data de entrega:</label>
                        <input type="date" name="data-entrega"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>
                </div>

            <!-- Botão de Enviar -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer">
                    <a href="{{route("tarefa.index")}}">Cadastrar</a>
                </button>
            </div>
        </form>

    </div>
</div>

@endsection
