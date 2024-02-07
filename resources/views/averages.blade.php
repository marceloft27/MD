<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Médias</title>
</head>
<body>
    <h1>Médias</h1>
    <p>Média Geral: {{ $overallAverage }}</p>
    {{-- Exiba as médias para cada dimensão --}}
    @foreach ($dimensionAverages as $dimension => $average)
        <p>{{ $dimension }} Média: {{ $average }}</p>
    @endforeach
</body>
</html>
