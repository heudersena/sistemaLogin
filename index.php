<?php
session_start();
if (isset($_SESSION['id']) && empty($_SESSION['id']) == false) {
    ?>
    <!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <title>Login</title>
            <style>
                form{
                    width: 500px;
                    margin-left: auto;
                    margin-right: auto;
                }
                div .navbar-form{
                    color: #fff;
                    margin-top: 1em;
                }
                
                #nav{
                    background-color: #398439;
                }
            </style>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
        </head>
        <body>
            <nav class="navbar navbar-inverse navbar-fixed-top" id="nav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">ADMINISTRAÇÃO</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <div class="navbar-form navbar-right">
                            <?php echo "Bem vindo: ".$_SESSION['email']; ?>
                        </div>
                    </div><!--/.navbar-collapse -->
                </div>
            </nav>
            <div class="jumbotron">
                <div   class="container">
                    <h1>Seja bem vindo  </h1>
                    <h4>Área restrita</h4>
                </div>
            </div>


            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="http://malsup.github.io/jquery.form.js"></script>
            <script src="boostrap/js/boostrap.min.js"></script>
        </body>
    </html>





    <?php
} else {
    header("Location: login.php");
    die();
}
?>

