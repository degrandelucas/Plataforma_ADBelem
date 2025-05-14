<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cursos</title>
</head>
<body>
<h1>Todos os Cursos Publicados</h1>

<p>Conteúdo da lista de cursos...</p>

@if(isset($courses))
    <p>A variável $courses está disponível na view!</p>
    {{-- {{ dd($courses) }} --}} {{-- Use this to see the contents of the variable during development --}}@else
    <p>A variável $courses NÃO está disponível.</p>
@endif

</body>
</html>
