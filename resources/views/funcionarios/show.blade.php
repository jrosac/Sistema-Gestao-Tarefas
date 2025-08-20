@extends('layouts.admin')

@section('content')

<div class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
  <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 text-center mb-4">Página individual do funcionário</h1>

    <hr class="mb-6 border-gray-200">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Informações -->
      <div class="bg-gray-50 rounded-lg p-5">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Informações do funcionário</h2>

        <div class="space-y-3 text-sm text-gray-700">
          <div>
            <p class="text-xs text-gray-500">Nome</p>
            <p class="font-medium text-gray-900">{{$funcionario->nome}}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500">CPF</p>
            <p class="font-medium text-gray-900">{{$funcionario->cpf}}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500">Data de nascimento</p>
            <p class="font-medium text-gray-900">{{$funcionario->data_nascimento}}</p>
          </div>

          <div>
            <p class="text-xs text-gray-500">Cargo</p>
            <p class="font-medium text-gray-900">{{$funcionario->cargo}}</p>
          </div>

          <div class="mt-4 pt-4 border-t border-gray-200">
            <p class="text-sm font-semibold text-gray-600 mb-2">Endereço</p>

            <div class="grid grid-cols-2 gap-2 text-sm">
              <div>
                <p class="text-xs text-gray-500">Logradouro</p>
                <p class="font-medium text-gray-900">{{$funcionario->endereco->logradouro}}</p>
              </div>
              <div>
                <p class="text-xs text-gray-500">Número</p>
                <p class="font-medium text-gray-900">{{$funcionario->endereco->numero}}</p>
              </div>
              <div>
                <p class="text-xs text-gray-500">Cidade</p>
                <p class="font-medium text-gray-900">{{$funcionario->endereco->cidade}}</p>
              </div>
              <div>
                <p class="text-xs text-gray-500">Estado</p>
                <p class="font-medium text-gray-900">{{$funcionario->endereco->estado}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Tarefas -->
      <div class="bg-white rounded-lg p-5 border border-gray-100 shadow-sm">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Tarefas atribuídas</h2>

        <div class="space-y-3 text-sm text-gray-700 mb-4">
          <ul class="list-disc list-inside space-y-1">
            @foreach ($funcionario->tarefas->pluck('titulo') as $titulo )
                <li>{{$titulo}}</li>
            @endforeach
          </ul>
        </div>

        <div class="mt-auto flex justify-center md:justify-start gap-3">
          <a href="#" class="inline-block px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow">
            Editar Status
          </a>
        </div>
      </div>

    </div>

    <!-- Ações -->
    <div class="mt-6 flex justify-center gap-3">
      <a href="{{route("funcionario.edit",$funcionario->id)}}" class="inline-block px-5 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium shadow">
        Atualizar dados
      </a>

      <form action="#" method="POST" onsubmit="return confirm('Deseja realmente deletar este funcionário?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="inline-block px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium shadow cursor-pointer">
          Deletar funcionário
        </button>
      </form>
    </div>

  </div>
</div>

@endsection

