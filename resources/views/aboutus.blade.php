<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sobre a Equipe</title>
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

    <div class="overlay-container">
        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="https://images.pexels.com/photos/845457/pexels-photo-845457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nome do Membro 1">
                <h3>Marcelo de Rezende Pinto</h3>
                <p> É agora docente e pesquisador no Programa de Pós-Graduação em Administração da Pontifícia Universidade Católica de Minas Gerais. Seus principais interesses de pesquisa incluem comportamento do consumidor e marketing. Ele publicou estudos em periódicos como Technology in Society, Tourism & Management Studies e Brazilian Business Review. </p>
            </div>
        </div>

        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="{{ asset('images/363250936_780463780493832_6912996092361651767_n.jpg') }}" alt="Nome do Membro 1">
                <h3>Paula Karina Salume</h3>
                <p> Atualmente é professora e pesquisadora no Departamento de Ciências Administrativas e Contábeis da Universidade Federal de São João del-Rei. Ela obteve seu Doutorado em Administração de Empresas pela Pontifícia Universidade Católica de Minas Gerais. Seus principais interesses de pesquisa incluem transformação digital, inovação e empreendedorismo, e gestão de projetos. Atualmente, ela é diretora de um projeto de pesquisa sobre a maturidade digital do setor agrícola. </p>
            </div>
        </div>

        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="https://images.pexels.com/photos/762080/pexels-photo-762080.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nome do Membro 1">
                <h3>Marcelo Werneck Barbosa</h3>
                <p> É membro do Departamento de Economia Agrícola da Pontifícia Universidade Católica do Chile. Possui Mestrado em Ciências da Computação, além de um Doutorado em Administração de Empresas pela Universidade Federal de Minas Gerais, Brasil. Seus principais interesses de pesquisa abrangem transformação digital, gestão sustentável da cadeia de suprimentos e cadeias agroalimentares. Publicou artigos em periódicos renomados, incluindo International Journal of Production Economics, Journal of Cleaner Production, entre outros.  </p>
            </div>
        </div>

        <div class="overlay1">
            <div class="membro">
                <img class="foto-membro" src="https://images.pexels.com/photos/762080/pexels-photo-762080.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Nome do Membro 1">
                <h3>Paulo Renato de Sousa</h3>
                <p> Possui Doutorado em Transferência de Conhecimento em Administração de Empresas, Mestrado e Bacharelado em Administração de Empresas pela Pontifícia Universidade Católica de Minas Gerais, é professor e pesquisador na Fundação Dom Cabral (FDC), com enfoque em compras, desenvolvimento de fornecedores e logística. Autor de diversos artigos em revistas renomadas como Supply Chain Management: An International Journal, International Journal of Information Management, entre outros. </p>
            </div>
        </div>

    </div>


    <!-- Outras seções e conteúdo podem ser adicionados aqui -->

    <!-- Adicione o link para seus scripts JavaScript aqui, se necessário -->

</body>

</html>
