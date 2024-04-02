<?php
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['login'] == 'portaria' and $_POST['senha'] == 'FatecAraras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Portaria';
         header("location: welcome.php"); //pra onde vai dps 
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div>
        <h2>Acessar</h2>
        <p>Favor insira o login</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Login</label>
                <input type="text" name="login" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>
</body>
</html>