@extends('layouts.app')

@section('content')
    {{-- 1. Seção Banner Principal --}}
    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container center-align">
                <br><br>
                <h1 class="header center white-text text-lighten-5">Instituto Bíblico do Circuito das Águas</h1>
                <div class="row center">
                    <h5 class="header-text col s12 light white-text">Capacitando líderes e servos para o Reino de Deus.</h5>
                </div>
                <div class="row center">
                    <a href="{{ route('courses.index') }}" id="download-button" class="btn-large waves-effect waves-light indigo lighten-1">Explore Nossos Cursos</a>
                </div>
                <br><br>
            </div>
        </div>
        <div class="parallax"><img src="https://img.freepik.com/fotos-premium/homem-lendo-a-biblia-sagrada_218381-11429.jpg" alt="Fundo-Estudo-com-Biblia"></div>
    </div>

    {{-- 2. Seção "Sobre o Instituto" --}}
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 m8 offset-m2 center-align">
                    <h4 class="indigo-text text-darken-3">Quem Somos</h4>
                    <p class="flow-text">
                        O Instituto Bíblico do Circuito das Águas, fundado no ano 2000, é uma escola teológica mantida pela Igreja Evangélica Assembleia de Deus Ministério do Belém - Campo do Circuito das Águas - com sua sede em Amparo/SP. Nossa missão é capacitar e preparar líderes e membros para o serviço cristão, com base nos princípios bíblicos e na doutrina pentecostal.
                    </p>
                    <a href="{{ route('pages.about') }}" class="waves-effect waves-light btn indigo lighten-1">Saiba Mais Sobre Nós</a>
                </div>
            </div>
        </div>
    </div>

    {{-- 3. Seção de Destaque dos Cursos --}}
    <div class="container"">
        <div class="section">
            <div class="row">
                <h4 class="center-align indigo-text text-darken-3">Nossos Cursos</h4>
                <p class="center-align flow-text">Oferecemos programas de estudo que transformam vidas e ministérios.</p>

                {{-- Card 1: Curso de Teologia --}}
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="https://via.placeholder.com/400x250/2196F3/FFFFFF?text=Teologia" alt="Curso de Teologia">
                            <span class="card-title">Teologia</span>
                        </div>
                        <div class="card-content">
                            <p>Aprofunde-se nas Escrituras, doutrinas e história do cristianismo. Essencial para o crescimento espiritual e ministerial.</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('courses.index') }}" class="indigo-text text-darken-3">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                {{-- Card 2: Liderança Cristã --}}
                <div class="col s12 m6 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="https://via.placeholder.com/400x250/4CAF50/FFFFFF?text=Liderança" alt="Curso de Liderança">
                            <span class="card-title">Liderança Cristã</span>
                        </div>
                        <div class="card-content">
                            <p>Desenvolva habilidades para liderar com sabedoria e integridade em qualquer esfera da vida e ministério.</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('courses.index') }}" class="indigo-text text-darken-3">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                {{-- Card 3: Missões e Evangelismo --}}
                <div class="col s12 m6 offset-m3 l4">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="https://via.placeholder.com/400x250/FFC107/FFFFFF?text=Missões" alt="Curso de Missões">
                            <span class="card-title">Missões e Evangelismo</span>
                        </div>
                        <div class="card-content">
                            <p>Prepare-se para levar a mensagem do evangelho a todos os povos, culturas e nações.</p>
                        </div>
                        <div class="card-action">
                            <a href="{{ route('courses.index') }}" class="indigo-text text-darken-3">Ver Detalhes</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 center-align"">
                    <a href="{{ route('courses.index') }}" class="btn waves-effect waves-light indigo">Ver Todos os Cursos</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container center-align">
        <h4 class="header indigo-text text-lighten-6">Pronto para começar sua jornada?</h4>
        <div class="row center">
            <a href="{{ route('register') }}" id="register-button" class="btn-large waves-effect waves-light red lighten-1">Matricule-se Agora</a>
            <a href="{{ route('pages.about') }}" id="contact-button" class="btn-large waves-effect waves-light grey darken-2">Fale Conosco</a>
        </div>
    </div>

@endsection

