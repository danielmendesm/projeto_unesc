@extends('tema.site.layout')
@section('title','Produtos')

@section('content')

            
        <div class="title m-b-md">
            Produtos
        </div>

        <div class="links">
            <a href="http://localhost:8000/">Home</a>
            <a href="http://localhost:8000/sobre">Sobre</a>
            <a href="http://localhost:8000/produtos">Produtos</a>
            <a href="http://localhost:8000/contato">Contato</a>
        </div>

        @foreach($produtos as $item)
            <p>Produto: {{ $item['nome'] }} - Valor: {{ $item['valor'] }}
                - Estado: {{ $item['estado'] }}</p>
        @endforeach

        <!-- <div class="title m-b-md">
            <img src="https://www.smviagens.com.br/wp-content/uploads/2018/06/Viagem.jpg" 
             alt="">
        </div> -->

@endsection
