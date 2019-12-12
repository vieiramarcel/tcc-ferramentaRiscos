<?php

    session_start();
    $connect = mysqli_connect("localhost", "root", "", "rmagile");
    
    $nome = mysqli_real_escape_string($connect, trim($_POST['nome']));
    $email = mysqli_real_escape_string($connect, trim($_POST['email']));
    $mensagem = mysqli_real_escape_string($connect, trim($_POST['mensagem']));
   
    $result = mysqli_query($connect,"INSERT INTO feedback (nome, email, mensagem) VALUES ('$nome','$email','$mensagem')")
    or die ("falha ".mysqli_error($connect));
    $_SESSION['status_feedback'] = true;
    if($_SESSION['status_feedback']){
        header("Location: feedback.php");
    }

?>