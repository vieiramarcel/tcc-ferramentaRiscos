<?php
	include("../cabecalho/cabecalho.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>RM-AGILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="feedbacks.css" />
	<link rel="shortcut icon" href="../Imagens/favicon.png" type="image/x-png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
   
    <body>
    <div class = "table-responsive" >   
    <table class = "table">
    <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Mensagem</th>
    </tr>
    
    <?php
    session_start();
    if(!isset($_SESSION['emailSession']) AND !isset($_SESSION['senhaSession'])){
        header ("Location: perfil.php");
        exit();
    }

    $conn = mysqli_connect("localhost", "root", "", "rmagile");
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT nome, email, mensagem FROM feedback";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["nome"]. "</td><td>" . $row["email"] . "</td><td>"
    . $row["mensagem"]. "</td></tr>";
    }
    echo "</table>";
    } else { echo "0 results"; }
    $conn->close();
    ?>
    </table>
    
    <div class = "botao">
        <button class = "sair" onclick="window.location.href = 'perfil.php'">Sair</button>
    </div>
</div>
    </body>
    </html>