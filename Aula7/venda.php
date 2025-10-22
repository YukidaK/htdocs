<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>venda</title>
</head>
<body>
    <form action="recebe_venda.php" method="POST">
        <fieldset>
            <legend>
                Informações da venda:
                </legend><br><br>
                
             <!-- ID DA VENDA -->
             <label for="id_venda">
                ID da Venda:
             </label><br>
             <input type="number" id="id_venda" name="id_venda" size="5" maxlength="5" autofocus>
             <br><br>
             
             <!-- ID DO CLIENTE -->
             <label for="id_cliente">
                 ID do Cliente:
             </label><br>
             <input type="number" id="id_cliente" name="id_cliente" size="5" maxlength="5">
             <br><br>
             
             <!-- DATA DA VENDA -->
             <label for="data">
                Data da Venda:
             </label><br>
             <input type="date" id="data" name="data">
             <br><br>
             
             <!-- ENDEREÇO DE ENTREGA -->
             <label for="endereco">
                 Endereço da Entrega:
                </label><br>
                <input type="text" id="endereco" name="endereco" size="100" maxlength="100">
                <br><br>

                <!-- FOMRA DE PAGAMENTO -->
             <label for="pagamento">
                 Forma de pagamento:
                 </label><br>
                 <select name="pagamento" id="pagamento">
                     <option value="PIX"> PIX </option>
                     <option value="CREDITO"> CREDITO </option>
                 <option value="DEBITO"> DEBITO </option>
                </select>
            <br><br>
                
             <label for="id_produto">
                 ID do Produto:
             </label><br>
             <input type="number" id="id_produto" name="id_produto">
             <br><br>

             <!-- QUANTIDADE -->
             <label for="">
                Quantidade:
             </label><br>
             <input type="number" id="quantidade" name="quantidade">
             <br><br>

             <!-- PREÇO UNITARIO -->
             <label for="preco">
                Preço unitário:
             </label><br>
             <input type="text" id="preco" name="preco" size="10" maxlength="10">
             <br><br>

             <!-- SUBTOTAL -->
             <label for="subtotal">
                SubTotal:
             </label><br>
             <input type="number" id="subtotal" name="subtotal" size="10" maxlength="10">
            <br><br>

            <!-- VALOR TOTAL -->
            <label for="total">
                Valor Total:
            </label><br>
            <input type="number" id="total" name="total" size="10" maxlength="10">
            <br><br>

            <hr>
            <button type="submit">Proximo</button>
        </fieldset>
    </form>
</body>
</html>