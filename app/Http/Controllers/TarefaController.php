<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Status;

class TarefaController extends Controller
{

    public function __construct(Tarefa $tarefas)
    {
        $this->tarefas = $tarefas;
        $this->status  = Status::all();

    }

    public function index()
    {
        $tarefas = $this->tarefas->all();

        return view('tarefas.index', compact("tarefas"));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $status = $this->status;
        $funcionarios = Funcionario::all();
        return view('tarefas.create',compact("status","funcionarios"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $tarefa = Tarefa::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'status_id' => $request->status_id,
            'data_entrega' => $request->data_entrega,
        ]);


    $funcionariosSelecionados = array_unique(array_filter($request->funcionarios));


    if (!empty($funcionariosSelecionados)) {
        $tarefa->funcionarios()->attach($funcionariosSelecionados);
    }

        return redirect()->route('tarefa.index')
                         ->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $status = $this->status;
        $tarefa = Tarefa::find($id);
        return view('tarefas.show', compact('tarefa','status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefas.edit', compact('tarefa'));
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'status_id' => 'required|in:1,2,3',
            'data_entrega' => 'required|date',
        ]);

        $tarefa = Tarefa::find($id);

        $tarefa -> update([
            'titulo' => $validated['titulo'],
            'descricao' => $validated['descricao'],
            'status_id' => $validated['status_id'],
            'data_entrega' => $validated['data_entrega'],
        ]);

        return redirect()->route('tarefa.index')
                         ->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
