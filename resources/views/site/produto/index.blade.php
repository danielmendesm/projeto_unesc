@extends('tema.site.layout')
@section('title','Produtos')
@section('subtitle','Produtos')

@section('content')

        @foreach($produtos as $item)
            <p>Produto: {{ $item['nome'] }} - Valor: {{ $item['valor'] }}
                - Estado: {{ $item['estado'] }}</p>
        @endforeach

@endsection
