<!DOCTYPE html>
    <html>
    <head>
        <title>Lista de Cursos</title>
    </head>
    <body>
    <h1>Todos os Cursos Publicados</h1>

    {{-- Verifica se a variável $courses existe e não está vazia --}}
    @if(isset($courses) && $courses->count() > 0)
        <h2>Cursos:</h2>
        <ul>
            {{-- Itera sobre cada curso na coleção $courses --}}
            @foreach($courses as $course)
                <li>
                    {{-- Exibe o nome do curso --}}
                    {{ $course->name }}
                    {{-- Futuramente, aqui colocaremos um link para a página de detalhes do curso --}}
                </li>
            @endforeach
        </ul>
    @else
        {{-- Mensagem se não houver cursos publicados --}}
        <p>Não há cursos publicados no momento.</p>
    @endif

    </body>
</html>
