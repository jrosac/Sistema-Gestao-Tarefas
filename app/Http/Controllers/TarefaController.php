<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Brick\Math\BigInteger;
use DB;
use Illuminate\Http\Request;
use App\Models\Tarefa;
use App\Models\Status;

class TarefaController extends Controller
{

    public function __construct(Tarefa $tarefas)
    {
        $this->tarefas = $tarefas;
        $this->status = Status::all();

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
        return view('tarefas.create', compact("status", "funcionarios"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $tarefa = Tarefa::create([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'status_id' => $request->status_id,
                'data_entrega' => $request->data_entrega,
            ]);



            $funcionarios = $request->funcionarios;

            if ($funcionarios == null) {
                $funcionarios = [];
            }

            $funcionariosSelecionados = array_unique(array_filter($funcionarios));



            if (!empty($funcionariosSelecionados)) {
                $tarefa->funcionarios()->attach($funcionariosSelecionados);
            }

            DB::commit();
            return redirect()->route('tarefa.index')
                ->with('success', 'Tarefa criada com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao criar a tarefa: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $status = $this->status;
        $tarefa = Tarefa::find($id);
        return view('tarefas.show', compact('tarefa', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tarefa = Tarefa::find($id);
        $funcionarios = Funcionario::all();
        return view('tarefas.edit', compact('tarefa', 'funcionarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {

            $tarefa = Tarefa::find($id);

            $tarefa->update([
                'titulo' => $request->titulo,
                'descricao' => $request->descricao,
                'status_id' => $request->status_id,
                'data_entrega' => $request->data_entrega,
            ]);

            $funcionarios = $request->funcionarios;

            if ($funcionarios == null) {
                $funcionarios = [];
            }

            $funcionariosSelecionados = array_unique(array_filter($funcionarios));


            $tarefa->funcionarios()->sync($funcionariosSelecionados);

            DB::commit();
            return redirect()->route('tarefa.show', $tarefa->id)
                ->with('success', 'Tarefa criada com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao atualizar a tarefa: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {


            $tarefa = Tarefa::find($id);
            $tarefa->delete();

            DB::commit();
            return redirect()->route('tarefa.index')->with('success', 'Tarefa deletada com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->route('tarefa.index')->with('error', 'Erro ao deletar a tarefa: ' . $e->getMessage());
        }

    }

}
