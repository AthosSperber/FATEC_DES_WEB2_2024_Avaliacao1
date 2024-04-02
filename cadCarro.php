<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro realizado</title>
</head>
<body>
<?php
    $filename = "carro.txt";
    $handle = fopen($filename, "a");
    fwrite($handle, $_POST['name'] . "/" . $_POST['ra'] . "/" . $_POST['placa'] . "\n");
    fclose($handle);
    
    echo "Dados salvos com sucesso!";
?>
<br></br>
<a href="welcome.php" class="btn btn-primary">voltar</a>
</body>
</html>