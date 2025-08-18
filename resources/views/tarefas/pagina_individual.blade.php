@extends('layouts.admin')

@section('content')

<div class="min-h-screen bg-gray-50 flex items-center justify-center p-6">
  <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg p-6">
    <h1 class="text-2xl font-bold text-gray-800 text-center mb-4">Página individual da Tarefa</h1>

    <hr class="mb-6 border-gray-200">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

      <!-- Informações -->
      <div class="bg-gray-50 rounded-lg p-5">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Informações da tarefa</h2>

        <div class="space-y-3 text-sm text-gray-700">
          <div>
            <p class="text-xs text-gray-500">Nome</p>
            <p class="font-medium text-gray-900">Testar ambiente de desenvolvimento</p>
          </div>

          <div>
            <p class="text-xs text-gray-500">Detalhes</p>
            <p class="font-medium text-gray-900">Utilizar o docker para baixar as dependecias e testar a aplicação em um ambiente isolado</p>
          </div>

          <div>
            <p class="text-xs text-gray-500">Data de Entrega</p>
            <p class="font-medium text-gray-900">15/04/1990</p>
          </div>

          <div>
            <p class="text-xs text-gray-500">Status</p>
            <p class="font-medium text-gray-900">A fazer</p>
          </div>
       </div>

      </div>

      <!-- Tarefas -->
      <div class="bg-white rounded-lg p-5 border border-gray-100 shadow-sm">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Funcionários Responsáveis</h2>

        <div class="space-y-3 text-sm text-gray-700 mb-4">
          <ul class="list-disc list-inside space-y-1">
            <li>Roberto Santos Chagas</li>
            <li>Juan Guilherme</li>
            <li>João Rosa Conceição</li>
          </ul>
        </div>

        <div class="mt-auto flex justify-center md:justify-start gap-3">
          <a href="#" class="inline-block px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow">
            Editar Responsáveis
          </a>
        </div>
      </div>

    </div>

    <!-- Ações -->
    <div class="mt-6 flex justify-center gap-3">
      <a href="#" class="inline-block px-5 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg font-medium shadow">
        Atualizar dados
      </a>

      <form action="#" method="POST" onsubmit="return confirm('Deseja realmente deletar este funcionário?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="inline-block px-5 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg font-medium shadow cursor-pointer">
          Deletar Tarefa
        </button>
      </form>
    </div>

  </div>
</div>

@endsection

