<?php
  include("../cabecalho/cabecalho.php")
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RM-AGILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png"/>
    <link rel="stylesheet" href="feedback.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<form class = "feedback" action = "processo.php" method = "POST">
  <div class="contact-form" >
    <h1>Feedback</h1>
    <div class="txtb">
      <label><b>nome:</b></label>
      <input type="text" name="nome" id = "nome" placeholder="Digite seu nome" required>
    </div>
      
    <div class="txtb">
      <label><b>E-mail :</b></label>
      <input type="email" name="email" id = "email" placeholder="Digite seu E-mail" required>
    </div>
    
    <div class="txtb">
      <label><b>Mensagem</b></label>
      <textarea name="mensagem" id = "mensagem" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Enviar</button>
  </div>
  </form>

<?php
    session_start();
    if(isset($_SESSION['status_feedback'])):
  ?>

  <div class = "notificacao">
    <a>Obrigado pelo seu feedback!</a>
  </div>

  <?php
    endif;
    unset($_SESSION['status_feedback']);
  ?>

 
  
</body>
</html>