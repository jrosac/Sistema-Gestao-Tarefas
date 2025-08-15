@extends('layouts.admin')

@section('content')

    <h1>Atualizacao de dados do funcionario</h1>
    <br><hr>

                <h1>Formulário de Atualização de Dados</h1>

            <form method="POST">
                @csrf

                <label for="nome">Digite seu nome:</label>
                <input type="text" placeholder="Ex: Fábio dos santos" name="nome" required>

                <br><br>

                <label for="data-nascimento">Selecione sua data de nascimento:</label>
                <input type="date" name="data-nascimento" required>

                <br><br>

                <label for="cpf">Digite seu CPF:</label>
                <input type="text" placeholder="Ex: 000.000.000-00" name="cpf" required>

                <br><br>

                <label for="nome-cargo">Digite seu cargo:</label>
                <input type="text" placeholder="Ex: Desenvolvedor front-end" name="nome-cargo" required>

                <br>

                <h3>endereço:</h3>

                <label for="logradouro">Logradouro:</label>
                <input type="text" placeholder="Ex: Rua Major Santos Guedes " name="logradouro" required>

                <br><br>

                <label for="numero">Número:</label>
                <input type="text" placeholder="Ex: 941" name="numero" required>

                <br><br>

                <label for="cidade">Cidade:</label>
                <input type="text" placeholder="Ex: Aracaju" required>

                <br><br>

                <label for="estado">Estado:</label>
                <input type="text" placeholder="Ex: Sergipe" required>


                <br><br>
                <input type="submit" value="Atualizar">

           </form>

@endsection
