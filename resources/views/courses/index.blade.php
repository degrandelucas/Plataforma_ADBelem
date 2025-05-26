<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Cursos</title>
    </head>
    <body>
        @extends('layouts.app') {{-- Extende o layout base --}}

        @section('title', 'Lista de Cursos') {{-- Preenche o título da página --}}

        @section('content') {{-- Começa a seção de conteúdo --}}
        <h1 class="center-align">Todos os Cursos Publicados</h1>

        @if(isset($courses) && $courses->count() > 0)
            <div class="collection"> {{-- Classe Materialize para uma lista de coleção --}}
                @foreach($courses as $course)
                    <a href="{{ route('courses.show', $course->id) }}" class="collection-item menu-item">
                        {{ $course->name }}
                    </a>
                @endforeach
            </div>
        @else
            <div class="card-panel teal lighten-2 white-text">Não há cursos publicados no momento.</div> {{-- Painel de alerta do Materialize --}}
        @endif
        @endsection {{-- Termina a seção de conteúdo --}}
    </body>
</html>
