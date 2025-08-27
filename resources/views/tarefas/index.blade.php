@extends('layouts.admin')

@section('content')

<x-alert/>
<div class="max-w-7xl mx-auto p-6">

        <h1 class="text-2xl font-semibold text-gray-800 text-center pt-1 pb-8">Listagem de Tarefas</h1>



    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Detalhes</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">D. de entrega</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>

                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-100">
                    @foreach ($tarefas as $tarefa)


                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-600 font-medium">
                            <a href={{route("tarefa.show",$tarefa->id)}} class="hover:underline text-black">{{$tarefa->titulo}}</a>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 truncate">{{$tarefa->descricao}}</td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">{{$tarefa->data_entrega}}</td>

                        <td class="font-medium rounded px-2 py-1 max-w-20 mt-2
                        {{$tarefa->status->nome === 'Feito' ? 'bg-green-100 text-green-800'  :
                        ($tarefa->status->nome === 'Fazendo' ? 'bg-yellow-100 text-orange-800' :
                        'bg-red-100 text-red-800') }}">{{$tarefa->status->nome}}</td>

                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
@endsection
