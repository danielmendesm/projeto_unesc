<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title')</title>
</head>

<body>
<header>
    <nav>
        <div class="nav-wrapper blue darken-3">
            <a href="#!" class="brand-logo">Painel Projeto</a>
            <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Site</a></li>
                <li><a href="{{route('painel.home')}}">Dashborad</a></li>
                <li><a href="{{route('painel.blog')}}">Blog</a></li>
                <li><a href="{{route('painel.contato')}}">Contato</a></li>
                <li><a href="#"> - Bem vindo Diego Oliveira |</a> </li>
                <li><a href="#">Sair</a></li>
            </ul>
            <ul class="side-nav" id="mobile">
                <li><a href="/">Site</a></li>
                <li><a href="{{route('painel.home')}}">Dashborad</a></li>
                <li><a href="{{route('painel.blog')}}">Blog</a></li>
                <li><a href="{{route('painel.contato')}}">Contato</a></li>
                <li><a href="#"> - Bem vindo Diego Oliveira |</a> </li>
                <li><a href="#">Sair</a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="container">


    <div class="contato center">
        <h2>@yield('subtitle')</h2>
    </div>
