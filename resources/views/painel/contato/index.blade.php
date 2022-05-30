@extends('tema.painel.layout')

@section('title','Contato')
@section('subtitle','Lista de contatos')

@section('content')


<div class="row">
    <table>
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Mensagemm</th>
            <th>Ações</th>
        </thead>
        <tbody>
        @foreach($reg as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->message}}</td>
                <td>
                    <a class="btn red" href="{{route('painel.contato.delete',$item->id)}}">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
