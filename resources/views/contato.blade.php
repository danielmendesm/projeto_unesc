@extends('tema.site.layout')

@section('title','Contato')

@section('content')
    <div class="title m-b-md">
        Formulário de contato
    </div>

    <div class="links">
        <a href="http://localhost:8000/">Home</a>
        <a href="http://localhost:8000/sobre">Sobre</a>
        <a href="http://localhost:8000/produtos">Produtos</a>
        <a href="http://localhost:8000/contato">Contato</a>
    </div>
    <form method="post" action="/contato">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="submit" value="Enviar">
        {{ csrf_field() }}
    </form>
    <hr>
    PUT
    <form method="post" action="/contato">
        <input type="text" name="nome" placeholder="Nome">
        <input type="email" name="email" placeholder="E-mail">
        <input type="submit" value="Enviar">
        <input type="hidden" name="_method" value="put">
        {{ csrf_field() }}sdasdsa
    </form>
@endsection


        