@extends('layouts.admin')

@section('content')



<div class="flex justify-center  bg-gray-100 mt-18" >
    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-4xl">

        <!-- Título Principal -->
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">
            Página de Atualização de Tarefas
        </h1>

        <!-- Formulário -->
        <form action="{{route("tarefa.update",$tarefa->id)}}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Subtítulo -->
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold text-gray-700">Formulário de Edição</h2>
            </div>

            <!-- Campos em duas colunas -->


                <!-- Coluna Esquerda -->
                <div class="space-y-4">
                    <div>
                        <label for="titulo" class="block text-sm font-medium text-gray-700">Digite o nome da tarefa</label>
                        <input type="text" name="titulo" placeholder="Ex: Fábio dos Santos" value="{{$tarefa->titulo}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

                    <div>
                        <label for="descricao" class="block text-sm font-medium text-gray-700">Digite os detalhes da tarefa:</label>
                        <input type="text"  placeholder="Ex: faça um crud utilzando tal tenologia e teste em tal ambiente" name="descricao"
                            value="{{$tarefa->descricao}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>

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
                               <input type="radio" name="status_id" value="2" checked
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

                                  @if (count($tarefa->funcionarios->pluck('nome')) > 0)
                                          <option value={{$tarefa->funcionarios->pluck('id')[0]}} selected>{{$tarefa->funcionarios->pluck('nome')[0]}}</option>
                                          <option value="" >N/A</option>

                                          @foreach ($funcionarios as $funcionario)
                                          <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                                          @endforeach

                                  @elseif (count($tarefa->funcionarios->pluck('nome')) == 0)
                                          <option value="" disabled selected >Escolha um funcionario ...</option>
                                      @foreach ($funcionarios as $funcionario)
                                          <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                                      @endforeach
                                  @endif
                              </select>

                              <select name="funcionarios[]" id="funcionario1"
                                  class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 bg-white text-gray-700 mb-3">

                                  @if (count($tarefa->funcionarios->pluck('nome')) > 1)
                                          <option value={{$tarefa->funcionarios->pluck('id')[1]}} selected>{{$tarefa->funcionarios->pluck('nome')[1]}}</option>
                                          <option value="" >N/A</option>

                                          @foreach ($funcionarios as $funcionario)
                                          <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                                          @endforeach

                                  @elseif (count($tarefa->funcionarios->pluck('nome')) <= 1)
                                          <option value="" disabled selected >Escolha um funcionario ...</option>
                                      @foreach ($funcionarios as $funcionario)
                                          <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                                      @endforeach
                                  @endif
                              </select>

                              <select name="funcionarios[]" id="funcionario1"
                                  class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-2 bg-white text-gray-700 mb-3">

                                  @if (count($tarefa->funcionarios->pluck('nome')) > 2)
                                          <option value={{$tarefa->funcionarios->pluck('id')[2]}} selected>{{$tarefa->funcionarios->pluck('nome')[2]}}</option>
                                          <option value="" >N/A</option>

                                          @foreach ($funcionarios as $funcionario)
                                          <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                                          @endforeach

                                  @elseif (count($tarefa->funcionarios->pluck('nome')) <= 2)
                                          <option value="" disabled selected >Escolha um funcionario ...</option>
                                      @foreach ($funcionarios as $funcionario)
                                          <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>
                                      @endforeach
                                  @endif
                              </select>
                         </div>


                    <div>
                        <label for="data_entrega" class="block text-sm font-medium text-gray-700">Digite a data de entrega:</label>
                        <input type="date" name="data_entrega" value="{{$tarefa->data_entrega}}"
                            class="mt-1 w-full rounded-lg border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 p-1">
                    </div>
                </div>

            <!-- Botão de Enviar -->
            <div class="flex justify-center">
                <input type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition cursor-pointer" value="Atualizar">
            </div>
        </form>

    </div>
</div>

@endsection
