<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Carro</title>
</head>
<body>
    <a href="welcome.php" class="btn btn-primary">voltar</a>   
    <br>
    <a href="carro.txt"></a>
<?php
    $handle = fopen("carro.txt", "r");
    while(!feof($handle)) {
        $line = fgets($handle);
        echo $line . "<br>";
    }
    fclose($handle);
    ?>
</body>
</html>