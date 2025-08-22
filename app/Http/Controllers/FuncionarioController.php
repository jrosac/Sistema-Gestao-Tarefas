<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Funcionario;
use Exception;// Assuming you have a Funcionario model

class FuncionarioController extends Controller
{

    public function __construct(Funcionario $funcionarios){
        $this-> funcionarios = $funcionarios;
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

        //dd($request->nome);
        DB::beginTransaction();
        try{
            $funcionario = Funcionario::create([
            'nome'=> $request->nome,
            'cpf'=> $request->cpf,
            'cargo'=> $request->cargo,
            'data_nascimento'=> $request->data_nascimento,
        ]);

        //dd($funcionario);

        $funcionario->endereco()->create([
            'logradouro'=> $request->logradouro,
            'numero'=> $request-> numero,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ]);

        //dd($funcionario);

        DB::commit();

        return redirect()->route('funcionario.index')->with('success', 'Funcionário cadastrado com sucesso!');


        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'Erro ao cadastrar funcionário: '.$e->getMessage());
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
        return view('funcionarios.edit', compact('funcionario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            $validated = $request->validate([
            //fucionario
            'nome'=> 'required|string|max:255',
            'cpf'=> 'required|string|max:14',
            'cargo'=> 'required|string|max:100',
            'data_nascimento'=> 'required|date',
            // endereco
            'logradouro'=> 'required|string|max:255',
            'numero'=> 'required|string|max:10',
            'cidade'=> 'required|string|max:100',
            'estado'=> 'required|string|max:25',

        ]);

        $funcionario = Funcionario::find($id);

        $funcionario->update([
            'nome'=> $validated['nome'],
            'cpf'=> $validated['cpf'],
            'cargo'=> $validated['cargo'],
            'data_nascimento'=> $validated['data_nascimento'],
        ]);

        $funcionario->endereco()->update([
            'logradouro'=> $validated['logradouro'],
            'numero'=> $validated['numero'],
            'cidade'=> $validated['cidade'],
            'estado'=> $validated['estado'],
        ]);

        return redirect()->route('funcionario.show',$funcionario->id)->with('success', 'Funcionário cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
