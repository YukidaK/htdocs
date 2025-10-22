<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
    <form method="POST" action="recebe_produto.php">
        <fieldset>
            <legend>
                Adicionar Produto:
            </legend><br><br>
            
            <!-- NOME DO PRODUTO -->
            <label for="nome">
                Nome do Produto:
            </label><br>
            <input type="text" id="nome" name="nome" size="50" maxlength="50" autofocus>
            <br><br>

            <!-- ID -->
            <label for="id_produto">
                ID Produto:
            </label><br>
            <input type="number" id="id_produto" name="id_produto" size="5" maxlength="5">
            <br><br>

            <!-- DESCRIÇÃO -->
            <label for="descricao">
                Descrição do Produto:
            </label><br>
                <!-- testando se textarea funciona com php, na teoria é para dar certo -->
            <textarea name="descricao" id="descricao" rows="5" cols="120"></textarea>
            <br><br>

            <!-- FABRICANTE -->
            <label for="fabricante">
                Informe o Fabricante:
            </label><br>
            <input type="text" id="fabricante" name="fabricante" size="30" maxlength="30">
            <br><br>

            <!-- PREÇO -->
            <label for="preco">
                Preço do Produto:
            </label><br>
            <input type="text" id="preco" name="preco" size="10" maxlength="10">
            <br><br>
            
            <!-- QUANTIDADE EM ESTOQUE -->
            <label for="estoque">
                Quantidade em Estoque:
            </label><br>
            <input type="text" id="estoque" name="estoque" size="10" maxlength="10">
            <br><br>

            <!-- PESO -->
            <label for="peso">
                Peso:
            </label><br>
            <input type="text" id="peso" name="peso" size="10" maxlength="10">
            <br><br>

            <hr>
            <button type="submit">Proximo</button>

        </fieldset>
    </form>
</body>
</html>