<?php

	$server_name = 'mysql.rotulai.kinghost.net';
	$user_name = 'rotulai';
	$password = 'Rotu258textbank';
	$db_name = 'rotulai';

	$connection = mysqli_connect($server_name,$user_name,$password,$db_name);

	mysqli_set_charset($connection,"utf8");

	// if ($connection->connect_errno) 
    // {
    //     echo "Erro ao conectar ao banco";   
    // }else 
    // {
    //     echo "Conectado com sucesso";
    // }
?>