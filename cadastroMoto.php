<?php

include 'header.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro Moto</title>
</head>
<body>
<form action="cadMoto.php" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label>Nome completo</label>
                <input type="text" class="form-control" name="name" placeholder="Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Ra do aluno</label>
                <input type="text" class="form-control" name="ra" placeholder="Ra" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Placa do veículo</label>
                <input type="text" class="form-control" name="placa" placeholder="Placa" required>
            </div>
        <input class="btn btn-primary btn-meu" type="submit" value="Enviar">
    </form>
</body>
</html>