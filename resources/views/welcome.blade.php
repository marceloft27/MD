<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maturidade Digital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Início</a></li>
                <li><a href="{{ route('learnmore') }}">Saiba mais</a></li>
                <li><a href="{{ route('aboutus') }}">Sobre nós</a></li>
            </ul>
        </nav>
    </header>

    <div class="overlay">

        <section id="maturidade-digital">
            <h1 class="titulo-maturidade">Maturidade</h1>
            <h2 class="titulo2-maturidade">Digital</h2>
            <p class="texto-maturidade">
                Nosso formulário proporciona uma análise aprofundada do nível de maturidade digital de sua empresa. Respondendo a perguntas criteriosas, obterá uma avaliação precisa da posição digital atual. Esta ferramenta pode ser instrumental na identificação de áreas de melhoria, orientando estratégias para aprimoramento tecnológico, segurança cibernética e eficiência operacional. Este processo oferece uma base objetiva para a evolução digital organizacional. Inicie a avaliação agora.
            </p>
            <a href="{{ route('forms.show') }}" class="botao-teste">Preencha o formulário</a>
            <p class="texto-maturidade49">
                Esta ferramenta foi elaborada com apoio da Fundação de Amparo à Pesquisa de Minas Gerais (FAPEMIG), por meio do financiamento do projeto APQ 01828-21.
            </p>
            </section>
    </div>
</body>


</html>
