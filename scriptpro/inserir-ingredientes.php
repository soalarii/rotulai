<?php 

  session_start();

  require_once 'conexao-bd.php';

  if (isset($_POST['btn-cadastrar'])) {

    
    $codigo = mysqli_escape_string($connection,$_POST['codigo']);
    $nome = mysqli_escape_string($connection,$_POST['nome']);
    $kcal = mysqli_escape_string($connection,$_POST['kcal']);
    $carboidratos = mysqli_escape_string($connection,$_POST['carboidratos']);
    $proteinas = mysqli_escape_string($connection,$_POST['proteinas']);
    $gordurastotais = mysqli_escape_string($connection,$_POST['gordurastotais']);
    $gordurassaturadas = mysqli_escape_string($connection,$_POST['gordurassaturadas']);
    $gordurastrans = mysqli_escape_string($connection,$_POST['gordurastrans']);
    $fibra = mysqli_escape_string($connection,$_POST['fibra']);
    $sodio = mysqli_escape_string($connection,$_POST['sodio']);

    $sql = "INSERT INTO tbIngredientes(codigo,nome,kcal,carboidratos,proteinas,gordurastotais,gordurassaturadas,gordurastrans,fibra,sodio)VALUES('$codigo','$nome','$kcal','$carboidratos','$proteinas','$gordurastotais','$gordurassaturadas','$gordurastrans','$fibra','$sodio')";
    
  }

  if(mysqli_query($connection,$sql)) {
      require_once 'mensagens/sucesso.php';
    }
    else{
      require_once 'mensagens/erro.php';
    }