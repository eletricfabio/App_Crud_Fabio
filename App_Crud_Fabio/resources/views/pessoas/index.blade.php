{{-- herda a view 'base' --}}
@extends('base')
@section('content')
    <h2>Pessoas Cadastradas</h2>

    <form action="" method="post">
        <input type="Text" name="search" plasceholder="Filtrar:">
        <button type="submit">Filtrar</button>

    @if (!isset($pessoas))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cpf</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th>Endereço</th>
                    <th>Cep</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pessoas as $p)
                    <tr>
                        <td>{{ $p->nome }} </td>
                        <td> {{ $p->cpf }} </td>
                        <td> {{ $p->email }} </td>
                        <td> {{ $p->perfil }} </td>
                        <td> {{ $p->endereco }} </td>
                        <td> {{ $p->cep }} </td>
                        <td> <a href="{{ route('pessoas.show', $v->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('pessoas.edit', $v->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="5">Pessoas Cadastradas: {{ $pessoas->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection