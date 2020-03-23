<?php
  include("../cabecalho/cabecalho.php");
  include("manterLogin.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RM-AGILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png"/>
    <link rel="stylesheet"  href="perfil.css" />
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                    <form class="form-container" action = "processo.php" method = "POST">
                        <div class="form-group">
                            <label for="user"><B>E-MAIL</B></label>
                            <input type="email" class="form-control" id="user" aria-describedby="emailHelp" name = "user" required>
                            <small id="emailHelp" class="form-text text-muted">Aba somente para administrador</small>
                        </div>
                        <div class="form-group">
                            <label for="pass"><B>SENHA</B></label>
                            <input type="password" class="form-control" id="pass" name = "pass" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Mantenha-me logado</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                    </form>
            </section>
        </section>
    </section> 
</body>
</html>