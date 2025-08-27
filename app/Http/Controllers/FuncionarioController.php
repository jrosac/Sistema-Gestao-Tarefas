<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use DB;
use Illuminate\Http\Request;
use App\Models\Funcionario;
use Exception;// Assuming you have a Funcionario model

class FuncionarioController extends Controller
{

    public function __construct(Funcionario $funcionarios)
    {
        $this->funcionarios = $funcionarios;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $funcionarios = $this->funcionarios->all();


        return view('funcionarios.index', compact("funcionarios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        DB::beginTransaction();
        try {
            $funcionario = Funcionario::create([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'cargo' => $request->cargo,
                'data_nascimento' => $request->data_nascimento,
            ]);



            $funcionario->endereco()->create([
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
            ]);



            DB::commit();

            return redirect()->route('funcionario.index')->with('success', 'Funcionário cadastrado com sucesso!');


        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao cadastrar funcionário: ' . $e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $funcionario = Funcionario::find($id);
        return view('funcionarios.show', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $funcionario = Funcionario::find($id);
        $tarefas = Tarefa::all();
        return view('funcionarios.edit', compact('funcionario', 'tarefas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {

            $funcionario = Funcionario::find($id);

            $funcionario->update([
                'nome' => $request->nome,
                'cpf' => $request->cpf,
                'cargo' => $request->cargo,
                'data_nascimento' => $request->data_nascimento,
            ]);

            $funcionario->endereco()->update([
                'logradouro' => $request->logradouro,
                'numero' => $request->numero,
                'cidade' => $request->cidade,
                'estado' => $request->estado,
            ]);

            if ($request->has('tarefas')) {
                foreach ($request->tarefas as $dados) {

                    $tarefa = $funcionario->tarefas()->find($dados['id']);
                    if ($tarefa != null) {

                        $tarefa->update(['status_id' => $dados['status_id']]);
                    }
                }
            }
            DB::commit();
            return redirect()->route('funcionario.show', $funcionario->id)->with('success', 'Funcionário atualizado com sucesso!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao atualizar funcionário: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::beginTransaction();
        try {
            $funcionario = Funcionario::find($id);

            $funcionario->delete();

            DB::commit();

            return redirect()->route('funcionario.index')->with('success', 'Funcionário deletado com sucesso!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao deletar funcionário: ' . $e->getMessage());
        }
    }
}


