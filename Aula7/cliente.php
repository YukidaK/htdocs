<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 1 - Aula 6</title>
</head>
<body>
    <form method="POST" action="recebe_cliente.php">
        <fieldset>
            <legend>
                Informações:
            </legend><br><br>
                
                <!--copia do exercicio anterio, porem com os metodos da aula atual de session-->
            
            <label for="cpf">
                    CPF:
            </label><br>
            <input type="text" id="cpf" name="cpf" size="15" maxlength="15" autofocus>
            <br><br>

                <!--NOME-->
            <label for="nome">
                Nome:
            </label><br>
            <input type="text" id="nome" name="nome" size="50" maxlength="50">
            <br><br>

                <!--ID CLIENTE-->
            <label for="id_cliente">
                ID Cliente: 
            </label><br>
            <input type="number" id="id_cliente" name="id_cliente" size="10" maxlength="10" placeholder="exemplo = 419952">
            <br><br>
            
                <!--TELEFONE-->
            <label for="telefone">
                Telefone:
            </label><br>
            <input type="text" id="telefone" name="telefone" size="17" maxlength="18" placeholder="00 000 00000-0000">
            <br><br>

                <!--EMAIL-->
            <label for="email">
                Email:
            </label><br>
            <input type="email" id="email" name="email" size="80" maxlength="75" placeholder="exemplo@gmail.com">
            <br><br>

                <!--ENDEREÇO-->
            <label for="endereco">
                Endereço:
            </label><br>
            <input type="text" id="endereco" name="endereco" size="100" maxlength="100">
            <br><br>    

                <!--BAIRRO-->
            <label for="bairro">
                Bairro:
            </label><br>
            <input type="text" id="bairro" name="bairro" size="50" maxlength="50">
            <br><br>
            
                <!--COMPLEMETO-->
            <label for="complemento">
                Complemento:
            </label><br>
            <input type="text" id="complemento" name="complemento" size="100" maxlength="100">
            <br><br>

                <!--CIDADE-->
            <label for="cidade">
                Cidade:
            </label><br>
            <input type="text" id="cidade" name="cidade" size="40" maxlength="40" placeholder="São Paulo">
            <br><br>
            
                <!--ESTADO-->
            <label for="estado">
                Estado:
            </label><br>
            <input type="text" id="estado" name="estado" size="2" maxlength="2" placeholder="SP">
            <br><br>
            
            
                <!--CEP-->
            <label for="cep">
                CEP:
            </label><br>
            <input type="text" id="cep" name="cep" size="10" maxlength="9">
            <br><br>
                
            <hr>
            <button type="submit">Próximo</button>

        </fieldset>
    </form>
</body>
</html>
<html></html>