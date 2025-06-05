<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        @vite(['resources/css/app.css','resources/js/app.js','resources/js/utilities.js'])
    </head>

    <body class="grey lighten-5">

        <div class="navbar-fixed">
            <nav class="indigo darken-3">
                <div class="nav-wrapper">
                    {{-- Inclui a navegação dinâmica --}}
                    @include('layouts.navigation')
                </div>
            </nav>
        </div>

        {{-- O Dropdown e Sidenav devem estar fora da nav-fixed e antes da </body> para serem inicializados corretamente --}}
        @auth
            <ul id="userDropdown" class="dropdown-content">
                <li><a href="{{ route('profile.edit') }}" class="indigo-text text-darken-3">Perfil</a></li>
                <li class="divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="indigo-text text-darken-3">Sair</a>
                    </form>
                </li>
            </ul>
        @endauth

        {{-- Menu Lateral para Mobile (Sidenav) --}}
        <ul class="sidenav" id="mobile-demo">
            {{-- Links Visíveis para Todos --}}
            <li><a href="{{ route('courses.index') }}" class="indigo-text text-darken-3">Cursos</a></li>
            <li><a href="{{ route('pages.about') }}" class="indigo-text text-darken-3">Sobre</a></li>

            @guest
                <li class="divider"></li>
                <li><a href="{{ route('login') }}" class="indigo-text text-darken-3">Login</a></li>
                <li><a href="{{ route('register') }}" class="indigo-text text-darken-3">Registro</a></li>
            @endguest

            @auth
                <li class="divider"></li>
                <li><a href="{{ route('dashboard') }}" class="indigo-text text-darken-3">Dashboard</a></li>
                <li><a href="{{ route('profile.edit') }}" class="indigo-text text-darken-3">Perfil ({{ Auth::user()->name }})</a></li>
                <li class="divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="indigo-text text-darken-3">Sair</a>
                    </form>
                </li>
            @endauth
        </ul>

        <div class="container"> {{-- Container principal do Materialize para centralizar o conteúdo --}}
            @yield('content') {{-- Aqui o conteúdo específico de cada página será injetado --}}
        </div>

        <footer>
            <div class="footer-content indigo darken-3 white-text"> {{-- Cor mais escura para a seção de copyright --}}
                <div>
                    <p>Copyright © <span id="year-copyright"></span> AD Belém</p>
                </div>
                <div>
                    <p>Dev. <a href="https://lucasdegrande.com" target="_blank"> Lucas Degrande</a></p>
                </div>
            </div>
        </footer>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            // Script para inicializar componentes do Materialize (ex: dropdowns, modais, etc.)
            document.addEventListener('DOMContentLoaded', function() {
                M.AutoInit();
            });
        </script>
        {{-- Onde os scripts dos componentes (dropdown, sidenav) serão empilhados --}}
        @stack('scripts')
    </body>
</html>
