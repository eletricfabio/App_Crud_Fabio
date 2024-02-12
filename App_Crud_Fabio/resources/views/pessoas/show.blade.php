{{-- herda a view base --}}
@extends('base')
@section('content')
    @if (isset($msg))
        <h3 style="color: red">Pessoa não encontrada!</h3>
    @else
        <h2>Mostrando dados da Pessoa</h2>
        <p><strong>Nome:</strong> {{ $pessoa->nome }} </p>
        <p><strong>CPF:</strong> {{ $pessoa->cpf }} </p>
        <p><strong>Email:</strong> {{ $pessoa->email }} </p>
        <p><strong>Perfil:</strong> {{ $pessoa->perfil }} </p>
        <p><strong>Endereço:</strong> {{ $pessoa->endereco }} </p>
        <p><strong>CEP:</strong> {{ $pessoa->cep }} </p>
        <a href="{{ route('pessoas.index') }}">Voltar</a>
    @endif
@endsection