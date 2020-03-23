<?php
session_start();
    if(isset($_SESSION['emailSession']) AND isset($_SESSION['senhaSession'])){
        header ("Location: feedbacks.php");
        exit();
    }
?>