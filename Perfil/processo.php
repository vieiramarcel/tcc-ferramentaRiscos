<?php

    session_start();
    
    $username = $_POST['user'];
    $password = $_POST['pass'];

    $connect = mysqli_connect("localhost", "root", "", "rmagile");

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    
    $username = mysqli_real_escape_string($connect, $username);
    $password = mysqli_real_escape_string($connect, $password);

    $result = mysqli_query($connect, "select * from login where email = '$username' and senha = '$password'")
        or die ("failed to query database ".mysqli_error());

    $row = mysqli_fetch_array($result);
    if($row['email'] == $username && $row['senha'] == $password){

        $_SESSION['emailSession'] = $username;
        $_SESSION['senhaSession'] = $password;
        header("Location: feedbacks.php");

    } else {
        echo "Login falhou";
    }
?>