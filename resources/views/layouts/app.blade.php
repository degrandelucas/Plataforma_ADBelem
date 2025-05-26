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
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/utilities.js'])
    </head>

    <body class="#fafafa grey lighten-5"> {{-- Classe base do Materialize para fundo cinza claro --}}
        <div class="navbar-fixed">
        {{-- Navbar do Materialize --}}
            <nav class="indigo darken-3"> {{-- Cor da Navbar --}}
                <div class="nav-wrapper">
                    <a href="{{ url('/courses') }}" class="brand-logo hide-on-med-and-down"><img src="{{ asset('img/logo-curso.svg') }}" alt="logo-curso"></a> {{-- Logo/Nome do Site --}}

                    {{-- Ícone de Hamburguer para Mobile (sidenav-trigger) --}}
                    {{-- O 'data-target' deve corresponder ao 'id' do <ul> do sidenav abaixo --}}
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                    {{-- Links do Menu para Desktop (escondidos em telas pequenas) --}}
                    <ul class="right hide-on-med-and-down">
                        <li><a href="{{ url('/courses') }}">Cursos</a></li>
                        <li><a href="{{ url('#contact') }}">Contato</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        {{-- Menu Lateral para Mobile (Sidenav) --}}
        {{-- O 'id' deve corresponder ao 'data-target' do sidenav-trigger acima --}}
        <ul class="sidenav" id="mobile-demo">
            <li><a href="{{ url('/courses') }}">Cursos</a></li>
            <li><a href="{{ url('#contact') }}">Contato</a></li>
        </ul>

        <div class="container"> {{-- Container principal do Materialize para centralizar o conteúdo --}}
            @yield('content') {{-- Aqui o conteúdo específico de cada página será injetado --}}
        </div>

        <footer id="contact" class="page-footer indigo darken-3"> {{-- Ex: cor cinza escura para o rodapé --}}
            <div class="container">
                <div class="row">
                    <div class="col l6 s12 rodape-about-us">
                        <h5 class="white-text">Sobre Nós</h5>
                        <p class="grey-text text-lighten-3">O Instituto Bíblico do Circuito das Águas, fundado no ano 2000,  é uma escola teológica mantida pela Igreja Evangélica Assembleia de Deus Ministério do Belém - Campo do Circuito das Águas- com sua sede em Amparo/SP</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <div class="l4 offset-l2 s12">
                            <h5 class="white-text">Links Úteis</h5>
                            <ul class="col">
                                <li class="row">
                                    <a class="grey-text text-lighten-3" href="https://g.co/kgs/g1Ye1uD" target="_blank"><img class="image-footer add_to_queue" src="https://www.svgrepo.com/show/513552/location-pin.svg" alt="Localização">Localização em Amparo/SP
                                    </a>
                                </li>
                                <li class="row">
                                    <a class="grey-text text-lighten-3" href="https://www.youtube.com/adbelemamparooficial" target="_blank"><img class="image-footer" src="https://www.svgrepo.com/show/475700/youtube-color.svg" alt="Canal-Youtube">Youtube Oficial
                                    </a>
                                </li>
                                <li class="row">
                                    <a class="grey-text text-lighten-3" href="https://www.facebook.com/adbelemamparo" target="_blank"><img class="image-footer" src="https://www.svgrepo.com/show/475647/facebook-color.svg" alt="Pagina-Facebook">Facebook Oficial
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="indigo darken-4"> {{-- Cor mais escura para a seção de copyright --}}
                <div class="container">
                    <p>Copyright &copy<span id="year-copyright"></span> Igreja Evangélica Assembleia de Deus Ministério do Belém</p>
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
    </body>
</html>
