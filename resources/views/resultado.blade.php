<!DOCTYPE html>
<html lang="en">
    <link href="/css/app.css" rel="stylesheet" />
<?php
    $dimensoes = [
        // Mapeie cada pergunta para sua dimensão
        1 => 'Estratégia', 2 => 'Estratégia', 3 => 'Estratégia', 4 => 'Estratégia',
        5 => 'Liderança', 6 => 'Liderança', 7 => 'Liderança', 8 => 'Liderança',
        9 => 'Mercado', 10 => 'Mercado', 11 => 'Mercado', 12 => 'Mercado',
        13 => 'Operações', 14 => 'Operações', 15 => 'Operações', 16 => 'Operações',
        17 => 'Pessoas', 18 => 'Pessoas', 19 => 'Pessoas', 20 => 'Pessoas',
        21 => 'Cultura', 22 => 'Cultura', 23 => 'Cultura', 24 => 'Cultura',
        25 => 'Governança', 26 => 'Governança', 27 => 'Governança', 28 => 'Governança',
        29 => 'Tecnologia', 30 => 'Tecnologia', 31 => 'Tecnologia', 32 => 'Tecnologia',
        // ... (faça isso para as outras perguntas)
    ];

    $mediaPorDimensao = [];

    // Calcular a soma dos valores para cada dimensão
    foreach ($ratings as $questionId => $rating) {
        $dimensao = $dimensoes[$questionId] ?? 'Outras'; // Use 'Outras' se não houver dimensão mapeada
        $mediaPorDimensao[$dimensao]['soma'] = ($mediaPorDimensao[$dimensao]['soma'] ?? 0) + $rating;
        $mediaPorDimensao[$dimensao]['count'] = ($mediaPorDimensao[$dimensao]['count'] ?? 0) + 1;
    }

    // Calcular a média para cada dimensão
    foreach ($mediaPorDimensao as $dimensao => $info) {
        $mediaPorDimensao[$dimensao]['media'] = $info['soma'] / $info['count'];
    }

    // Calcular a soma dos valores das perguntas
    $somaValores = array_sum($ratings);

    // Calcular o número total de perguntas
    $numeroPerguntas = count($ratings);

    // Calcular a média geral
    $mediaValores = ($numeroPerguntas > 0) ? $somaValores / $numeroPerguntas : 0;

    // Definir categorias
    function definirCategoria($valor) {
        if ($valor >= 1 && $valor <= 2.5) {
            return "Baixo";
        } elseif ($valor > 2.5 && $valor < 4) {
            return "Médio";
        } elseif ($valor >= 4 && $valor <= 5) {
            return "Alto";
        } else {
            return "N/A";
        }
    }
?>

<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Início</a></li>
            <li><a href="{{ route('learnmore') }}">Saiba mais</a></li>
            <li><a href="{{ route('aboutus') }}">Sobre nós</a></li>
        </ul>
    </nav>
</header>


<body>

    <div class="overlay">
        <h3>Resultados do Formulário</h3>

        <p class="texto-maturidade">Nível da maturidade digital: {{ $mediaValores }} ({{ definirCategoria($mediaValores) }})</p>

        <p class="texto-maturidade">Nível por dimensão</p>
        <ul>
            @foreach ($mediaPorDimensao as $dimensao => $info)
                <p class="texto-maturidade">{{ $dimensao }}: {{ $info['media'] ?? 'N/A' }} ({{ definirCategoria($info['media']) }})</p>
            @endforeach
        </ul>

    </div>

</body>

</html>
