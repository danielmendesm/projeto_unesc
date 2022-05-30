@extends('tema.painel.layout')

@section('title','Blog - Postagens')
@section('subtitle','Lista de postagens')

@section('content')

<div class="row">

    <div class="row right">
        <a class="btn blue" href="{{route('painel.blog.novo')}}">Adicionar</a>
    </div>

    <table>
        <thead>
            <th>ID</th>
            <th>Categoria</th>
            <th>Titulo</th>
            <th>Imagem</th>
            <th>Status</th>
            <th>Ações</th>
        </thead>
        <tbody>
        @foreach($reg as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->categoria->name}}</td>
                <td>{{$item->title}}</td>
                <td><img height="50" src="{{asset($item->image)}}"> </td>
                <td>{{(isset($item->status) AND $item->status) ? 'Ativo' : 'Inivativo' }}</td>
                <td>
                    <a class="btn blue darken-3" href="{{route('painel.blog.edita',$item->id)}}">Editar</a>
                    <a class="btn red" href="{{route('painel.blog.delete',$item->id)}}">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
