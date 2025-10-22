<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Linguagens Autonomas</title>
</head>

<?php
session_start();


if(isset($_POST["botao"])){
    
    $_SESSION['curso'] = $_POST['Curso'] ?? '';
    $_SESSION['turno'] = $_POST['prod1'] ?? '';
    $_SESSION['atividade_extra'] = $_POST['prod2'] ?? '';
    
   header("location:page_tres.php");

}
?>

<body>
    <div class="container">
        <section>
            <h2>Escolha a Materia</h2>
            <form action="page_dois.php" method="post">
                <label for="curso">Estado:</label>
                <select id="curso" name="Curso" required>
                    <option value="">Selecione</option>
                    <option value="Java">Java</option>
                    <option value="Python">Python</option>
                    <option value="C">C</option>
                    <option value="C++">C++</option>
                </select>
                <br>

                <br>
                <legend>Turnos:</legend>
                <input type="radio" name="prod1" value="1" /> Manhã <br />
                <input type="radio" name="prod1" value="2" /> Tarde <br />
                <input type="radio" name="prod1" value="3" /> Noite <br />
                <br>
                <legend>Atividades Extras:</legend>
                <input type="radio" name="prod2" value="1" /> Inteligencia Artificial <br />
                <input type="radio" name="prod2" value="2" /> Analise de Dados <br />
                <input type="radio" name="prod2" value="3" /> Javascript + HTML <br />

                <br>
                <button class="btn" type="submit" name="botao">Próximo</button>
            </form>
        </section>
    </div>

</html>