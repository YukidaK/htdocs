<?php
    $id_venda   = $_POST["id_venda"];
    $id_cliente = $_POST["id_cliente"];
    $data       = $_POST["data"];
    $endereco   = $_POST["endereco"];
    $pagamento  = $_POST["pagamento"];
    $id_produto = $_POST["id_produto"];
    $quantidade = $_POST["quantidade"];
    $preco      = $_POST["preco"];
    $subtotal   = $_POST["subtotal"];
    $total      = $_POST["total"];

    echo "Informações da Venda: <br><br>";
    echo "ID da Venda: $id_venda <br>";
    echo "ID do Cliente: $id_cliente <br>";
    echo "Data da Venda: $data <br>";
    echo "Endereço da Entrega: $endereco <br>";
    echo "Metodo de Pagamento: $pagamento <br>";
    echo "ID do Produto: $id_produto <br>";
    echo "Quantidade de Produto: $quantidade <br>";
    echo "Preço unitário do produto: $preco <br>";
    echo "Sub Total: $subtotal <br>";
    echo "Valor Total: $total <br>";

    require("conecta_bd.php");

    $mysql->query("INSERT INTO venda VALUE('$id_venda', '$id_cliente', '$data', '$endereco', '$pagamento', '$id_produto', '$quantidade', '$preco', '$subtotal', '$total')");
    echo $mysql->error;
?>