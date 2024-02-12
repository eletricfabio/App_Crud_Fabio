<?php

namespace App\Http\Controllers;

use App_Crud_Fabio\Models\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

{

    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoas.index')->with('pessoas', $pessoas);
    }

    public function create()
    {
    return view('pessoas.create');
    }

    public function store(Request $request)
    {
        
        $pessoa = new Pessoa();
        $pessoa->nome = $request->input('nome');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->email = $request->input('email');
        $pessoa->perfil = $request->input('perfil');
        $pessoa->endereco = $request->input('endereco');
        $pessoa->cep = $request->input('cep');
        $pessoa->save();
        $pessoa = Pessoa::all();
        return view('pessoas.index')->with('pessoa', $pessoa)
            ->with('msg', 'Pessoa cadastrada com sucesso!');      
    }

    public function show($id)
    {
        $pessoa = Pessoa::find($id);
        if ($pessoa) {
            return view('pessoa.show')->with('pessoa', $pessoa);
        } else {
            return view('pessoas.show')->with('msg', 'Pessoa não encontrada!');
        }
    }

    public function edit($id)
    {
        $pessoa = Pessoa::find($id);
        if ($pessoa) {
            return view('pessoas.edit')->with('pessoa', $pessoa);
        } else {
            $pessoas = Pessoa::all();            
            return view('pessoas.index')->with('pessoas', $pessoas)
                ->with('msg', 'Pessoa não encontrada!');
        }
    }

    public function update(Request $request, $id)
    {
        
        $pessoa = Pessoa::find($id);
        $pessoa->nome = $request->input('nome');
        $pessoa->cpf = $request->input('cpf');
        $pessoa->email = $request->input('email');
        $pessoa->perfil = $request->input('perfil');
        $pessoa->endereco = $request->input('endereco');
        $pessoa->cep = $request->input('cep');
        
        $pessoa->save();
        
        $pessoas = Pessoa::all();
        return view('pessoas.index')->with('pessoas', $pessoas)
            ->with('msg', 'Pessoa atualizada com sucesso!');

    }

    public function destroy($id)
    {
        
        $pessoa = Pessoa::find($id);
        $pessoa->delete();
        $pessoas = Pessoa::all();
        return view('pessoas.index')->with('pessoas', $pessoas)
            ->with('msg', "Pessoa excluída com sucesso!");
    }

    public function search(Request $request) 
    {
        $filters = $request->except('_token');

        $pessoas = Pessoa::where('title', '=', $request->search)
                            ->orWhere('content', 'LIKE', "%{$request->search}%")
                            ->paginate();

        return view('pessoas.index', compact('pesssoas'));
    }

}