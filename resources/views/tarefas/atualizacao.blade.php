@extends('layouts.admin')

@section('content')

       <div class="content">

        <h1>Página de atualização de tarefa</h1>

        <div class="formulario">

            <h1>Formulário de atualização</h1>

            <form method="POST">
                @csrf

                <label for="nome">Digite o nome da tarefa:</label>
                <input type="text" placeholder="Ex: fazer um crud" name="nome" required>

                <br><br>

                <label for="detalhe">Detalhe a tarefa:</label>
                <input type="text" placeholder="Ex: faça um crud utilzando tal tenologia e teste em tal ambiente" name="detalhe" required>

                <br><br>

                <label for="data">selecione a data de entrega da tarefa</label>
                <input type="date"  name="data" required>

                <br><br>

                <input type="submit" value="Atualizar">

           </form>


        </div>




    </div>

@endsection
