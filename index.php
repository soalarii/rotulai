<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="icon" href="imagens/logonav.png" type="imagens/lovonav.png">
    <title>Home</title>

    <style>
        /* FONTE */
        .roboto-thin{
            font-family: "Roboto", sans-serif;
            font-weight: 100;
        }
        .roboto-light{
            font-family: "Roboto", sans-serif;
            font-weight: 300;
        }
        .roboto-regular{
            font-family: "Roboto", sans-serif;
            font-weight: 400;
        }
        .roboto-medium{
            font-family: "Roboto", sans-serif;
            font-weight: 500;
        }
        .roboto-bold{
            font-family: "Roboto", sans-serif;
            font-weight: 700;
        }
        .roboto-black{
            font-family: "Roboto", sans-serif;
            font-weight: 900;
        }
        /* FONTE FIM */

        /* LOGO */
        .logo{
            margin-bottom: 2%;
            margin-top: 2%;
            width: 17%;
        }
        /* FIM LOGO */
       
        /* CORPO, MANTEM A ESTRUTURA CENTRALIZADA */
        body {
            margin: 0;
        }
        .estrutura {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
        /* CORPO FIM */

        /* LISTA NAVEGAÇÃO */
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #006400;
            overflow: hidden;
            opacity: 1.0;
            border-radius: 8px;
            margin-bottom: 1%;
        }
        li a {
            display: block;
            color: white;
            padding: 12px 7px;
            text-decoration: none;
            text-align: center;
            font-size: 170%;
        }
        li a:hover {
            color: white;
            text-decoration: none;
            background-color: #FF3131;
        }
        li {
            float: right;
        }
        .header {
          width: 100%;
          position: -webkit-sticky; /* Necessário para funcionar no Safari */
          position: sticky;
          top: 0;
          z-index: 1000; /* Adicione esta linha */
         
        }
        /* FIM LISTA NAVEGAÇÃO */

        /* PRIMEIRO CONTEUDO */
        .rotulaicont{
            display: flex;
            align-items: center;
            justify-content: center; 
            animation: fade-in 1s ease forwards;
        }
        .titulorotulai{
            flex: 1;
            padding-right: 5px;
            overflow: hidden;
            animation: slideIn 2s forwards;
        }
        .titulorotulaitexto{
            font-size: 280%;
            text-align: left;
            color: #FF3131;
            animation: slideIn 1s forwards;
        }
        .conteudorotulai{
            font-size: 180%;
            text-align: left;
            color: #103907;
        }
        .imagemrotulai{
            max-width: 90%;
            margin-right: 6%;
            animation: fade-in 1s ease forwards;
        }
        /* FIM PRIMEIRO CONTEUDO */

        /* SEGUNDO CONTEUDO CARD */
        .card {
            transition: transform 0.5s ease;
            width: 230px;
            height: 150px;
            background-color: #006400;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            text-align: center;
            display: inline-block;
            vertical-align: top; 
            position: relative;
        }
        .cardcont {
            color: white;
            font-size: 130%;
        }
        .card-container {
            text-align: center;
            background-image: url(imagens/fundocard2.png);
        }
        .card:hover {
            box-shadow: 0 16px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-25px);
            background-color: #FF3131;
        }
        .initial-content,
        .hover-content {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease, visibility 0.5s ease;
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 20px;
            border-radius: 8px;
        }
        .initial-content {
            opacity: 1;
            visibility: visible;
            z-index: 1;
            font-size: 190%;
            color: white;
        }
        .hover-content {
            opacity: 0;
            visibility: hidden;
            z-index: 0;
            color: white;
            font-size: 120%;
        }
        .card:hover .initial-content {
            opacity: 0;
            visibility: hidden;
            z-index: 0;
        }
        .card:hover .hover-content {
            opacity: 1;
            visibility: visible;
            z-index: 1;
        }
        /* FIM SEGUNDO CONTEUDO CARD */

        /* TERCEIRO CONTEUDO */
        .rotulocont{
            display: flex;
            align-items: center;
            justify-content: center; 
            animation: fade-in 3s ease forwards;
        }
        .titulorotulo{
            flex: 1;
            padding-right: 5px;
            overflow: hidden;
            animation: slideIn2 3s forwards;
        }
        .titulorotulotexto{
            font-size: 280%;
            text-align: right;
            color: #FF3131;
        }
        .conteudorotulo{
            font-size: 150%;
            text-align: right;
            color: #103907;
        }
        .imagemrotulo{
            max-width: 90%;
            margin-right: 6%;
        }
        /* FIM TERCEIRO CONTEUDO */

        /* QUARTO CONTEUDO CARD */
        .card2 {
            transition: transform 0.5s ease;
            width: 260px;
            background-color: #006400;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            text-align: center;
            display: inline-block;
            vertical-align: top;
        }
        .h22 {
            font-size: 180%;
            color: white;
        }
        .cardcont2{
            color: white;
            font-size: 120%;
        }
        .card-container3 {
            text-align: center;
            background-image: url(imagens/fundocard2.png);
        }
        .card2:hover {
            box-shadow: 0 16px 16px rgba(0, 0, 0, 0.2);
        }
        .card-container3:hover {
            opacity: 1;
            pointer-events: auto;
        }
        .card2:hover {
            transform: translateY(-25px);
            background-color:#FF3131;
        }
        .card-container4 {
            display: flex;
            justify-content: space-between;
            opacity: 0;
            transition: opacity 0.5s ease;
            pointer-events: none;
        }
        /* FIM QUARTO CONTEUDO CARD */

        /* QUINTO CONTEUDO */
        .acessos{
            font-size: 280%;
            text-align: left;
            color: #FF3131;
        }
        .tituloacessos{
            font-size: 220%;
        }
       .containeracessos {
          display: flex; 
          gap: 13px;              
          padding: 18px;    
          text-align: center;
        }
        .itemacessos {
          padding: 15px;        
          background-color: #ffffff; 
          min-width: 200px;    
          flex: 1;          
        }
        /* FIM QUINTO CONTEUDO */

        /* SEXTO CONTEUDO */
        .carousel {
            width: 100%; /* Ajuste o valor conforme necessário */
            max-width: 150%; /* Ajuste o valor conforme necessário */
            margin: 0 auto;
            position: relative;
            overflow: hidden;
        }

        .slide {
            width: 100%; /* Ajuste o valor conforme necessário */
            display: none;
            text-align: center;
        }

        .slide img {
            width: 100%; /* Ajuste o valor conforme necessário */
            height: auto;
        }

        .active-slide {
            display: block;
        }
        /* FIM SEXTO CONTEUDO */


        /* ANIMACAO DOS CONTEUDOS */
        @keyframes slideIn {
            from {
                transform: translateX(-100%);
            }
            to {
                transform: translateX(0);
            }
        }
        @keyframes slideIn2 {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(0);
            }
        }
        /* FIM ANIMACAO DOS CONTEUDOS */
        
    </style>
</head>
<body>

 
<div class="estrutura container-image">

    <br>
    
    <a href="calculadora.php">
        <img class="logo" src="imagens/logorotulai.png" alt="Logo Rotulaí">
    </a>

    <header class="header">
    <ul>
        <li class="calculadora roboto-light"><strong><a href="calculadora.php" target="_self">&nbsp;&nbsp;ROTULAÍ&nbsp;&nbsp;</a></strong> </li>
        <!-- <li class="roboto-light"><strong><a href="dados.php" target="_self">BASE DE DADOS</a></strong></li> -->
        <li class="roboto-light"><strong><a href="index.php" target="_self">&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></strong></li>
    </ul>
    </header>

    <br>

    <div class="rotulaicont " >
        <div class="titulorotulai"><p class="titulorotulaitexto roboto-black">Uma ferramenta simples e direta<br> para 
        entender melhor a composição nutricional dos alimentos</p>
            <p class="conteudorotulai roboto-medium text">Imagine estar consumindo um alimento e querer saber mais 
            sobre os nutrientes nele presente. Com a <a href="calculadora.php"><strong><span style="color:#FF3131;">Rotulaí</span></strong></a>, você terá informações 
            detalhadas sobre calorias, carboidratos, proteínas, gorduras e 
            outros nutrientes, ajudando a tomar decisões alimentares mais 
            conscientes.</p>
        </div>
        <img class="imagemrotulai " src="imagens/lanchesrotulai.png" width="35%">
    </div>

    <br><br>

    <div class="card-container">
    <div class="card">
        <div class="initial-content h2 roboto-black">Valor Energético (kcal)</div>
        <div class="hover-content roboto-bold">Unidade de medida de energia nos alimentos.</div>
    </div>
    <div class="card">
        <div class="initial-content roboto-black">Carboidratos</div>
        <div class="hover-content roboto-bold">Fonte principal de energia, encontrados em frutas, vegetais e grãos.</div>
    </div>
    <div class="card">
        <div class="initial-content roboto-black">Proteínas</div>
        <div class="hover-content roboto-bold">Blocos de construção para os músculos e tecidos do corpo, presentes em carnes, peixes, ovos, etc.</div>
    </div>
    <div class="card">
        <div class="initial-content roboto-black">Gorduras Totais</div>
        <div class="hover-content roboto-bold">Fonte concentrada de energia, encontrada em óleos, manteiga, nozes, etc.</div>
    </div>
    </div>
    <div class="card-container">
    <div class="card">
        <div class="initial-content roboto-black">Gorduras Saturadas</div>
        <div class="hover-content roboto-bold">Tipo de gordura associado a problemas cardíacos, encontrada em alimentos de origem animal.</div>
    </div>
    <div class="card">
        <div class="initial-content roboto-black">Gorduras Trans</div>
        <div class="hover-content roboto-bold">Tipo de gordura artificial associada a problemas de saúde, encontrada em alimentos processados.</div>
    </div>
    <div class="card">
        <div class="initial-content roboto-black">Fibra</div>
        <div class="hover-content roboto-bold">Importante para a saúde digestiva, encontrada em frutas, vegetais e grãos integrais.</div>
    </div>
    <div class="card">
        <div class="initial-content roboto-black">Sódio</div>
        <div class="hover-content roboto-bold">Mineral essencial para a saúde, mas o excesso pode contribuir para problemas como pressão alta.</div>
    </div>
    </div>

    <br><br>

    <div class="rotulocont">
        <img class="imagemrotulo" src="imagens/alimentos.png" width="35%">
        <div class="titulorotulo"><p class="titulorotulotexto roboto-black">Os rótulos de alimentos são informações detalhadas fornecidas nas embalagens dos produtos alimentícios</p>
            <p class="conteudorotulo roboto-medium">Eles oferecem uma visão clara dos ingredientes, valores nutricionais e informações importantes sobre o produto que você está prestes a consumir. Entender como ler e interpretar esses rótulos é essencial para fazer escolhas alimentares conscientes e saudáveis</p>
        </div>
    </div>

    <br><br>

    <div class="card-container3">
        <div class="card2">
            <h2 class="h22 roboto-black">Informações Nutricionais</h2>
            <p class="cardcont2 roboto-medium" style="margin-bottom: 10%;">Detalhes sobre os nutrientes presentes no alimento, como calorias, gorduras, proteínas, carboidratos, vitaminas e minerais.</p>
        </div>
        <div class="card2">
            <h2 class="h22 roboto-black">Informações Adicionais</h2>
            <p class="cardcont2 roboto-medium" style="margin-bottom: 10%;">Instruções de armazenamento, data de validade, ingredientes, alérgenos e selos de certificação.</p>
        </div>
        <div class="card2">
            <h2 class="h22 roboto-black">Tamanho da Porção</h2>
            <p class="cardcont2 roboto-medium" style="margin-bottom: 10%;">A quantidade sugerida do alimento para consumo, que é usada como base para os valores nutricionais na tabela.</p>
        </div>
        <div class="card2">
            <h2 class="h22 roboto-black">Valor Diário (%VD)</h2>
            <p class="cardcont2 roboto-medium" style="margin-bottom: 10%;">O VD é uma medida que indica o quanto de cada nutriente está presente em uma porção. Oferece uma referência para avaliar o conteúdo nutricional.</p>
        </div>
    </div>

    <br><br>

    <h2 class="acessos roboto-black">Acesse para mais informações:</h2>

    <div class="containeracessos">
      <div class="itemacessos">
        <h2 class="tituloacessos roboto-bold" style="text-align: left;"><a style="color: #006400;" href="https://www.tbca.net.br/" target="_blank">TBCA</a></h2>
        <p class="roboto-medium" style="font-size: 130%; color: #103907; text-align: left;">O principal objetivo da TBCA é fornecer dados precisos e confiáveis sobre a composição de alimentos, ajudando profissionais de saúde, pesquisadores e a indústria alimentícia a entender melhor os valores nutricionais. Esses dados são essenciais para a elaboração de dietas balanceadas, desenvolvimento de produtos alimentícios e políticas de saúde.</p>
      </div>
      <div class="itemacessos">
        <h2 class="tituloacessos roboto-bold" style="text-align: left;"><a style="color: #006400;" href="https://antigo.anvisa.gov.br/documents/10181/3882585/IN+75_2020_.pdf/7d74fe2d-e187-4136-9fa2-36a8dcfc0f8f" target="_blank">Instrução Normativa - IN</a></h2>
        <p class="roboto-medium" style="font-size: 130%; color: #103907; text-align: left;">A IN N° 75/2020 visa regular a produção, manipulação, armazenamento e comercialização de produtos, estabelecendo padrões mínimos de qualidade e segurança. Ela busca garantir que esses produtos sejam adequados para o consumo humano, atendendo aos critérios de qualidade exigidos pela legislação brasileira.</p>
      </div>
      <div class="itemacessos">
        <h2 class="tituloacessos roboto-bold" style="text-align: left;"><a class="" style="color: #006400;" href="calculadora.php">Rotulaí</a></h2>
        <p class="roboto-medium" style="font-size: 130%; color: #103907; text-align: left;">Utilize nossa calculadora para realizar o calculo dos nutrientes de uma receita. Disponibilizamos todas as informações por meio de uma Tabela Nutricional, basta informar sua porção e ingredientes com suas recespectivas gramas.</p>
      </div>
    </div>

    <br>

    <div class="carousel">
        <div class="slide"><img src="imagens/1.png" alt="Slide 1"></div>
        <div class="slide"><img src="imagens/2.png" alt="Slide 2"></div>
        <div class="slide"><img src="imagens/3.png" alt="Slide 3"></div>
        <div class="slide"><img src="imagens/4.png" alt="Slide 3"></div>
    </div>
    <div class="navigation" style="opacity: 0; border-radius: 8px;">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>
    <script src="scriptpro/script.js"></script>
    </div>

</body>
</html>