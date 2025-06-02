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
    <title>Calculadora</title>
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

        .titulo{
            font-size: 180%;
            text-align: left;
            color: #006400;
        }
        .titulo2{
            font-size: 260%;
            text-align: left;
            color: #FF3131;
        }
        .titulo3{
            font-size: 180%;
            text-align: left;
            color: #006400;
        }
         .titulo4{
            font-size: 230%;
            text-align: left;
            color: #FF3131;
        }

        .ingrediente{
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #006400;
            width: 40%;
        }
        .buscaingrediente{
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #006400;
            width: 11%;
            color: white;
            background-color: #006400;
            font-weight: bold;
        }
        .buscaingrediente:hover{
            border-radius: 8px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;
        }

        .visutabela{
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #006400;
            width: 11%;
            color: white;
            background-color: #006400;
            font-weight: bold;
            flo
        }
        .visutabela:hover{
            border-radius: 8px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;
        }

        .resultado{
            font-size: 140%;
            text-align: center;
            border-top: 2px solid white;
            background-color: #006400;
            color: white;
            white-space: nowrap;
        }

        .resultadotabela{
            font-size: 18px;
            text-align: center;
            border-top: 4px solid #006400;
            border-bottom: 4px solid #006400;
        }

        .botaoadicionar{
            border-radius: 8px;
            padding: 5px;
            margin-top: 1%;
            font-size: 15px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;
            text-align: center;
        }
        .botaoadicionar:hover{
            border-radius: 8px;
            border-color: #006400;
            color: white;
            margin-top: 1%;
            background-color: #006400;
            font-weight: bold;
        }
        .visutabela{
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;
        }
        .visutabela:hover{
            border-radius: 8px;
            border-color: #006400;
            color: white;
            background-color: #006400;
            font-weight: bold;
        }

        .resultado.header th {
            position: sticky;
            top: 0;
            border-style: 4px solid #006400;

        }
    </style>
</head>
<body>
    
    <div class="estrutura">

    <br>

    <a href="calculadora.php">
        <img class="logo" src="imagens/logorotulai.png" alt="Logo Rotulaí">
    </a>

    <ul>
        <li class="calculadora roboto-light"><strong><a href="calculadora.php" target="_self">&nbsp;&nbsp;ROTULAÍ&nbsp;&nbsp;</a></strong> </li>
        <!-- <li class="roboto-light"><strong><a href="dados.php" target="_self">BASE DE DADOS</a></strong></li> -->
        <li class="roboto-light"><strong><a href="index.php" target="_self">&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></strong></li>
    </ul>

    <br>
		
	<h2 class="titulo roboto-bold"><strong>Partiu montar a sua receita!</strong></h2>

	<h2 class="titulo2 roboto-black"><strong>Como funciona?</strong></h2>
		
    <h2 class="titulo3 roboto-medium">Ao adicionar os seus ingredientes, nós te levamos para uma nova página, onde todos eles estão armazenados.</h2>
		
    <h2 class="titulo3 roboto-medium">Lá você informa o nome da receita, quantidade da porção e gramas do ingrediente.</h2>
        
    <h2 class="titulo3 roboto-medium">Pronto. É só pedir que a gente Rotulaí em uma Tabela completa!</h2>     

    <br>

    <div id="resultados">

    <h2 class="titulo4 roboto-black"><strong>Insira e busque pelos seus Ingredientes abaixo:</strong></h2>

            <form method="GET" action="#resultados">
                <input name="busca" class="ingrediente" autofocus placeholder="Ingrediente" type="text" required>
                <br>
                <input type="submit" style="margin-top:1%;" class="buscaingrediente" value="Buscar"> 
            </form>
            
            <form action="tabela_ingrediente.php">
                <input type="submit" style="margin-top:1%;" class="visutabela" value="Ir para a tabela" > 
            </form>
 
            <?php require_once 'scriptpro/pesquisa.php'; ?>
            
            <br>

            <?php
                if(isset($_GET['busca'])) {
                    $pesquisa = $connection->real_escape_string($_GET['busca']);
                    $sql_code = "SELECT *
                        FROM tbIngredientes
                        WHERE nome LIKE '%$pesquisa%'";
                    $sql_query = $connection->query($sql_code) or die("erro ao consultar" . $connection->error);

                    if($sql_query->num_rows == 0) {   
                        echo "<p style='font-size: 140%;
                            color:  #FF3131;' class='roboto-bold'>Nenhum resultado encontrado</p>";
                    } else {
                        echo "<table class='table'>";
                        echo "<tr class='resultado header'>";
                        echo "<th style='text-align:left;'>Nome</th>";
                        echo "<th>Kcal</th>";
                        echo "<th>Carboidratos</th>";
                        echo "<th>Proteínas</th>";
                        echo "<th>Gorduras Totais</th>";
                        echo "<th>Gorduras Saturadas</th>";
                        echo "<th>Gorduras Trans</th>";
                        echo "<th>Fibra</th>";
                        echo "<th>Sódio</th>";
                        echo "<th></th>";
                        echo "</tr>";
                        while($dados = $sql_query->fetch_assoc()) { 
                            echo "<tr class='resultadotabela roboto-medium'>";
                            echo "<td style='text-align:left;'>{$dados['nome']}</td>";
                            echo "<td >{$dados['kcal']}</td>";
                            echo "<td>{$dados['carboidratos']}</td>";
                            echo "<td>{$dados['proteinas']}</td>";
                            echo "<td>{$dados['gordurastotais']}</td>";
                            echo "<td>{$dados['gordurassaturadas']}</td>";
                            echo "<td>{$dados['gordurastrans']}</td>";
                            echo "<td>{$dados['fibra']}</td>";
                            echo "<td>{$dados['sodio']}</td>";
                            echo "<td><a href='tabela_ingrediente.php?nome={$dados['nome']}&kcal={$dados['kcal']}&carboidratos={$dados['carboidratos']}&proteinas={$dados['proteinas']}&gordurastotais={$dados['gordurastotais']}&gordurassaturadas={$dados['gordurassaturadas']}&gordurastrans={$dados['gordurastrans']}&fibra={$dados['fibra']}&sodio={$dados['sodio']}'><button class ='btn-adicionar botaoadicionar'>Adicionar</button></a></td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    }
                } else {
                    echo "<p style='font-size: 140%;
                            color:  #FF3131;' class='roboto-bold'>Nenhum termo de busca foi especificado.</p>";
                }
            ?>

    </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                if (window.location.hash === '#resultado') {
                    document.getElementById('resultado').scrollIntoView();
                }
            });
        </script>
        
        <br><br><br>
</div>
</body>
</html>