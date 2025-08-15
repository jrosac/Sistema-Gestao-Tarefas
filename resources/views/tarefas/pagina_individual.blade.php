@extends('layouts.admin')

@section('content')

    <div class="content">

    <h1>Página individual da tarefa</h1>

    <br><hr>

    <div class="card">

        <h2>Informações da tarefa</h2>

        <div class="info">
             <p><h3>Nome:</h3>Teste de ambiente</p>
             <p><h3>Detalhes</h3>testar o ambiente X com X libs</p>
             <p><h3>Data de entrega</h3>XX/XX/XXXX</p>
             <p><h3>Status atual</h3>Feito</p> <button>Alterar status</button>


             <div class="tasks">
                <h2>Funcionários Responsáveis:</h2>
                <p>xxxxxxx</p>
                <p>xxxxxxx</p>
                <p>xxxxxxx</p>


             </div>

             <br><br>
             <div class="btn">
             <button><a href="atualiza_tarefa">Atualizar dados da tarefa</a></button>
             <button>Deletar tarefa</button>

             </div>





       </div>

    </div>



    </div>

@endsection
