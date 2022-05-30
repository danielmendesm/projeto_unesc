@extends('tema.painel.layout')

@section('title','Blog - Postagens')
@section('subtitle','Editando postagem')

@section('content')

<div class="row">

    <div class="row right">
        <a class="btn blue" href="{{route('painel.blog')}}">Blog</a>
    </div>

    <form action="{{route('painel.blog.edita',$reg->id)}}" enctype="multipart/form-data" method="post">

        {{csrf_field()}}
        @include('painel.blog.form')
        <input type="hidden" name="_method" value="put">
        <button class="btn blue darken-3">Atualizar</button>

    </form>


</div>

@endsection
