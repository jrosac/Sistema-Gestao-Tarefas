@extends('layouts.admin')

@section('content')


<div class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
  <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 text-center mb-4">Página individual da Tarefa</h1>

    <hr class="mb-6 border-gray-200">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Informações -->
      <x-alert/>
      <div class="bg-gray-50 rounded-lg p-5">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Informações da tarefa</h2>

        <div class="space-y-3 text-sm text-gray-700">
          <div>
            <p class="text-base text-gray-500">Nome</p>
            <p class="font-medium text-gray-900 text-base">{{$tarefa->titulo}}</p>
          </div>

          <div>
            <p class="text-base text-gray-500">Detalhes</p>
            <p class="font-medium text-gray-900 text-base">{{$tarefa->descricao}}</p>
          </div>

          <div>
            <p class="text-base text-gray-500">Data de Entrega</p>
            <p class="font-medium text-gray-900 text-base">{{ \Carbon\Carbon::parse($tarefa->data_entrega)->format("d/m/Y") }}</p>
          </div>

           <div>
               <p class="text-base text-gray-500">Status</p>
               <p class="font-medium rounded px-2 py-1 max-w-20 mt-2 text-base
                   {{$tarefa->status->nome === 'Feito' ? 'bg-green-100 text-green-800'  :
                   ($tarefa->status->nome === 'Fazendo' ? 'bg-yellow-100 text-orange-800' :
                   'bg-red-100 text-red-800') }}">
                   {{$tarefa->status->nome}}
               </p>
           </div>
       </div>

      </div>

      <!-- Funcionários -->
      <div class="bg-white rounded-lg p-5 border border-gray-100 shadow-sm">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Funcionários Responsáveis</h2>

        @if ($tarefa->funcionarios->isEmpty())
            <div>
                <div class="text-lg">Esta tarefa ainda não possui funcionários atribuídos.</div>
                <a href="{{route("funcionario.create")}}"
                   class="text-blue-500 hover:text-blue-800 transition-colors duration-500">
                   Cadastre um novo funcionário</a>

            </div>
        @else
         <div class="space-y-3 text-sm text-gray-700 mb-4">
             <ul class="list-disc list-inside space-y-1">
            @foreach ($tarefa->funcionarios->pluck('nome') as $nome )
            <li class="text-lg">{{$nome}}</li>
            @endforeach
            </ul>
         </div>
        @endif

      </div>

    </div>

    <!-- Ações -->
    <div class="mt-6 flex justify-center gap-3">
      <a href="{{route("tarefa.edit",$tarefa->id)}}" class="inline-block px-5 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium shadow">
        Atualizar dados
      </a>

        <form action="{{route('tarefa.destroy',$tarefa->id)}}" method="POST" onsubmit="return confirm('Deseja realmente deletar esta tarefa?')" id="delete-form-{{$tarefa->id}}">
        @csrf
        @method('DELETE')
        <button type="button" class="inline-block px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium shadow cursor-pointer" onclick="confirmDelete({{$tarefa->id}})">
          Deletar Tarefa
        </button>
      </form>
    </div>

  </div>
</div>

@endsection

