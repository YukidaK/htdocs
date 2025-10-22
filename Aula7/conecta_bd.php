<?php
    // variaveis necessarias para o data base
    $domain = "localhost";
    $user = "root";
    $passaword ="";
    $database = "loja";

    $mysql = new mysqli($domain,$user, $passaword, $database);
    $mysql ->set_charset("utf8"); 

    // validação se foi possivel se conectar com o banco, caso não, mandar mensagem 
    if($mysql->connect_errno){
        echo "Não foi possivel conectar com o banco de dados";
        echo $mysqli->connect_error;
    }

?>