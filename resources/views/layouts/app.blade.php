<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="#fafafa grey lighten-5"> {{-- Classe base do Materialize para fundo cinza claro --}}
        <div class="navbar-fixed">
        {{-- Navbar do Materialize --}}
            <nav class="#283593 indigo darken-3"> {{-- Cor da Navbar --}}
                <div class="nav-wrapper">
                    <a href="{{ url('/') }}" class="brand-logo">AD Belém Cursos</a> {{-- Logo/Nome do Site --}}

                    {{-- Ícone de Hamburguer para Mobile (sidenav-trigger) --}}
                    {{-- O 'data-target' deve corresponder ao 'id' do <ul> do sidenav abaixo --}}
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    {{-- Links do Menu para Desktop (escondidos em telas pequenas) --}}
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ url('/courses') }}">Cursos</a></li>
                        <li><a href="{{ url('/contact') }}">Contato</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        {{-- Menu Lateral para Mobile (Sidenav) --}}
        {{-- O 'id' deve corresponder ao 'data-target' do sidenav-trigger acima --}}
        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ url('/courses') }}">Cursos</a></li>
            <li><a href="{{ url('/contact') }}">Contato</a></li>
        </ul>

        <div class="container"> {{-- Container principal do Materialize para centralizar o conteúdo --}}
            @yield('content') {{-- Aqui o conteúdo específico de cada página será injetado --}}
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            // Script para inicializar componentes do Materialize (ex: dropdowns, modais, etc.)
            document.addEventListener('DOMContentLoaded', function() {
                M.AutoInit();
            });
        </script>
    </body>
</html>
