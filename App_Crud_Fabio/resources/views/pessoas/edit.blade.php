{{-- herda a view 'base' --}}
@extends('base')
@section('content')
    <h2>Atualizar Pessoa</h2>
    <form class="form" id="update-form" method="POST" action="{{ route('pessoas.update', $pessoa->id) }}">
        @csrf
        @method('PUT')
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required value="{{ $pessoa->nome }}">
        <label for="Nome">CPF:</label>
        <input type="number" name="cpf" id="cpf" required value="{{ $pessoa->cpf }}">
        <label for="Nome">Email:</label>
        <input type="text" name="email" id="email" required value="{{ $pessoa->email }}">
        <label for="Nome">Perfil:</label>
        <input type="text" name="perfil" id="perfil" required value="{{ $pessoa->perfil }}">
        <label for="Nome">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required value="{{ $pessoa->endereco }}">
        <label for="Nome">Cep:</label>
        <input type="text" name="cep" id="cep" required value="{{ $pessoa->cep }}">
    </form>
    <button form="update-form" type="submit">Salvar</button>
    <button form="delete-form" type="submit" value="Excluir" >Excluir</button>
    {{-- form para exclusão --}}
    <form method="POST" class="form" id="delete-form" action="{{ route('pessoas.destroy', $pessoa->id) }}">
        @csrf
        @method('DELETE')
    </form>
@endsection
