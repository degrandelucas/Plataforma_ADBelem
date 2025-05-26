<!DOCTYPE html>
<html>
    <head>
        <title>Detalhes do Curso: {{ $course->name ?? 'Curso não encontrado' }}</title>
    </head>
    <body>
    {{-- Verifica se a variável $course existe --}}
    @if(isset($course))
        <h1>Detalhes do Curso: {{ $course->name }}</h1>

        @if($course->thumbnail)
            <img src="{{ $course->thumbnail }}" alt="Capa do Curso" width="300">
        @endif

        <p><strong>Descrição:</strong> {{ $course->description }}</p>

        <h2>Módulos do Curso:</h2>
        {{-- Verifica se o curso tem módulos e se a coleção de módulos não está vazia --}}
        @if($course->modules->count() > 0)
            <ul>
                {{-- Itera sobre cada módulo do curso --}}
                @foreach($course->modules as $module)
                    <li>
                        <h3>{{ $module->name }}</h3>
                        <p>Descrição: {{ $module->description }}</p>
                        <p>Ordem: {{ $module->order }}</p>
                        @if($module->video_url)
                            <p>Link do Vídeo: <a href="{{ $module->video_url }}" target="_blank">{{ $module->video_url }}</a></p>
                            {{-- Futuramente, você pode usar um embed para mostrar o vídeo diretamente --}}
                        @endif
                        {{-- Futuramente, aqui colocaremos um link para a página de detalhes do módulo --}}
                    </li>
                @endforeach
            </ul>
        @else
            <p>Este curso ainda não possui módulos.</p>
        @endif

        <br>
        <p><a href="{{ url('/courses') }}">Voltar para a lista de cursos</a></p>

    @else
        <p>Curso não encontrado.</p>
    @endif

    </body>
</html>
