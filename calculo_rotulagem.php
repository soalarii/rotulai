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
    <title>Tabela Nutricional</title>

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

        .infonutri{
            font-size: 180%;
            text-align: center;
        }
        .porembalagem{
            border-bottom: white;
            font-size: 120%;
            padding-left: 2%;
            border-bottom: 6px solid black;
        }
        .valores{
            text-align: center;
            font-size: 110%;
        }
        .botaopdf{
           margin-top: 2.5%;
            width: 10%;
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #006400;
            color: white;
            background-color: #006400;
            font-weight: bold;

        }
        .botaopdf:hover{
           margin-top: 2.5%;
            width: 10%;
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;

        }

    </style>

</head>
<body>

    <div class="estrutura container-image">

    <br>

    <a href="calculadora.php">
        <img class="logo" src="imagens/logorotulai.png" alt="Logo Rotulaí">
    </a>
    
    <ul>
        <li class="calculadora roboto-light"><strong><a href="calculadora.php" target="_self">&nbsp;&nbsp;ROTULAÍ&nbsp;&nbsp;</a></strong> </li>
        <!-- <li class="roboto-light"><strong><a href="dados.php" target="_self">BASE DE DADOS</a></strong></li> -->
        <li class="roboto-light"><strong><a href="index.php" target="_self">&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></strong></li>
    </ul>

    <br><br><br>

<?php
        if (isset($_POST['ingredientes']) && isset($_POST['gramas']) && is_array($_POST['gramas']) && isset($_POST['porcao'])) {

            $ingredientes = unserialize($_POST['ingredientes']);
            $gramas = $_POST['gramas'];
            $porcao = $_POST['porcao'];
            $nomei = $_POST['nomedareceita'];
            
            foreach ($ingredientes as $ingrediente) {
                $ingrediente['nome'];
                $ingrediente['kcal'];
                $ingrediente['carboidratos'];
                $ingrediente['proteinas'];
                $ingrediente['gordurastotais'];
                $ingrediente['gordurassaturadas'];
                $ingrediente['gordurastrans'];
                $ingrediente['fibra'];
                $ingrediente['sodio'];
            };

            $total100g = array(
                'kcal' => 0,
                'carboidratos' => 0,
                'proteinas' => 0,
                'gordurastotais' => 0,
                'gordurassaturadas' => 0,
                'gordurastrans' => 0,
                'fibra' => 0,
                'sodio' => 0
            );
            $totalporporcao = array(
                'kcal' => 0,
                'carboidratos' => 0,
                'proteinas' => 0,
                'gordurastotais' => 0,
                'gordurassaturadas' => 0,
                'gordurastrans' => 0,
                'fibra' => 0,
                'sodio' => 0
            );
            $totalkcal = array(
                'carboidratos' => 0,
                'proteinas' => 0,
                'gordurassaturadas' => 0
            );
            $vdr = array(
                'kcal' => 0,
                'carboidratos' => 0,
                'proteinas' => 0,
                'gordurastotais' => 0,
                'gordurassaturadas' => 0,
                'gordurastrans' => 0,
                'fibra' => 0,
                'sodio' => 0
            );
            $nomes = array(
                'kcal' => 'Valor energético(kcal)',
                'carboidratos' => 'Carboidratos(g)',
                'proteinas' => 'Proteínas(g)',
                'gordurastotais' => 'Gorduras totais(g)',
                'gordurassaturadas' => '&nbsp;Gorduras saturadas(g)',
                'gordurastrans' => '&nbsp;Gorduras trans(g)',
                'fibra' => 'Fibras alimentares',
                'sodio' => 'Sódio'
            );

            $qtdtotalgramas = 0;

            foreach ($ingredientes as $ingrediente) {
                $ningrediente = $ingrediente['nome'];
                if (isset($gramas[$ningrediente]) && is_numeric($gramas[$ningrediente]) && $gramas[$ningrediente] >= 0) {
                    $quantidadeporgrama = floatval($gramas[$ningrediente]);
                    $qtdtotalgramas += $quantidadeporgrama;
                    foreach ($ingrediente as $chave => $valor) {
                        if ($chave != 'nome') {
                            $soma = $total100g[$chave] += ($quantidadeporgrama * $valor) / 100;
                            $totalporporcao[$chave] += ($quantidadeporgrama * $valor) / 100;
                            ($soma);   
                        }
                    }
                }
            }

            foreach ($total100g as &$valor) {
                $valor = ($valor * 100 / $qtdtotalgramas);
            }

            foreach ($totalporporcao as &$valor2) {
                $valor2 = ($valor2 * 100 / $qtdtotalgramas);
                $valor2 = $porcao * round($valor2, 2) / 100;
            }
            
            $totalkcal['carboidratos'] += $totalporporcao['carboidratos'] * 4;
            $totalkcal['proteinas'] += $totalporporcao['proteinas'] * 4;
            $totalkcal['gordurassaturadas'] += $totalporporcao['gordurassaturadas'] * 9;

            $total_calorias = array_sum($totalkcal);
            $totalporporcao['kcal'] = $total_calorias;

            $vdr['kcal'] += ($totalporporcao['kcal'] / 2000) * 100;
            $vdr['carboidratos'] += ($totalporporcao['carboidratos'] / 300) * 100;
            $vdr['proteinas'] += ($totalporporcao['proteinas'] / 50) * 100;
            $vdr['gordurastotais'] += ($totalporporcao['gordurastotais'] / 65) * 100;
            $vdr['gordurassaturadas'] += ($totalporporcao['gordurassaturadas'] / 20) * 100;
            $vdr['gordurastrans'] += ($totalporporcao['gordurastrans'] / 2) * 100;
            $vdr['fibra'] += ($totalporporcao['fibra'] / 25) * 100;
            $vdr['sodio'] += ($totalporporcao['sodio'] / 2000) * 100;

        
            } else {
                echo "<p>Nenhum ingrediente ou gramas totais enviados para cálculo.</p>";
            }

            foreach ($totalkcal as $chave => $valor3) {
                $valor3;      
            }

            foreach ($vdr as $chave => $valor4) {
                round($valor4, 2);      
            }

            $qndporcoesembalagem = $qtdtotalgramas / $porcao;

        
            echo "<table border='1' style='text-align:center; width: 23%; margin: auto;'>";
            echo "
                <tr>
                    <th colspan='4' class='infonutri roboto-black'>INFORMAÇÃO NUTRICIONAL</th>
                </tr>
                <tr>
                    <th colspan='4' class='porembalagem roboto-regular'>Porções por embalagem: " . round($qndporcoesembalagem, 0). "<br> Porção: $porcao g (medida caseira)</th>
                </tr>
                <tr>
                    <th></th>
                    <th class='valores roboto-black'>100 g</th>
                    <th class='valores roboto-black'>$porcao g</th>
                    <th class='valores roboto-black'>%VD*</th>
                </tr>";
            foreach ($total100g as $nome => $valor5) {
                echo "<tr>
                        <td class='roboto-regular' style='text-align:left; padding-left: 5px; font-size:120%;'>" . $nomes[$nome] . "</td>
                        <td>" . round($valor5,1) . "</td>
                        <td>" . round($totalporporcao[$nome],1) . "</td>
                        <td>" . sprintf("%.0f",$vdr[$nome]) . "%</td>
                    </tr>";           
            }
            echo "
                <tr>
                    <th colspan='4' class='roboto-light' style='font-size:95%; border-top: 3px solid black; padding-bottom:2%;'>*Percentual de valores diários fornecidos pela porção.<br>&nbsp;Receita de <strong>" . $nomei ."</strong></th>
                </tr>";
            echo "</table>";
?>
</div>
</body>
</html>
