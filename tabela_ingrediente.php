<?php
session_start();

if (isset($_POST['limpar'])) {
    unset($_SESSION['ingredientes']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_GET['nome'])) {
    $Ingrediente = $_GET;
    $ingredienteE = isset($_SESSION['ingredientes']) ? $_SESSION['ingredientes'] : array();
    $ingredienteN = array_column($ingredienteE, 'nome');

    if (!in_array($Ingrediente['nome'], $ingredienteN)) {
        $_SESSION['ingredientes'][] = $Ingrediente;
    }
}
$numero = 23;
?>
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
    <title>Ingredientes</title>
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

        table {
            border: 3px solid white;
            width: 100%;
            margin-bottom: 20px;

        }
        th, td {
            padding: 8px;
            text-align: center;
            background-color: white;
        }
        th {
            background-color: #006400;
            color: white;
        }
        

        .titulocaixa{
            font-size: 160%;
            margin-right: 1%;
        }
        .caixa{
            border-radius: 8px;
            padding: 3px;
            font-size: 20px;
            border-color: #006400;
            width: 13%;
        }

        
        .caixagramas{
            border-radius: 8px;
            font-size: 16px;
            border-color: #006400;
            width: 75%;
            text-align: center;
        }

        .resultado{
            font-size: 140%;
            text-align: center;
            border-top: 2px solid white;
            background-color: #006400;
            color: white;
        }

        .resultadotabela{
            font-size: 18px;
            text-align: center;
            border-top: 4px solid #006400;
            border-bottom: 4px solid #006400;
        }

        .calcular{
            border-radius: 8px;
            padding: 10px;
            margin-top: 1%;
            font-size: 15px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1%;
            float: right;
        }
        .calcular:hover{
            border-radius: 8px;
            border-color: #006400;
            color: white;
            margin-top: 1%;
            background-color: #006400;
            font-weight: bold;
        }
        .limpar{
            border-radius: 8px;
            padding: 10px;
            font-size: 15px;
            border-color: #FF3131;
            color: white;
            background-color: #FF3131;
            font-weight: bold;
            margin-top: 4.5%;

        }
        .limpar:hover{
            border-radius: 8px;
            border-color: #006400;
            color: white;
            background-color: #006400;
            font-weight: bold;
        }

    </style>
</head>
<body>
    
    <div class="estrutura">
        <br>
        <a href="calculadora.php">
            <img class="logo" src="imagens/logorotulai.png" alt="Logo Rotulaí">
        </a>

        <header class="header">
            <ul>
                <li class="calculadora roboto-light"><strong><a href="calculadora.php" target="_self">&nbsp;&nbsp;ROTULAÍ&nbsp;&nbsp;</a></strong></li>
                <li class="roboto-light"><strong><a href="index.php" target="_self">&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></strong></li>
            </ul>
        </header>

        <form action="calculo_rotulagem.php" method="POST">
            <br>
            <div>
               
                <label class="titulocaixa roboto-bold" for="nomedareceita" >Nome da Receita:</label>
                <input class="caixa roboto-bold" required type="text" id="nomedareceita" name="nomedareceita" placeholder="Nome da Receita">
                <label style="margin-left: 2%;" class="titulocaixa roboto-bold" for="porcao">Porção (g):</label>
                <input class="caixa roboto-bold"  type="number" id="porcao" required name="porcao" placeholder="Porção em gramas">
                 <a class='botaoadicionar' href="calculadora.php" target="_self"><img src="imagens/adicionar.png" style="width:2.3%; margin-bottom:0.4%; margin-left:1%;" title="Adicionar mais ingredientes" alt="Descrição da Imagem"></a>
            </div>
            <br>
            <table>
                <tr class="resultado roboto-bold">
                    <th style="text-align:left;">Nome</th>
                    <th>Kcal</th>
                    <th>Carboidratos</th>
                    <th>Proteínas</th>
                    <th>Gorduras Totais</th>
                    <th>Gorduras Saturadas</th>
                    <th>Gorduras Trans</th>
                    <th>Fibra</th>
                    <th>Sódio</th>
                    <th>Quantidade (g)</th> <!-- Novo cabeçalho para as gramas -->
                </tr>
                <?php
                if (isset($_SESSION['ingredientes'])) {
                    foreach ($_SESSION['ingredientes'] as $ingrediente) {
                        echo "<tr class='resultadotabela roboto-medium'>";
                        echo "<td style='text-align:left;'>{$ingrediente['nome']}</td>";
                        echo "<td>{$ingrediente['kcal']}</td>";
                        echo "<td>{$ingrediente['carboidratos']}</td>";
                        echo "<td>{$ingrediente['proteinas']}</td>";
                        echo "<td>{$ingrediente['gordurastotais']}</td>";
                        echo "<td>{$ingrediente['gordurassaturadas']}</td>";
                        echo "<td>{$ingrediente['gordurastrans']}</td>";
                        echo "<td>{$ingrediente['fibra']}</td>";
                        echo "<td>{$ingrediente['sodio']}</td>";
                        echo "<td><input class=caixagramas type='number' step='0.01' required name='gramas[{$ingrediente['nome']}]' placeholder='Gramas'></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            <div style="float:right;">
            <input type="hidden" name="ingredientes" value="<?php echo isset($_SESSION['ingredientes']) ? htmlentities(serialize($_SESSION['ingredientes'])) : ''; ?>">
            <input class="calcular" type="submit" name="calcular" value="Calcular Rotulagem">
        </form>
        <form method="POST">
            <input type="submit" class="limpar" name="limpar" value="Limpar Ingredientes">
            </div>
        </form>
    </div>
</body>
</html>
