<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Visualizar Moto</title>
</head>
<body>
    <a href="welcome.php" class="btn btn-primary">voltar</a>   
    <br>
    <a href="motos.txt"></a>
<?php
    $handle = fopen("motos.txt", "r");
    while(!feof($handle)) {
        $line = fgets($handle);
        echo $line . "<br>";
    }
    fclose($handle);
    ?>
</body>
</html>