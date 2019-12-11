<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RM-AGILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png"/>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style type="text/css">
.menu-bar{
    min-height: 100px;
    padding-top: 22px;
    background: #f6f6f6;
    box-shadow: 0 0 10px #000;
}

.menu-bar img{
    width: 93px;
    margin-left:39px;
    transform: translatex(-19%);
}

.menu-bar a.title {
    color: #000;
    font-size: 30px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    position: absolute;
    left: 47%;
    transform: translatex(-10%);
}

.nav-link{
    
    color: #000;
}
.nav-link:hover{
    color: #ccad00;
}
.navbar-toggler .fa{
  
    color: #000;
}

</style>

<body>
<div class = "menu-bar">
            <nav class="navbar navbar-expand-lg ">                     
              <a class="navbar-brand"><img src="../Imagens/logos.png"></a>
              <a class="title justify-content-center" href="../MainPage/mainPage.php">RM-AGILE</a>               
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
              </button>
              
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto text-right">
                  <li class="nav-item">
                    <a class="nav-link" href="../modelos/modelos.php">Modelos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Perfil/perfil.php">Perfil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Feedback/feedback.php">Feedback</a>
                  </li>  
                  <li class="nav-item">
                    <a class="nav-link" href="../Informacoes/informacoes.php">Informações</a>
                  </li>                      
                </ul>
              </div>
            </nav>
    </div>
</body>
</head>
</html>