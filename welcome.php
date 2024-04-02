<?php

include 'header.php';

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <div class="page-header">
        <h1>Usuário: <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b></h1>
    </div>
    <p>
        <a href="cadastroCarro.php" class="btn btn-primary">Cadastro carros</a>
        <br><br>
        <a href="visualizarCarro.php" class="btn btn-primary">Visualizar carros</a>
        <br></br>
        <br></br>
        <a href="cadastroMoto.php" class="btn btn-primary">Cadastro motos</a>
        <br></br>
        <a href="visualizarMoto.php" class="btn btn-primary">Visualizar motos</a>
        <br></br>
        <br></br>
        <a href="logout.php" class="btn btn-primary">Sair da conta</a>
    </p>
</body>
</html>