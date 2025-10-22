<?php
session_start();
    $erro_nome = "";
    $erro_email = "";
    $erro_idade = "";
    $erro_genero = "";
    $erro_cpf = "";
    $erro_telefone = "";
    $erro_cidade = "";
    $erro_estado = "";
    $erro_endereco = "";
    $erro_cep = "";

    $erro_validacao = 0;


    if(isset($_POST["botao"])){
        $_SESSION["nome"] = $_POST["nome"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["idade"] = $_POST["idade"];
        $_SESSION["genero"] = $_POST["genero"];
        $_SESSION["cpf"] = $_POST["cpf"];
        $_SESSION["telefone"] = $_SESSION["telefone"];
        $_SESSION["cidade"] = $_POST["cidade"];
        $_SESSION["estado"] = $_POST["estado"];
        $_SESSION["endereco"] = $_POST["endereco"];
        $_SESSION["cep"] = $_POST["cep"];
        
        // validação do nome, 
        if($_SESSION["nome"] == ""){
            $erro_nome = "<span style='color:red'>Preencha o nome </span>";
            $erro_validacao ++;
        }

        // validação do email 
        if($_SESSION["email"] == ""){
            $erro_email = "<span style='color:red'>Preencha o email </span>";
            $erro_validacao ++;
        }
    
        // validação idade
        if($_SESSION["idade"] == "" || $_SESSION["idade"] < 0){
            $erro_idade = "<span style='color:red'>Preencha com a sua idade</span>";
            $erro_validacao++;
        }
        // validaçõa genero
        if($_SESSION["genero"] == 0){
            $erro_genero = "<span style='color:red'>Preencha om um dos generos</span>";
            $erro_validacao++;
        }
        // validação cpf
        if($_SESSION["cpf"] = ""){
            $erro_cpf = "<span style='color:red'> Preencha com o seu CPF</span>";
            $erro_validacao++;
        }
        // validação telefone
        if($_SESSION["telefone"] = ""){
            $erro_telefone = "<span style='color:red'>Preencha com seu telefone</span>";
            $erro_validacao++;
        }
        // validação da cidade
        if($_SESSION["cidade"] == ""){
            $erro_cidade = "<span style='color:red'>Preencha a cidade </span>";
            $erro_validacao ++;
        }
        
        // validação do estado
        if($_SESSION["estado"] == ""){
            $erro_estado = "<span style='color:red'>Preencha o estado </span>";
            $erro_validacao ++;
        }

        
        // validação do endereco
        if($_SESSION["endereco"] == ""){
            $erro_endereco = "<span style='color:red'>Preencha o endereço </span>";
            $erro_validacao ++;
        }
        
        //validação do cep
        if($_SESSION["cep"] == ""){
            $erro_cep = "<span style='color:red'>Preencha o cep </span>";
            $erro_validacao ++;
        }
        
        if ($erro_validacao == 0){
            header("location:page_dois.php");
        }
        
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 1 - Aula 6</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="POST" action="parte_yuuki.php">
        <fieldset>
            <legend>
                Informações:
            </legend><br><br>
                <!--copia do exercicio anterio, porem com os metodos da aula atual de session-->
            <label for="nome">
                Nome:
            </label>
            <input type="text" id="nome" name="nome" size="50" maxlength="50" autofocus
            value= "<?php if(isset($_SESSION["nome"])) echo $_SESSION["nome"] ?>" >
            <?php  echo $erro_nome ?>
            <br><br>

            <label for="email">
                Email:
            </label><br>
            <input type="email" id="email" name="email" size="80" maxlength="75" placeholder="exemplo@gmail.com"
            value= "<?php if(isset($_SESSION["email"])) echo $_SESSION["email"] ?>" >
            <?php  echo $erro_email ?>
            <br><br>

            <label for="idade">
                Idade: 
            </label><br>
            <input type="text" id="idade" name="idade" size="3" maxlength="3" placeholder="00"
            value="<?php if(isset($_SESSION["idade"])) echo $_SESSION["idade"]?>">
            <?php echo $erro_idade?>
            <br><br>
            
            <label for="genero">
                Genero:
            </label><br>
            <select name="genero">
                <option value="0" <?php if((isset($_SESSION["genero"])) AND ($_SESSION["genero"] == "0")) echo 'selected="false"' ?>></option>
                <option value="1" <?php if((isset($_SESSION["genero"])) AND ($_SESSION["genero"] == "1")) echo 'selected="true"' ?>>Neutro</option>
                <option value="2" <?php if((isset($_SESSION["genero"])) AND ($_SESSION["genero"] == "2")) echo 'selected="true"' ?>>Masculino</option>
                <option value="3" <?php if((isset($_SESSION["genero"])) AND ($_SESSION["genero"] == "3")) echo 'selected="true"' ?>>Feminino</option>
            </select>
            <br><br>

            <label for="telefone">
                Telefone:
            </label>    
            <input type="text" id="telefone" name="telefone" size="17" maxlength="18" placeholder="00 000 00000-0000"
            value=<?php if(isset($_SESSION["telefone"])) echo $_SESSION["telefone"]?>>
            <?php echo $erro_telefone?>
            <br><br>

            <label for="cidade">
                Cidade:
            </label><br>
            <input type="text" id="cidade" name="cidade" size="40" maxlength="40" placeholder="São Paulo"
            value= "<?php if(isset($_SESSION["cidade"])) echo $_SESSION["cidade"] ?>" >
            <?php  echo $erro_cidade ?>
            <br><br>
            
            <label for="estado">
                Estado:
            </label><br>
            <input type="text" id="estado" name="estado" size="2" maxlength="2" placeholder="SP"
            value= "<?php if(isset($_SESSION["estado"])) echo $_SESSION["estado"] ?>" >
            <?php  echo $erro_estado ?>
            <br><br>
            
            
            <label for="endereco">
                Endereço:
            </label><br>
            <input type="text" id="endereco" name="endereco" size="100" maxlength="100"
            value= "<?php if(isset($_SESSION["endereco"])) echo $_SESSION["endereco"] ?>" >
            <?php  echo $erro_nome ?>
            <br><br>
            
            <label for="cep">
                CEP:
            </label><br>
            <input type="text" id="cep" name="cep" size="10" maxlength="9" 
            value= "<?php if(isset($_SESSION["cep"])) echo $_SESSION["cep"] ?>" >
            <?php  echo $erro_cep ?>
            <br><br>
                
            <hr>
            <button type="submit" name ="botao">Próximo</button>

        </fieldset>
    </form>
    <a href="index.php">
        <button>Voltar </button>
    </a>
</body>
</html>
<html></html>