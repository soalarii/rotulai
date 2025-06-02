<?php

require_once 'conexao-bd.php';
if (isset($_POST['busca'])) {
    $pesquisar = $_POST['busca'];
    $result = "SELECT * FROM tbIngredientes WHERE nome LIKE '%$pesquisar%'";
    $resultado = mysqli_query($connection, $result);
    
    while($dados = mysqli_fetch_array($resultado)){
         $dados['codigo'];
        $dados['nome'];
         $dados['kcal'];
     $dados['carboidratos'];
        $dados['proteinas'];
        $dados['gordurastotais'];
        $dados['gordurassaturadas'];
        $dados['gordurastrans'];
        $dados['fibra'];
        $dados['sodio'];
        
    }
}
?>