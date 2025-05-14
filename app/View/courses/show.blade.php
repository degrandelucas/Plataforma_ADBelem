<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Curso</title>
</head>
<body>
<h1>Detalhes do Curso</h1>

@if(isset($course))
    <h2>{{ $course->name }}</h2>
    <p>{{ $course->description }}</p>

    <h3>Módulos:</h3>

    @if($course->modules->count() > 0)
        <p>Este curso tem {{ $course->modules->count() }} módulos (a variável $course->modules está disponível).</p>
    @else
        <p>Este curso ainda não tem módulos.</p>
    @endif

@else
    <p>Curso não encontrado.</p>
@endif

</body>
</html>
