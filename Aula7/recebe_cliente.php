<?php

    $cpf            = $_POST["cpf"];
    $nome           = $_POST["nome"];
    $id_cliente     = $_POST["id_cliente"];
    $telefone       = $_POST["telefone"];
    $email          = $_POST["email"];
    $endereco       = $_POST["endereco"];
    $bairro         = $_POST["bairro"];
    $complemento    = $_POST["complemento"];
    $cidade         = $_POST["cidade"];
    $estado         = $_POST["estado"];
    $cep            = $_POST["cep"];
    
    echo "Dados do Cliente:<br><br>";
    echo "CPF: $cpf <br>";
    echo "Nome: $nome <br>";
    echo "ID do Cliente: $id_cliente <br>";
    echo "Telefone: $telefone <br>";
    echo "Email: $email <br>";
    echo "Endereço: $endereco <br>";
    echo "Bairro: $bairro <br>";
    if($complemento != ""){
        echo "Complemento: $complemento <br>";
    }
    echo "Cidade: $cidade <br>";
    echo "Estado: $estado <br>";
    echo "CEP: $cep <br>";

    require("conecta_bd.php");
    
    $mysql->query("INSERT INTO cliente VALUE('$cpf', '$nome', '$id_cliente', '$telefone', '$email', '$endereco', '$bairro', '$complemento', '$cidade', '$estado', '$cep')");
    echo $mysql->error;
?>