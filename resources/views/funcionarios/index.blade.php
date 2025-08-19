@extends('layouts.admin')

@section('content')

{{$contatos}}
<div class="max-w-6xl mx-auto p-6">

        <h1 class="text-2xl font-semibold text-gray-800 text-center pt-1 pb-8">Listagem de Funcionários</h1>



    <div class="bg-white shadow-sm rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nome</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">CPF</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">D. de nascimento</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Cargo</th>

                    </tr>
                </thead>

                <tbody class="bg-white divide-y divide-gray-100">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-indigo-600 font-medium">
                        <a href="/pagina_funcionario" class="hover:underline text-black ">Fulano da Silva</a>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">XX.XXX.XXX-XX</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">XX/XX/XXXX</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Desenvolvedor</td>

                    </tr>



                </tbody>
            </table>
        </div>
@endsection
