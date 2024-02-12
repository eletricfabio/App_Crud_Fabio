{{-- herda a view 'base' --}}
@extends('base')
@section('content')
    <h2>Cadastrar Nova Pessoa</h2>
    <form class="form" method="POST" action="{{ route('pessoas.store') }}">
        @csrf
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="Nome">CPF:</label>
        <input type="number" name="cpf" id="cpf" required>
        <label for="Nome">Email:</label>
        <input type="text" name="email" id="email" required>
        <label for="Nome">Perfil:</label>
        <input type="text" name="perfil" id="perfil" required>
        <label for="Nome">Endereço:</label>
        <input type="text" name="endereco" id="endereco" required>
        <label for="Nome">Cep:</label>
        <input type="text" name="cep" id="cep" required>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection


