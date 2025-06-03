<!DOCTYPE html>
<html>
    <head>
        <title>Detalhes do Curso: {{ $course->name ?? 'Curso não encontrado' }}</title>
    </head>
    <body>
        @extends('layouts.app')

        @section('title', $course->name ?? 'Curso não encontrado')

        @section('content')
        @if(isset($course))
            <h1 class="center-align">{{ $course->name }}</h1>

            @if($course->thumbnail)
                <img src="{{ $course->thumbnail }}" class="responsive-img z-depth-1" alt="Capa do Curso">
            @endif

            <div class="card">
                <div class="card-content">
                    <span class="card-title">Descrição:</span>
                    <p>{{ $course->description }}</p>
                </div>
            </div>

            <h2 class="center-align">Módulos do Curso</h2>
            @if($course->modules->count() > 0)
                <div class="collection">
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
                <div class="card-panel orange lighten-2 white-text">Este curso ainda não possui módulos.</div>
            @endif

            <div>
            <a href="{{ url('/courses') }}" class="waves-effect waves-light btn #004d40 teal darken-4"><i class="material-icons left">arrow_back</i>Voltar para a lista de cursos</a>
            </div>
            <br>
        @else
            <div class="card-panel red lighten-1 white-text">Curso não encontrado.</div>
            <br>
        @endif
        @endsection
    </body>
</html>
