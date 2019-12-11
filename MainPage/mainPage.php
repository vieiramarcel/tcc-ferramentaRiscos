<?php
  include("../cabecalho/cabecalho.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>RM-AGILE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mainPage.css" />
  <link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> 
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>

</head>

<body>
  <div class="titulo">
    <h1> Como gerenciar riscos a partir do seu perfil</h1>
  </div>

  <div class="container">


      <div class="box">
        <a>
          <b>Quantidade de funcionários</b>
        </a>
        <div class="checkbox"> 
          <label>
            <input type="radio" name="quantity" value="0">1-10 colaboradores</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="quantity" value="1">11-30 colaboradores</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="radio" name="quantity" value="2">30+ colaboradores</label>
        </div>
      </div>

      <div class="box">
        <a>
          <b>Metodologia ágil utilizada</b>
        </a>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="3">Scrum</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="4">Kanban</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="5">XP</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="metodo" value="6">Outro</label>
        </div>
      </div>

      <div class="box">
        <a>
          <b>Segmento de software</b>
        </a>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Segmento" value="7">Segurança</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Segmento" value="8">Finanças</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Segmento" value="9">Saúde</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Segmento" value="10">Educação</label>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="Segmento" value="11">Outro</label>
        </div>
      </div>
      <button class="btn">Confirmar</button>
  

  </div>

  <script>

    $(document).ready(function () {
      $("button").click(function (e) {
        e.preventDefault();
        var names = [];
        $('input:checkbox:checked, input:radio:checked').each(function () {
          names.push(this.value);
        });
        sessionStorage.setItem('selectedItems', JSON.stringify(names));
        setTimeout(function(){ document.location.href = '../guias/guias.php' }, 1000);
      });
    });

  </script>

</body>

</html>