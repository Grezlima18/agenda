<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Pessoa::all();
        return view('agenda.index', compact('cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = [
            1 => "Aluno",
            2 => "Responsável",
            3 => "Professor",
            4 => "Funcionário",
            5 => "Coordenador"
        ];

        return view('agenda.create')
            ->with('categorias', $categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'nullable',
            'cidadeEstado' => 'nullable',
            'email' => 'nullable|email',
            'categoria' => 'nullable',
        ]);

        Pessoa::create($request->all());

        return redirect()->route('agenda.index')->with('success', 'Pessoa cadastrada com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cadastro = Pessoa::findOrFail($id);
        $categorias = [
            1 => "Aluno",
            2 => "Responsável",
            3 => "Professor",
            4 => "Funcionário",
            5 => "Coordenador"
        ];

        return view('agenda.edit')
            ->with('cadastro', $cadastro)
            ->with('categorias', $categorias);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validação dos dados, por exemplo:
        $request->validate([
            'nome' => 'required',
            'telefone' => 'nullable',
            'cidadeEstado' => 'nullable',
            'email' => 'nullable|email',
            'categoria' => 'nullable',
        ]);

        // Encontrar a pessoa pelo ID e atualizar os dados
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->update($request->all());

        // Redirecionar para a página de listagem com uma mensagem de sucesso
        return redirect()->route('agenda.index')->with('success', 'Cadastro atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pessoa = Pessoa::findOrFail($id);
        $pessoa->delete();

        return redirect()->route('agenda.index')->with('success', 'Cadastro excluído com sucesso!');
    }
}
