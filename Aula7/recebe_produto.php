<?php

    $nome       = $_POST["nome"];
    $id_produto = $_POST["id_produto"];
    $descricao  = $_POST["descricao"];
    $fabricante = $_POST["fabricante"];
    $preco      = $_POST["preco"];
    $estoque    = $_POST["estoque"];
    $peso       = $_POST["peso"];

    echo "Dados do Produto: <br><br>";
    echo "Nome: $nome <br>";
    echo "ID: $id_produto <br>";
    echo "Descrição: $descricao <br>";
    echo "Fabricante: $fabricante <br>";
    echo "Preço: $preco <br>";
    echo "Estoque: $estoque <br>";
    echo "Peso: $peso <br>";

    require("conecta_bd.php");

    $mysql->query("INSERT INTO produto VALUE('$nome', '$id_produto', '$descricao', '$fabricante', '$preco', '$estoque', '$peso')");
    echo $mysql->error;
    
?>