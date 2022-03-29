@extends('tema.site.layout')
@section('title','Sobre')

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
                Página {{$page}}
@endsection