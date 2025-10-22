
<?php
session_start();


if(isset($_POST["botao"])){
    
    $_SESSION["fpagto"] = $_POST["fpagto"];
    $_SESSION["modalidade"] = $_POST["modalidade"];

   header("location:confirmar.php");

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pagamento e Modalidade</title>
  <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Pagamento e Modalidade</h2>
        <form method="post" action="page_tres.php">
            <label for="fpagto">Forma de Pagamento:</label>
            <select name="fpagto" id="fpagto" required>
                <option value="Boleto Bancário" <?php if(!empty($forma_pagamento) && $forma_pagamento=="Boleto Bancário") echo "selected"; ?>>Boleto Bancário</option>
                <option value="Cartão de Crédito" <?php if(!empty($forma_pagamento) && $forma_pagamento=="Cartão de Crédito") echo "selected"; ?>>Cartão de Crédito</option>
                <option value="PIX" <?php if(!empty($forma_pagamento) && $forma_pagamento=="PIX") echo "selected"; ?>>PIX</option>
            </select>
 
            <label>Modalidade:</label>
            <div class="radio-group">
                <input type="radio" name="modalidade" value="Presencial" <?php if(empty($modalidade) || $modalidade=="Presencial") echo "checked"; ?>> Presencial <br>
                <input type="radio" name="modalidade" value="Online" <?php if(!empty($modalidade) && $modalidade=="Online") echo "checked"; ?>> Online <br>
                <input type="radio" name="modalidade" value="Híbrido" <?php if(!empty($modalidade) && $modalidade=="Híbrido") echo "checked"; ?>> Híbrido
            </div>
 
            <button type="submit" class="btn" name= "botao">Confirmar</button>
        </form>
 
        <?php if (!empty($forma_pagamento) && !empty($modalidade)) : ?>
            <div class="resultado">
                Forma de Pagamento: <?= htmlspecialchars($forma_pagamento) ?><br>
                Modalidade: <?= htmlspecialchars($modalidade) ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
  