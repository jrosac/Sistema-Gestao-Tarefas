@extends('layouts.admin')

@section('content')




<div class="flex justify-center  bg-gray-100 mt-18" >
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-4xl">

        <!-- Título Principal -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Página de Atualização de Dados
        </h1>

        <!-- Formulário -->
        <x-alert/>
        <form action={{route("funcionario.update",$funcionario->id)}} method="POST" class="space-y-6">
            @csrf
            @method('PUT')

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
                        <input type="text" name="nome" placeholder="Ex: Fábio dos Santos" value="{{$funcionario->nome}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="data_nascimento" class="block text-sm font-medium text-gray-700">Selecione sua data de nascimento:</label>
                        <input type="date" name="data_nascimento" value="{{$funcionario->data_nascimento}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="cpf" class="block text-sm font-medium text-gray-700">Digite seu CPF:</label>
                        <input type="text" name="cpf" placeholder="Ex: 000.000.000-00" value="{{$funcionario->cpf}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="cargo" class="block text-sm font-medium text-gray-700">Digite seu cargo:</label>
                        <input type="text" name="cargo" placeholder="Ex: Desenvolvedor Front-end" value="{{$funcionario->cargo}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>
                </div>

                <!-- Coluna Direita -->
                <div class="space-y-4">
                    <div>
                        <label for="logradouro" class="block text-sm font-medium text-gray-700">Logradouro:</label>
                        <input type="text" name="logradouro" placeholder="Ex: Rua Major Santos Guedes" value="{{$funcionario->endereco->logradouro}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="numero" class="block text-sm font-medium text-gray-700">Número:</label>
                        <input type="text" name="numero" placeholder="Ex: 941" value="{{$funcionario->endereco->numero}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="cidade" class="block text-sm font-medium text-gray-700">Cidade:</label>
                        <input type="text" name="cidade" placeholder="Ex: Aracaju" value="{{$funcionario->endereco->cidade}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="estado" class="block text-sm font-medium text-gray-700">Estado:</label>
                        <input type="text" name="estado" placeholder="Ex: Sergipe" value="{{$funcionario->endereco->estado}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>
                </div>

            </div>



             <div>
                 <label class="block text-sm font-medium text-gray-700 pb-3">Status das tarefas:</label>
                 @foreach ($funcionario->tarefas as $i => $tarefa)
                     <div>
                         <p class="font-semibold text-gray-900 ">{{ $tarefa->titulo }}</p>
                         <!-- Envia o ID da tarefa escondido -->
                         <input type="hidden" name="tarefas[{{ $i }}][id]" value="{{ $tarefa->id }}">
                         <!-- Select envia o status -->
                         <select name="tarefas[{{ $i }}][status_id]"
                                 class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 bg-white text-gray-700 mb-3">
                             <option value="1" {{ $tarefa->status_id == 1 ? 'selected' : '' }}>A fazer</option>
                             <option value="2" {{ $tarefa->status_id == 2 ? 'selected' : '' }}>Fazendo</option>
                             <option value="3" {{ $tarefa->status_id == 3 ? 'selected' : '' }}>Feito</option>
                         </select>
                     </div>
                 @endforeach
             </div>


            <!-- Botão de Enviar -->
            <div class="flex justify-center">
                <input type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer" value="Atualizar">
            </div>
        </form>

    </div>
</div>
@endsection
