@extends('tema.site.layout-interno')


@section('title','Contato')
@section('subtitle','Contato')
@section('banner',asset('images/background/bg-page-title-1.jpg'))

@section('content')


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
        {{ csrf_field() }}
    </form>

@endsection
