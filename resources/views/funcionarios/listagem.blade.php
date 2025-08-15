@extends('layouts.admin')

@section('content')

    <h1>Página de listagem de funcionários</h1>

    <br><hr>

    <table>
      <tr>
        <th>Nome</th>
        <th>CPF</th>
        <th>D. de nascimento</th>
        <th>Cargo</th>
     </tr>

     <tr>
        <td><a href="/pagina_funcionario">Fulano da silva</a></td>
        <td>XX.XXX.XXX-XX</td>
        <td>XX/XX/XXXX</td>
        <td>Desenvolvedor</td>
     </tr>


    </table>

@endsection
