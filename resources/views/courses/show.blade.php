<!DOCTYPE html>
<html>
    <head>
        <title>Detalhes do Curso: {{ $course->name ?? 'Curso não encontrado' }}</title>
    </head>
    <body>
        @extends('layouts.app') {{-- Extende o layout base --}}

        @section('title', $course->name ?? 'Curso não encontrado') {{-- Preenche o título da página --}}

        @section('content') {{-- Começa a seção de conteúdo --}}
        @if(isset($course))
            <h1 class="center-align">{{ $course->name }}</h1> {{-- Centraliza o título --}}

            @if($course->thumbnail)
                <img src="{{ $course->thumbnail }}" class="responsive-img z-depth-1" alt="Capa do Curso"> {{-- Classes Materialize para imagem responsiva e sombra --}}
            @endif

            <div class="card"> {{-- Usa um card Materialize para a descrição --}}
                <div class="card-content">
                    <span class="card-title">Descrição:</span>
                    <p>{{ $course->description }}</p>
                </div>
            </div>

            <h2 class="center-align">Módulos do Curso</h2>
            @if($course->modules->count() > 0)
                <div class="collection"> {{-- Classe Materialize para a lista de módulos --}}
                    @foreach($course->modules as $module)
                        <div class="collection-item">
                            <h5>{{ $module->order}}. {{ $module->name }}</h5>
                            <p>Descrição: {{ $module->description }}</p>
                            @if($module->video_url)
                                <p>Link do Vídeo: <a href="{{ $module->video_url }}" target="_blank">Assistir Vídeo</a></p>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <div class="card-panel orange lighten-2 white-text">Este curso ainda não possui módulos.</div> {{-- Painel de alerta do Materialize --}}
            @endif

            <br>
            <a href="{{ url('/courses') }}" class="waves-effect waves-light btn #004d40 teal darken-4"><i class="material-icons left">arrow_back</i>Voltar para a lista de cursos</a> {{-- Botão Materialize com ícone --}}

        @else
            <div class="card-panel red lighten-1 white-text">Curso não encontrado.</div> {{-- Painel de alerta de erro do Materialize --}}
        @endif
        @endsection {{-- Termina a seção de conteúdo --}}
    </body>
</html>
