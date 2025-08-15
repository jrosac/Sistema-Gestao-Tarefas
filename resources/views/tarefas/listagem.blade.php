@extends('layouts.admin')

@section('content')

<h1>Página de listagem de tarefas</h1>

    <br><hr>

    <table>
      <tr>
        <th>Nome</th>
        <th>Detalhes</th>
        <th>Data de entrega</th>
        <th>Status</th>
     </tr>

     <tr>
        <td><a href={{route("tarefa.pagina_individual")}}>Testar o ambiente de desenvolvimento</a></td>
        <td>Utilizar o docker para baixar as dependecias e testar a aplicação em um ambiente isolado</td>
        <td>XX/XX/XXXX</td>
        <td>A fazer</td>
     </tr>


    </table>

@endsection
