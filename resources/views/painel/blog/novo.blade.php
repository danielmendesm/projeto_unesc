@extends('tema.painel.layout')

@section('title','Blog - Postagens')
@section('subtitle','Nova postagem')

@section('content')

<div class="row">

    <div class="row right">
        <a class="btn blue" href="{{route('painel.blog')}}">Blog</a>
    </div>

    <form action="{{route('painel.blog.novo')}}" enctype="multipart/form-data" method="post">

        {{csrf_field()}}
        @include('painel.blog.form')
        <button class="btn blue darken-3">Salvar</button>

    </form>


</div>

@endsection
