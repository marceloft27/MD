<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maturidade Digital</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet" />
    <style>

.overlay5 {
    display: flex;
    flex-direction: column; /* Ou row, dependendo da orientação desejada */
    align-items: center; /* Ou outro valor dependendo do alinhamento desejado */
    justify-content: center; /* Ou outro valor dependendo do alinhamento desejado */
    position: absolute;
    top: 50%; /* Ajuste conforme necessário */
    left: 50%; /* Ajuste conforme necessário */
    right: 25%; /* Ajuste conforme necessário */
    bottom: 10%; /* Ajuste conforme necessário */
    border: 1px solid #272727; /* Ajuste conforme necessário */
    background-color: rgba(0, 0, 0, 0.52);
    z-index: 1;
    box-sizing: border-box;
    box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
    width: 65%; /* Ajuste conforme necessário */
    height: 100%; /* Ajuste conforme necessário */
    visibility: hidden;
    opacity: 0;
    transition: opacity 2.5s ease-in-out;
}


.overlay5.active {
    visibility: visible;
    opacity: 1;
}
    </style>

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

    <div class="overlay5 active">
        <h3>Dimensão Estratégia</h3>
        <form action="{{ route('rate') }}" method="POST">
            @csrf
            <input type="hidden" name="form_id" value="{{ $formId }}">
            @method('PUT')

            <div class="question">
                <p>Nossa empresa tem implementado uma estratégia digital.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[1]" value="1" id="q1Option1" required>
                    <label for="q1Option1">1</label>

                    <input type="radio" name="ratings[1]" value="2" id="q1Option2">
                    <label for="q1Option2">2</label>

                    <input type="radio" name="ratings[1]" value="3" id="q1Option3">
                    <label for="q1Option3">3</label>

                    <input type="radio" name="ratings[1]" value="4" id="q1Option4">
                    <label for="q1Option4">4</label>

                    <input type="radio" name="ratings[1]" value="5" id="q1Option5">
                    <label for="q1Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>Nossa empresa documenta suas iniciativas digitais.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[2]" value="1" id="q2Option1" required>
                    <label for="q2Option1">1</label>

                    <input type="radio" name="ratings[2]" value="2" id="q2Option2">
                    <label for="q2Option2">2</label>

                    <input type="radio" name="ratings[2]" value="3" id="q2Option3">
                    <label for="q2Option3">3</label>

                    <input type="radio" name="ratings[2]" value="4" id="q2Option4">
                    <label for="q2Option4">4</label>

                    <input type="radio" name="ratings[2]" value="5" id="q2Option5">
                    <label for="q2Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital da nossa empresa tem significativa influência no modelo de negócios e operações.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[3]" value="1" id="q3Option1" required>
                    <label for="q3Option1">1</label>

                    <input type="radio" name="ratings[3]" value="2" id="q3Option2">
                    <label for="q3Option2">2</label>

                    <input type="radio" name="ratings[3]" value="3" id="q3Option3">
                    <label for="q3Option3">3</label>

                    <input type="radio" name="ratings[3]" value="4" id="q3Option4">
                    <label for="q3Option4">4</label>

                    <input type="radio" name="ratings[3]" value="5" id="q3Option5">
                    <label for="q3Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital está sendo continuamente avaliada e adaptada.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[4]" value="1" id="q4Option1" required>
                    <label for="q4Option1">1</label>

                    <input type="radio" name="ratings[4]" value="2" id="q4Option2">
                    <label for="q4Option2">2</label>

                    <input type="radio" name="ratings[4]" value="3" id="q4Option3">
                    <label for="q4Option3">3</label>

                    <input type="radio" name="ratings[4]" value="4" id="q4Option4">
                    <label for="q4Option4">4</label>

                    <input type="radio" name="ratings[4]" value="5" id="q4Option5">
                    <label for="q4Option5">5</label>
                </div>
            </div>
            <div class="rating-instructions">
                <p>Preencha o formulário levando em consideração que:</p>
                <ul>
                    <strong>1</strong> - Discordo fortemente
                    <strong>2</strong> - Discordo
                    <strong>3</strong> - Neutro
                    <strong>4</strong> - Concordo
                    <strong>5</strong> - Concordo fortemente
                </ul>
            </div>
        </div>

    </div>

    <div class="overlay5">
        <h3>Dimensão Liderança</h3>
            @csrf
            @method('PUT')

            <div class="question">
                <p>Nossos executivos apoiam a implementação da estratégia digital.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[5]" value="1" id="q5Option1" required>
                    <label for="q5Option1">1</label>

                    <input type="radio" name="ratings[5]" value="2" id="q5Option2">
                    <label for="q5Option2">2</label>

                    <input type="radio" name="ratings[5]" value="3" id="q5Option3">
                    <label for="q5Option3">3</label>

                    <input type="radio" name="ratings[5]" value="4" id="q5Option4">
                    <label for="q5Option4">4</label>

                    <input type="radio" name="ratings[5]" value="5" id="q5Option5">
                    <label for="q5Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital é somente implementada em áreas funcionais isoladas.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[6]" value="1" id="q6Option1" required>
                    <label for="q6Option1">1</label>

                    <input type="radio" name="ratings[6]" value="2" id="q6Option2">
                    <label for="q6Option2">2</label>

                    <input type="radio" name="ratings[6]" value="3" id="q6Option3">
                    <label for="q6Option3">3</label>

                    <input type="radio" name="ratings[6]" value="4" id="q6Option4">
                    <label for="q6Option4">4</label>

                    <input type="radio" name="ratings[6]" value="5" id="q6Option5">
                    <label for="q6Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>A cultura da liderança em nossa empresa é baseada na transparência, cooperação e descentralização dos processos de tomada de decisão.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[7]" value="1" id="q7Option1" required>
                    <label for="q7Option1">1</label>

                    <input type="radio" name="ratings[7]" value="2" id="q7Option2">
                    <label for="q7Option2">2</label>

                    <input type="radio" name="ratings[7]" value="3" id="q7Option3">
                    <label for="q7Option3">3</label>

                    <input type="radio" name="ratings[7]" value="4" id="q7Option4">
                    <label for="q7Option4">4</label>

                    <input type="radio" name="ratings[7]" value="5" id="q7Option5">
                    <label for="q7Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>A estratégia digital da nossa empresa tem uma influência nas tarefas e nos perfis de atuação dos executivos.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[8]" value="1" id="q8Option1" required>
                    <label for="q8Option1">1</label>

                    <input type="radio" name="ratings[8]" value="2" id="q8Option2">
                    <label for="q8Option2">2</label>

                    <input type="radio" name="ratings[8]" value="3" id="q8Option3">
                    <label for="q8Option3">3</label>

                    <input type="radio" name="ratings[8]" value="4" id="q8Option4">
                    <label for="q8Option4">4</label>

                    <input type="radio" name="ratings[8]" value="5" id="q8Option5">
                    <label for="q8Option5">5</label>
                </div>
            </div>

        </div>
    </div>

    <div class="overlay5">
        <h3>Dimensão Mercado</h3>
        @csrf
        @method('PUT')
        <div class="question">
            <p>Produtos e serviços digitais estão integrados em nossas interfaces e processos de negócios e criam um impacto perceptível na experiência do cliente.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[9]" value="1" id="q9Option1" required>
                <label for="q9Option1">1</label>

                <input type="radio" name="ratings[9]" value="2" id="q9Option2">
                <label for="q9Option2">2</label>

                <input type="radio" name="ratings[9]" value="3" id="q9Option3">
                <label for="q9Option3">3</label>

                <input type="radio" name="ratings[9]" value="4" id="q9Option4">
                <label for="q9Option4">4</label>

                <input type="radio" name="ratings[9]" value="5" id="q9Option5">
                <label for="q9Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Existe em nossa empresa uma criação direta de valor agregado por meio da digitalização progressiva de produtos e serviços (ex.: redução de custo, aumento de produtividade, melhoria na experiência do cliente, diferenciação do cliente).</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[10]" value="1" id="q10Option1" required>
                <label for="q10Option1">1</label>

                <input type="radio" name="ratings[10]" value="2" id="q10Option2">
                <label for="q10Option2">2</label>

                <input type="radio" name="ratings[10]" value="3" id="q10Option3">
                <label for="q10Option3">3</label>

                <input type="radio" name="ratings[10]" value="4" id="q10Option4">
                <label for="q10Option4">4</label>

                <input type="radio" name="ratings[10]" value="5" id="q10Option5">
                <label for="q10Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Produtos e serviços digitais têm um largo impacto no desempenho geral da nossa empresa.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[11]" value="1" id="q11Option1" required>
                <label for="q11Option1">1</label>

                <input type="radio" name="ratings[11]" value="2" id="q11Option2">
                <label for="q11Option2">2</label>

                <input type="radio" name="ratings[11]" value="3" id="q11Option3">
                <label for="q11Option3">3</label>

                <input type="radio" name="ratings[11]" value="4" id="q11Option4">
                <label for="q11Option4">4</label>

                <input type="radio" name="ratings[11]" value="5" id="q11Option5">
                <label for="q11Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Nossa empresa está criando volume significativo de vendas por meio de canais digitais.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[12]" value="1" id="q12Option1" required>
                <label for="q12Option1">1</label>

                <input type="radio" name="ratings[12]" value="2" id="q12Option2">
                <label for="q12Option2">2</label>

                <input type="radio" name="ratings[12]" value="3" id="q12Option3">
                <label for="q12Option3">3</label>

                <input type="radio" name="ratings[12]" value="4" id="q12Option4">
                <label for="q12Option4">4</label>

                <input type="radio" name="ratings[12]" value="5" id="q12Option5">
                <label for="q12Option5">5</label>
            </div>
        </div>
    </div>

    </div>

    <div class="overlay5">
        <h3>Dimensão Operações</h3>
        @csrf
        @method('PUT')
        <div class="question">
            <p>Existem recursos suficientes (tempo, pessoas, orçamento) disponível para implementar a estratégia digital dentro da nossa empresa.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[13]" value="1" id="q13Option1" required>
                <label for="q13Option1">1</label>

                <input type="radio" name="ratings[13]" value="2" id="q13Option2">
                <label for="q13Option2">2</label>

                <input type="radio" name="ratings[13]" value="3" id="q13Option3">
                <label for="q13Option3">3</label>

                <input type="radio" name="ratings[13]" value="4" id="q13Option4">
                <label for="q13Option4">4</label>

                <input type="radio" name="ratings[13]" value="5" id="q13Option5">
                <label for="q13Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Nós estabelecemos uma forte cooperação multidisciplinar e cocriação entre as partes interessadas através da nossa cadeia de valor.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[14]" value="1" id="q14Option1" required>
                <label for="q14Option1">1</label>

                <input type="radio" name="ratings[14]" value="2" id="q14Option2">
                <label for="q14Option2">2</label>

                <input type="radio" name="ratings[14]" value="3" id="q14Option3">
                <label for="q14Option3">3</label>

                <input type="radio" name="ratings[14]" value="4" id="q14Option4">
                <label for="q14Option4">4</label>

                <input type="radio" name="ratings[14]" value="5" id="q14Option5">
                <label for="q14Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Processos físicos e digitais são totalmente integrados por meio de modelos de processos holísticos.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[15]" value="1" id="q15Option1" required>
                <label for="q15Option1">1</label>

                <input type="radio" name="ratings[15]" value="2" id="q15Option2">
                <label for="q15Option2">2</label>

                <input type="radio" name="ratings[15]" value="3" id="q15Option3">
                <label for="q15Option3">3</label>

                <input type="radio" name="ratings[15]" value="4" id="q15Option4">
                <label for="q15Option4">4</label>

                <input type="radio" name="ratings[15]" value="5" id="q15Option5">
                <label for="q15Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>A força da nossa estratégia digital é conduzida para inovações em operações.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[16]" value="1" id="q16Option1" required>
                <label for="q16Option1">1</label>

                <input type="radio" name="ratings[16]" value="2" id="q16Option2">
                <label for="q16Option2">2</label>

                <input type="radio" name="ratings[16]" value="3" id="q16Option3">
                <label for="q16Option3">3</label>

                <input type="radio" name="ratings[16]" value="4" id="q16Option4">
                <label for="q16Option4">4</label>

                <input type="radio" name="ratings[16]" value="5" id="q16Option5">
                <label for="q16Option5">5</label>
            </div>
        </div>

    </div>
    </div>

    <div class="overlay5">
        <h3>Dimensão Pessoas</h3>
        @csrf
        @method('PUT')

        <div class="question">
            <p>Dentro da nossa empresa existem especialistas em questões centrais relacionadas à transformação digital.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[17]" value="1" id="q17Option1" required>
                <label for="q17Option1">1</label>

                <input type="radio" name="ratings[17]" value="2" id="q17Option2">
                <label for="q17Option2">2</label>

                <input type="radio" name="ratings[17]" value="3" id="q17Option3">
                <label for="q17Option3">3</label>

                <input type="radio" name="ratings[17]" value="4" id="q17Option4">
                <label for="q17Option4">4</label>

                <input type="radio" name="ratings[17]" value="5" id="q17Option5">
                <label for="q17Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Dentro da nossa empresa, oportunidades de educação futura para tópicos centrais da transformação digital estão disponíveis.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[18]" value="1" id="q18Option1" required>
                <label for="q18Option1">1</label>

                <input type="radio" name="ratings[18]" value="2" id="q18Option2">
                <label for="q18Option2">2</label>

                <input type="radio" name="ratings[18]" value="3" id="q18Option3">
                <label for="q18Option3">3</label>

                <input type="radio" name="ratings[18]" value="4" id="q18Option4">
                <label for="q18Option4">4</label>

                <input type="radio" name="ratings[18]" value="5" id="q18Option5">
                <label for="q18Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Dentro da nossa empresa, medidas abrangentes para fortalecer a alfabetização digital são implementadas.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[19]" value="1" id="q19Option1" required>
                <label for="q19Option1">1</label>

                <input type="radio" name="ratings[19]" value="2" id="q19Option2">
                <label for="q19Option2">2</label>

                <input type="radio" name="ratings[19]" value="3" id="q19Option3">
                <label for="q19Option3">3</label>

                <input type="radio" name="ratings[19]" value="4" id="q19Option4">
                <label for="q19Option4">4</label>

                <input type="radio" name="ratings[19]" value="5" id="q19Option5">
                <label for="q19Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Dentro da nossa empresa, novos perfis de trabalho têm sido criados para empregados com perícia em tópicos centrais da transformação digital.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[20]" value="1" id="q20Option1" required>
                <label for="q20Option1">1</label>

                <input type="radio" name="ratings[20]" value="2" id="q20Option2">
                <label for="q20Option2">2</label>

                <input type="radio" name="ratings[20]" value="3" id="q20Option3">
                <label for="q20Option3">3</label>

                <input type="radio" name="ratings[20]" value="4" id="q20Option4">
                <label for="q20Option4">4</label>

                <input type="radio" name="ratings[20]" value="5" id="q20Option5">
                <label for="q20Option5">5</label>
            </div>
        </div>
    </div>
    </div>

    <div class="overlay5">
        <h3>Dimensão Cultura</h3>
        @csrf
        @method('PUT')
        <div class="question">
            <p>Decisões dentro da nossa empresa são transparentes para nossos próprios empregados.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[21]" value="1" id="q21Option1" required>
                <label for="q21Option1">1</label>

                <input type="radio" name="ratings[21]" value="2" id="q21Option2">
                <label for="q21Option2">2</label>

                <input type="radio" name="ratings[21]" value="3" id="q21Option3">
                <label for="q21Option3">3</label>

                <input type="radio" name="ratings[21]" value="4" id="q21Option4">
                <label for="q21Option4">4</label>

                <input type="radio" name="ratings[21]" value="5" id="q21Option5">
                <label for="q21Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>A digitalização tem impacto na agilidade da tomada de decisão da nossa empresa.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[22]" value="1" id="q22Option1" required>
                <label for="q22Option1">1</label>

                <input type="radio" name="ratings[22]" value="2" id="q22Option2">
                <label for="q22Option2">2</label>

                <input type="radio" name="ratings[22]" value="3" id="q22Option3">
                <label for="q22Option3">3</label>

                <input type="radio" name="ratings[22]" value="4" id="q22Option4">
                <label for="q22Option4">4</label>

                <input type="radio" name="ratings[22]" value="5" id="q22Option5">
                <label for="q22Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>No dia a dia dos negócios, empregados e executivos trocam informações sobre a transformação digital da nossa empresa.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[23]" value="1" id="q23Option1" required>
                <label for="q23Option1">1</label>

                <input type="radio" name="ratings[23]" value="2" id="q23Option2">
                <label for="q23Option2">2</label>

                <input type="radio" name="ratings[23]" value="3" id="q23Option3">
                <label for="q23Option3">3</label>

                <input type="radio" name="ratings[23]" value="4" id="q23Option4">
                <label for="q23Option4">4</label>

                <input type="radio" name="ratings[23]" value="5" id="q23Option5">
                <label for="q23Option5">5</label>
            </div>
        </div>

        <div class="question">
            <p>Mudança contínua é parte da nossa cultura corporativa.</p>
            <div class="rating-buttons">
                <input type="radio" name="ratings[24]" value="1" id="q24Option1" required>
                <label for="q24Option1">1</label>

                <input type="radio" name="ratings[24]" value="2" id="q24Option2">
                <label for="q24Option2">2</label>

                <input type="radio" name="ratings[24]" value="3" id="q24Option3">
                <label for="q24Option3">3</label>

                <input type="radio" name="ratings[24]" value="4" id="q24Option4">
                <label for="q24Option4">4</label>

                <input type="radio" name="ratings[24]" value="5" id="q24Option5">
                <label for="q24Option5">5</label>
            </div>
        </div>

    </div>
    </div>

    <div class="overlay5">
            <h3>Dimensão Governança</h3>
                @csrf
                @method('PUT')
                <div class="question">
                    <p>Diretrizes para o uso de tecnologias digitais são comunicadas e usadas pelos empregados.</p>
                    <div class="rating-buttons">
                        <input type="radio" name="ratings[25]" value="1" id="q25Option1" required>
                        <label for="q25Option1">1</label>

                        <input type="radio" name="ratings[25]" value="2" id="q25Option2">
                        <label for="q25Option2">2</label>

                        <input type="radio" name="ratings[25]" value="3" id="q25Option3">
                        <label for="q25Option3">3</label>

                        <input type="radio" name="ratings[25]" value="4" id="q25Option4">
                        <label for="q25Option4">4</label>

                        <input type="radio" name="ratings[25]" value="5" id="q25Option5">
                        <label for="q25Option5">5</label>
                    </div>
                </div>

                <div class="question">
                    <p>Nossa empresa implementa um modelo de gestão holístico para a estratégia digital e métricas-chave correspondentes.</p>
                    <div class="rating-buttons">
                        <input type="radio" name="ratings[26]" value="1" id="q26Option1" required>
                        <label for="q26Option1">1</label>

                        <input type="radio" name="ratings[26]" value="2" id="q26Option2">
                        <label for="q26Option2">2</label>

                        <input type="radio" name="ratings[26]" value="3" id="q26Option3">
                        <label for="q26Option3">3</label>

                        <input type="radio" name="ratings[26]" value="4" id="q26Option4">
                        <label for="q26Option4">4</label>

                        <input type="radio" name="ratings[26]" value="5" id="q26Option5">
                        <label for="q26Option5">5</label>
                    </div>
                </div>

                <div class="question">
                    <p>As métricas-chave para a estratégia digital estão totalmente integradas ao controle.</p>
                    <div class="rating-buttons">
                        <input type="radio" name="ratings[27]" value="1" id="q27Option1" required>
                        <label for="q27Option1">1</label>

                        <input type="radio" name="ratings[27]" value="2" id="q27Option2">
                        <label for="q27Option2">2</label>

                        <input type="radio" name="ratings[27]" value="3" id="q27Option3">
                        <label for="q27Option3">3</label>

                        <input type="radio" name="ratings[27]" value="4" id="q27Option4">
                        <label for="q27Option4">4</label>

                        <input type="radio" name="ratings[27]" value="5" id="q27Option5">
                        <label for="q27Option5">5</label>
                    </div>
                </div>

                <div class="question">
                    <p>A estratégia corporativa e a estratégia digital estão intensamente conectadas e se complementam.</p>
                    <div class="rating-buttons">
                        <input type="radio" name="ratings[28]" value="1" id="q28Option1" required>
                        <label for="q28Option1">1</label>

                        <input type="radio" name="ratings[28]" value="2" id="q28Option2">
                        <label for="q28Option2">2</label>

                        <input type="radio" name="ratings[28]" value="3" id="q28Option3">
                        <label for="q28Option3">3</label>

                        <input type="radio" name="ratings[28]" value="4" id="q28Option4">
                        <label for="q28Option4">4</label>

                        <input type="radio" name="ratings[28]" value="5" id="q28Option5">
                        <label for="q28Option5">5</label>
                    </div>
                </div>

            </div>
        </div>

        <div class="overlay5">
        <h3>Dimensão Tecnologia</h3>
            @csrf
            @method('PUT')
            <div class="question">
                <p>Nossa empresa utiliza grandes quantidades de dados para otimizar estratégias, processos e produtos.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[29]" value="1" id="q29Option1" required>
                    <label for="q29Option1">1</label>

                    <input type="radio" name="ratings[29]" value="2" id="q29Option2">
                    <label for="q29Option2">2</label>

                    <input type="radio" name="ratings[29]" value="3" id="q29Option3">
                    <label for="q29Option3">3</label>

                    <input type="radio" name="ratings[29]" value="4" id="q29Option4">
                    <label for="q29Option4">4</label>

                    <input type="radio" name="ratings[29]" value="5" id="q29Option5">
                    <label for="q29Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>Dentro da nossa empresa, nós usamos ferramentas para modelagem digital, automação e controle de processos de negócios.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[30]" value="1" id="q30Option1" required>
                    <label for="q30Option1">1</label>

                    <input type="radio" name="ratings[30]" value="2" id="q30Option2">
                    <label for="q30Option2">2</label>

                    <input type="radio" name="ratings[30]" value="3" id="q30Option3">
                    <label for="q30Option3">3</label>

                    <input type="radio" name="ratings[30]" value="4" id="q30Option4">
                    <label for="q30Option4">4</label>

                    <input type="radio" name="ratings[30]" value="5" id="q30Option5">
                    <label for="q30Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>Nossa empresa tem implementado conceitos de local de trabalho digital para toda a empresa. Plataformas digitais são usadas para a colaboração do dia a dia.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[31]" value="1" id="q31Option1" required>
                    <label for="q31Option1">1</label>

                    <input type="radio" name="ratings[31]" value="2" id="q31Option2">
                    <label for="q31Option2">2</label>

                    <input type="radio" name="ratings[31]" value="3" id="q31Option3">
                    <label for="q31Option3">3</label>

                    <input type="radio" name="ratings[31]" value="4" id="q31Option4">
                    <label for="q31Option4">4</label>

                    <input type="radio" name="ratings[31]" value="5" id="q31Option5">
                    <label for="q31Option5">5</label>
                </div>
            </div>

            <div class="question">
                <p>Tecnologias digitais são a mola principal para futuros desenvolvimentos de produtos e serviços.</p>
                <div class="rating-buttons">
                    <input type="radio" name="ratings[32]" value="1" id="q32Option1" required>
                    <label for="q32Option1">1</label>

                    <input type="radio" name="ratings[32]" value="2" id="q32Option2">
                    <label for="q32Option2">2</label>

                    <input type="radio" name="ratings[32]" value="3" id="q32Option3">
                    <label for="q32Option3">3</label>

                    <input type="radio" name="ratings[32]" value="4" id="q32Option4">
                    <label for="q32Option4">4</label>

                    <input type="radio" name="ratings[32]" value="5" id="q32Option5">
                    <label for="q32Option5">5</label>
                </div>
            </div>
            </div>
         </div>

        <div class="overlay5">
        <div class="check">
            <h3>Informações complementares</h3>
            @csrf
            @method('PUT')

                <div class="input-group">
                    <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>


                <div class="input-group">
                    <label for="tempo">Seu tempo de atuação na organização é de:</label>
                    <select name="tempo_atuacao" required>
                        <option value="ate1ano">Até 1 ano</option>
                        <option value="1-3anos">Entre 1 e 3 anos</option>
                        <option value="3-5anos">Entre 3 e 5 anos</option>
                        <option value="mais5anos">Mais de 5 anos</option>
                    </select>
                </div>

                <div class="input-group">
                    <label for="cargo">Indique o cargo que mais se aproxima da sua função atual nesta organização:</label>
                    <select name="cargo" required>
                        <option value="ceo">CEO, Diretor Geral, Superintendente</option>
                        <option value="diretor_operacoes">Diretor/Gerente Operações, Logística e Supply Chain</option>
                        <option value="diretor_compras">Diretor/Gerente de Compras</option>
                        <option value="diretor_marketing">Diretor/Gerente Marketing</option>
                        <option value="diretor_financeiro">Diretor/Gerente Financeiro</option>
                        <option value="diretor_comercial">Diretor/Gerente Comercial e Vendas</option>
                        <option value="diretor_responsabilidade_social">Diretor/Responsabilidade Social Corporativa</option>
                        <option value="diretor_sustentabilidade">Diretor/Sustentabilidade</option>
                        <option value="assistente_operacoes">Assistente/Supervisor Operações, Logística e Supply Chain</option>
                        <option value="assistente_compras">Assistente/Supervisor de Compras</option>
                        <option value="assistente_marketing">Assistente/Supervisor Marketing</option>
                        <option value="assistente_financeiro">Assistente/Supervisor Financeiro</option>
                        <option value="assistente_comercial">Assistente/Supervisor Comercial e Vendas</option>
                        <option value="assistente_responsabilidade_social">Assistente/Responsabilidade Social Corporativa</option>
                        <option value="assistente_sustentabilidade">Assistente/Sustentabilidade</option>
                        <option value="outro_cargo">Outro</option>
                    </select>
                </div>


                <div class="input-group">
                    <label for="cidade">Nome da cidade onde se localiza a sede da organização:</label>
                    <input type="text" name="cidade" required>
                 </div>


                <div class="input-group">
                    <label for="estado">Estado onde se localiza a sede da organização:</label>
                    <input type="text" name="estado" required>
                </div>

                <div class="input-group">
                    <label for="ramo">Qual é o ramo de atividade da organização?</label>
                    <select name="ramo_atividade" required>
                        <option value="tecnologia">Indústria</option>
                        <option value="comercio">Comércio</option>
                        <option value="serviõ">Serviço</option>
                        <option value="outro_ramo">Outro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="funcionarios">Número de Funcionários:</label>
                    <select name="num_funcionarios" required>
                        <option value="ate9">Até 9</option>
                        <option value="10-19">De 10 a 19</option>
                        <option value="20-49">De 20 a 49</option>
                        <option value="50-99">De 50 a 99</option>
                        <option value="100-499">De 100 a 499</option>
                        <option value="500-999">De 500 a 999</option>
                        <option value="1000oumais">Maior ou igual a 1000</option>
                    </select>
                </div>

               <div class="form-group">
                    <label for="faturamento">Qual o faturamento anual/arrecadação da organização?</label>
                    <select name="faturamento_anual" required>
                        <option value="ate4.8">Menor ou igual a R$4,8 milhões</option>
                        <option value="4.8-16">Maior que R$4,8 milhões e menor ou igual a R$16 milhões</option>
                        <option value="16-90">Maior que R$16 milhões e menor ou igual a R$90 milhões</option>
                        <option value="90-300">Maior que R$90 milhões e menor ou igual a R$300 milhões</option>
                        <option value="300-500">Maior que R$300 milhões e menor ou igual a R$500 milhões</option>
                        <option value="500-700">Maior que R$500 milhões e menor ou igual a R$700 milhões</option>
                        <option value="700-1000">Maior que R$700 milhões e menor ou igual a R$1 bilhão</option>
                        <option value="maior1000">Maior que 1 bilhão</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="idade">Há quantos anos a organização foi fundada?</label>
                    <select name="idade_organizacao" required>
                        <option value="ate1ano">Menos de 1 ano</option>
                        <option value="1-3anos">Mais de 1 e até 3 anos</option>
                        <option value="3-5anos">Mais de 3 e até 5 anos</option>
                        <option value="5-7anos">Mais de 5 e até 7 anos</option>
                        <option value="7-10anos">Mais de 7 e até 10 anos</option>
                        <option value="mais10anos">Mais de 10 anos</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="areatd">Existe uma área na organização responsável pelo processo de transformação digital?</label>
                    <select name="area_transformacao_digital" required>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="anostd">Há quantos anos a organização iniciou o processo de transformação digital?</label>
                    <select name="anos_transformacao_digital" required>
                        <option value="nao_iniciou">Não iniciou</option>
                        <option value="ate1ano">Menos de 1 ano</option>
                        <option value="1-3anos">Mais de 1 e até 3 anos</option>
                        <option value="3-5anos">Mais de 3 e até 5 anos</option>
                        <option value="5-7anos">Mais de 5 e até 7 anos</option>
                        <option value="7-10anos">Mais de 7 e até 10 anos</option>
                        <option value="mais10anos">Mais de 10 anos</option>
                    </select>
                </div>
            </div>
            <button type="submit" onclick="validarFormulario()">Enviar</button>

    </form>
    </div>
    </div>


    <button onclick="avancaSecao()" class="botao-avancar">Avançar</button>
    <button onclick="retrocedeSecao()" class="botao-retroceder" id="retrocederBtn" style="display: none;">Retornar</button>

    <script>
        let currentIndex = 0;
        const overlays = document.querySelectorAll('.overlay5');
        const retrocederBtn = document.getElementById('retrocederBtn');
        const avancarBtn = document.querySelector('.botao-avancar');

        function avancaSecao() {
            overlays[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % overlays.length;
            overlays[currentIndex].classList.add('active');
            atualizarVisibilidadeBotaoRetroceder();
            verificarExibirBotaoAvancar();
        }

        function retrocedeSecao() {
            if (currentIndex > 0) {
                overlays[currentIndex].classList.remove('active');
                currentIndex = (currentIndex - 1) % overlays.length;
                overlays[currentIndex].classList.add('active');
                atualizarVisibilidadeBotaoRetroceder();
                verificarExibirBotaoAvancar();
            }
        }

        function atualizarVisibilidadeBotaoRetroceder() {
            retrocederBtn.style.display = currentIndex === 0 ? 'none' : 'block';
        }

        function verificarExibirBotaoAvancar() {
            avancarBtn.style.display = currentIndex === overlays.length - 1 ? 'none' : 'block';
        }

        // Adicionando ouvintes de eventos aos botões
        document.getElementById('avancarBtn').addEventListener('click', avancaSecao);
        document.getElementById('retrocederBtn').addEventListener('click', retrocedeSecao);

        // Inicializa a visibilidade do botão "Revisar"
        atualizarVisibilidadeBotaoRetroceder();

        // Adiciona funcionalidade ao botão de rádio
        const radioButtons = document.querySelectorAll('input[type="radio"][name^="ratings"]');
        const labels = document.querySelectorAll('input[type="radio"][name^="ratings"] + label');

        radioButtons.forEach((radioButton, index) => {
            radioButton.addEventListener('change', () => {
                // Remove a classe 'active' de todos os rótulos
                labels.forEach((label) => {
                    label.classList.remove('active');
                });

                // Adiciona a classe 'active' ao rótulo associado ao botão de rádio selecionado
                labels[index].classList.add('active');
            });
        });

        function validarFormulario() {
        // Verifica se pelo menos uma opção de cada grupo de perguntas foi selecionada
        for (let i = 1; i <= 32; i++) {
            const radioButtons = document.querySelectorAll(`input[name="ratings[${i}]"]:checked`);
            if (radioButtons.length === 0) {
                alert(`Parece que nem todas as questões das dimensões foram preenchidas. Por favor revise e tente submeter novamente.`);
                return; // Impede o envio do formulário se uma pergunta não foi respondida
            }
        }

        // Se todas as perguntas foram respondidas, envie o formulário
        document.getElementById($formId).submit();
    }
    </script>


</body>

</html>
