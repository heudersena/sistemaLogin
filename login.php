<?php
session_start();
if (isset($_POST['email']) && empty($_POST['email']) == false) {

    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $dns = "mysql:dbname=blog;host=127.0.0.1";
    $dbuser = "root";
    $dbpass = "123456";

    try {
        $db = new PDO($dns, $dbuser, $dbpass);
        $sql = $db->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['email'] = $dado['email'];
            var_dump($_SESSION);
            header("location: index.php");
            die();
        }
    } catch (PDOException $e) {
        echo "Falhou:" . $e->getMessage();
    }
}
?>





<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Source+Code+Pro" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]-->
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body>
        <div class="jumbotron">

        </div>
        <p id="pcolor"><hr></p>
    <div class="container">
        <div class="row">
            <form method="POST" action="login.php">
                <div class="form-group col-md-6">
                    <label for="email">E-mail</label>
                    <input class="form-control" name="email" placeholder="contato@gmail.com">
                </div>
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input class="form-control" type="password" name="senha" placeholder="********">
                    <button id="btn">Logar</button>
                </div>
            </form>
        </div>
    </div>
    <footer id="rodape">
        <p><i>License apache2 v1.0</i> <a href="">Heuder Sena</a> <?php echo "&copy;" . date("Y"); ?></p>
    </footer>
    <script src="boostrap/js/boostrap.min.js"></script>
</body>
</html>