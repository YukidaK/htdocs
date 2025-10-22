<?php
// Recebendo dados via session
session_start();
$nome       = $_SESSION["nome"];
$email      = $_SESSION["email"];
$idade      = $_SESSION["idade"];
$genero     = $_SESSION["genero"];
$cpf        = $_SESSION["cpf"];
$telefone   = $_SESSION["telefone"];
$cidade     = $_SESSION["cidade"];
$estado     = $_SESSION["estado"];
$endereco   = $_SESSION["endereco"];
$cep        = $_SESSION["cep"];

// Curso escolhido
$curso      = $_SESSION["curso"];
$turno      = $_SESSION["turno"];
$atividade = $_SESSION["atividade_extra"];

// Pagamento e modalidade
$forma_pagto = $_SESSION["fpagto"];
$modalidade  = $_SESSION["modalidade"];


if($turno == 1){
    $turno = "Manhã";
}
else if($turno == 2){
    $turno = "Tarde";
}
else{
    $turno = "Noite";
}

if($atividade == 1){
    $atividade = "Inteligencia Artificial";
}
else if($atividade == 2){
    $atividade = "Analize de Dados";
}
else{
    $atividade = "JavaScript + HTML";
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Confirmação da Inscrição</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #fdfdfd;
            display: flex;
            justify-content: center;
            padding: 20px;
        }
        .container {
            width: 500px;
            background: #fff;
            padding: 25px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 8px rgba(0,0,0,0.15);
            text-align: center;
        }
        h2 {
            color: #1a3d91;
            margin-bottom: 20px;
        }
        h3 {
            margin-top: 25px;
            margin-bottom: 10px;
            color: #222;
        }
        p {
            margin: 5px 0;
            color: #333;
        }
        .btn {
            display: inline-block;
            margin-top: 25px;
            padding: 12px 20px;
            background: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
        }
        .btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Confirmação da Inscrição</h2>

        <h3>Dados Pessoais</h3>
        <?php
        echo "Dados do Usuario <br><br>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Idade: $idade <br>";
        echo "Genero: $genero <br>";
        echo "CEP: $cep <br>";
        echo "Estado: $estado <br>";
        echo "Cidade: $cidade <br>";
        echo "Endeço: $endereco <br>";

        echo "<br>Curos Escolhido: <br>";
        echo "Curso: $curso <br>";
        echo "Turno: $turno <br>";
        echo "Atividade Extra: $atividade <br>";

        echo "<br>Pagamento e Modalidade: <br>";
        echo "Forma de Pagamento: $forma_pagto <br>";
        echo "Modalidade: $modalidade <br>";
        ?>

        <a href="index.php" class="btn">Nova Inscrição</a>
    </div>
</body>
</html>